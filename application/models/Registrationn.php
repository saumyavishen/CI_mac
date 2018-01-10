<?php
Class Registrationn extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

	function insert($name,$email,$password)
	{
		$query = $this->db->query("INSERT INTO Registration_form (name,email,password) VALUES ('$name','$email','$password')");
		return $query;

	}


	function fetch_data()
	{
		$query = $this->db->query("SELECT * FROM  Registration_form");
		return $query->result();
	}

}