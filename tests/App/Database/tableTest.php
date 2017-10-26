<?php 

namespace Tests\App\Database;

use App\Database\Table;
use Tests\Config\BaseTestCase;


class tableTest extends BaseTestCase
{
		
	private $table;

	public function setUp()
	{
		parent::setUp();
		$pdo = $this->pdo;

		$pdo->exec("CREATE TABLE test(
			id INTEGER PRIMARY KEY AUTOINCREMENT,
			name VARCHAR(255)
		)");

		$this->table = new Table($pdo);

		$reflection = new \ReflectionClass($this->table);
		$property = $reflection->getProperty('table');
		$property->setAccessible(true);
		$property->setValue($this->table, 'test');
	}

	public function testFind()
	{
		$this->table->getPdo()->exec("INSERT INTO test (name) VALUES ('a1')");
		$this->table->getPdo()->exec("INSERT INTO test (name) VALUES ('a2')");

		$test = $this->table->find(1);
		$this->assertEquals('a1', $test->name);
		$this->assertInstanceOf(\Stdclass::class, $test);
	}
}