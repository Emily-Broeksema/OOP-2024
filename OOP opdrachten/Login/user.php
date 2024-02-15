<?php

class User 
{
    public $username;
    private $password;
    private $role;


 public function registerUser($username, $password, $role)
 {
    echo "Registreer user<br>";
    $this->username = $username;
    $this->password = $password;
    $this->role = $role;
 }


}

?>