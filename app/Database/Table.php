<?php
namespace App\Database;

class Table
{
	/**
	* @var  \PDO
	*/
	private $pdo;

	/**
	* @var  string
	*/
	protected $table;

	/**
	* @var  string|null
	*/
	protected $entity;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}


	
    /**
     * Récupère un élément à partir de son ID
     *
     * @param  int $id
     * @return  mixed
     */
    public function find(int $id)
	{
		$query = $this->pdo
				->prepare("SELECT * FROM {$this->table} WHERE id = ?");
		$query->execute([$id]);

		if($this->entity){
			$query->setFetchMode(\PDO::FETCH_CLASS, $this->entity);		
		}

		return $query->fetch() ?: null;
	}

	/**
     * Met à jour un enregistrement au niveau de la base de données
     *
     * @param  int $id
     * @param  array $params
     * @return  bool
     */
    public function update(int $id, array $params): bool
	{
		$fieldQuery = $this->buildFieldQuery($params);
		$params["id"] = $id;
		$statement = $this->pdo->prepare("UPDATE {$this->table} SET $fieldQuery WHERE id = :id");

		return $statement->execute($params);
	}

	/**
     * Crée un nouvel enregistrement
     *
     * @param  array $params
     * @return  bool
     */
    public function insert(array $params): bool
	{
		$fields = array_keys($params);

		$values = join(', ', array_map(function($field){
			return ':' . $field;
		}, $fields));

		$fields = join(', ', $fields);
		
		$statement = $this->pdo->prepare("INSERT INTO {$this->table} ($fields) VALUES ($values)");

		return $statement->execute($params);

	}

	/**
     * Supprime un enregistrement
     *
     * @param  int $id
     * @return  bool
     */
    public function delete(int $id): bool
	{
		$statement = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = ?");
		return $statement->execute([$id]);
	}

	private function buildFieldQuery(array $params)
	{
		return join(', ', array_map(function($field) {
			return "$field = :$field";
		}, array_keys($params)));
	}


    /**
     * @return  string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @return  string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @return  \PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }
}