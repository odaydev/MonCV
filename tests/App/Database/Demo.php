<?php
namespace Tests\App\Database;

class Demo {

	private $username;

	public function getUserName() {
		return $this->username;
	}

	public function setUserName($username) {
		$this->username = $username . 'demo';
	}
}