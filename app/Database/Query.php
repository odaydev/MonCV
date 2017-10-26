<?php

namespace App\Database; 

use App\Database\Hydrator as Hydrator;

class Query implements \ArrayAccess, \Iterator {

	private $select;
	private $from;
	private $where = [];
	private $entity = null;
	private $group;
	private $order;
	private $limit;
	private $pdo;
	private $params;
	private $records;
	private $index = 0;


	public function __construct(?\PDO $pdo = null){
		$this->pdo = $pdo;
	}
	// $pdo = $this->getContainer()->get('db');
	public function from(string $table, ?string $alias = null): self 
	{
		if($alias) {
			$this->from[$alias] = $table;
		} else {
			$this->from[] = $table;
		}
		return $this;
	}

	public function select(string ...$fields): self 
	{
		$this->select = $fields;
		return $this;
	}

	public function where(string ...$conditions): self
	{
		$this->where = array_merge($this->where, $conditions);
		return $this;
	}

	public function count(): int{
		$this->select("COUNT(id)");
		return $this->execute()->fetchColumn(); 
	}

	public function params(string $params): self
	{
		$this->params = $params;
		return $this;
	}

	public function into(string $entity): self
	{
		$this->entity = $entity;
		return $this;
	}

	public function all(): array
	{
		if(is_null($this->records))
		{
			$this->records = $this->execute()->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $this->records;
	}

	public function get(int $index)
	{
		if($this->entity){
			return Hydrator::hydrate($this->all()[$index], $this->entity);
		}
		return $this->entity;
	}

	public function __toString()
	{
		$parts = ['SELECT'];
		if($this->select) {
			$parts[] = join(', ', $this->select);
		} else {
			$parts[] = '*';
		}

		$parts[] = 'FROM';
		$parts[] = $this->buildForm();
		if(!empty($this->where)) {
			$parts[] = 'WHERE';
			$parts[] = "(" . join(') AND (', $this->where) . ')';
		}

		return join(' ', $parts);
	}

	private function buildForm(): string{
		$from = [];
		foreach($this->from as $key => $value){
			if(is_string($key)){
				$from[]  ="$value as $key";
			} else {
				$from[] = $value;
			}
		}
		return join(' ,', $from);
	}

	private function execute() {
		$query = $this->__toString();
		if($this->params){
			$statement = $this->pdo->prepare($query);
			$statement->execute($this->params);
			return $statement;
		}
		return $this->pdo->query($query);
	}

	public function current(){
		return $this->get($this->index);
	}

	public function valid(){
		return isset($this->all()[$this->index]);
	}

	public function key(){
		return $this->index;
	}

	public function rewind(){
		$this->index = 0;
	}

	public function offsetExists($offset){
		return isset($this->all()[$offset]);
	}

	public function offsetGet($offset){
		return $this->get($offset);
	}


	public function next(): void
	{
		$this->index++;
	}

	public function offsetSet($offset, $value){
		throw new \Exception("Can't alter records");
	}
	
	public function offsetUnset($offset){
		throw new \Exception("Can't alter records");
	}
}