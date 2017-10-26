<?php 
namespace App\Database\Entity;

class User
{
	public $id;
	public $oauthProvider;
	public $oauthUid;
	public $userName;
	public $firstName;
	public $lastName;
	public $email;
	public $locale;
	public $picture;
	public $created;
	public $modified;
	public $password;

	
	public function setCreated($datetime) {
		if(is_string($datetime)) {
			$this->created = new \DateTime($datetime);
		}
	}

	public function setModified($datetime) {
		if(is_string($datetime)) {
			$this->modified = new \DateTime($datetime);
		}
	}

	
}   