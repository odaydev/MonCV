<?php
namespace App\Database\Table;

use App\Database\Entity\User;
use App\Database\Table;

/**
* 
*/
class Usertable extends Table
{
	protected $entity = User::class;
	protected $table = 'users';

	
}