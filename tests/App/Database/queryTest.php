<?php 

namespace Tests\App\Database;

use App\Database\Entity\User;
use App\Database\Hydrator;
use App\Database\Query;
use App\Database\Table\UserTable;
use Tests\App\Database\Demo;
use Tests\Config\BaseTestCase;


class queryTest extends BaseTestCase
{

	private $userTable;

	public function setUp() {
		parent::setUp();
		$this->userTable = new UserTable($this->pdo);
	}

	public function testSimpleQuery(){
		$query = (new Query())->from('users')->select('name');
		$this->assertEquals('SELECT name FROM users', (string)$query);
		
	}

	public function testWithWhere(){
		$query = (new Query())->from('users', 'u')->where('a = :a OR b = :b', 'c = :c');
		$this->assertEquals('SELECT * FROM users as u WHERE (a = :a OR b = :b) AND (c = :c)', (string)$query);
		
	}

	public function testFetchAll() {		
		$users = (new Query($this->pdo))
			->from('users', 'u')
			->count();
		$this->assertEquals(10, $users);
	}

	public function testFind() {		
		$users = $this->userTable->find(50);
		$this->assertNull($users);
	}

	
	public function testHyd() {$arrayTest =  [
		'id'=> 3, 
		'oauth_provider' => '', 
		'oauth_uid' => '',
		'user_name' => 'kidflash',
		'first_name' => 'ludo', 
		'last_name' => 'Martin', 
		'email' => 'rrr@sshs.fr', 
		'locale' => 'fr_FR', 
		'picture' => 'blablabla.jpg', 
		'created' => '2010-12-12 15:23:16', 
		'modified' => '2015-06-12 15:23:16', 
		'password' => 'lyuliuyv' ];
		$users = (new Hydrator())->hydrate($arrayTest,User::class);
		// var_dump($users);
		$this->assertInstanceOf(User::class, $users);
	}

	public function testHydrateEntity()
	{
		$pdo = $this->pdo;
		$users = (new Query($pdo))
			->from('users', 'u')
			->into(Demo::class);
var_dump($users);
		$this->assertEquals('demo', substr($users[0]->getUserName(),-4));
		$this->assertInstanceOf(Demo::class, $users);
	}
}