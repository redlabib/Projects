<?php


 class Contact{
 	private $host = "localhost";
 	private $user = "root";
 	private $pass = "";
 	private $db = "portfolio";
 	public $mysqli;

    
 	public function __construct() {
 		return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
 	}

 	public function contact($data) {
 		 
 		$name=$data['name'];
 		$ph_number=$data['ph_number'];
 		$email=$data['email'];
 		$message=$data['message'];
 		$q="insert into contact set name='$name', ph_number='$ph_number', email='$email',
 		message='$message'";
        return $this->mysqli->query($q);
             
 	}
 }