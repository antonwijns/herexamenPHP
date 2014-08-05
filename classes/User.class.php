<?php

include_once('Connection.php');

class User
{

private $m_sFirstName;
private $m_sLastName;
private $m_sEmail;
private $m_sPassword;
private $m_tProfilepic;


public function __set($p_sProperty, $p_vValue)
	{
		switch ($p_sProperty)
		{

			case 'FirstName':
			
			$this->m_sFirstName = $p_vValue;
			break;

			case 'LastName':

			$this->m_sLastName = $p_vValue;
			break;

			case 'Email':

			$this->m_sEmail = $p_vValue;
			break;

			case 'Password':

			$this->m_sPassword = $p_vValue;
			break;

			case 'Profilepic' :
			$this->m_tProfilepic= $p_vValue;
			break;
		}

	}

public function register()
		
		{

		$db = new Db();
		$sql = "insert into phpherexamen.user (LastName, FirstName, Email,Password, Profilepic) values('"
		 . $db->conn->real_escape_string($this->m_sLastName) ."', '" 
		 . $db->conn->real_escape_string($this->m_sFirstName). "', '" 
		 . $db->conn->real_escape_string($this->m_sEmail)	 . "', '"
		 . $db->conn->real_escape_string($this->m_sPassword)	 . "', '"
		 . $db->conn->real_escape_string($this->m_tProfilepic)	 . ");";

		$db->conn->query($sql);

		}

public function userExists()
		{

		$db = new Db();
			$sql = "select * from phpherexamen.user where 
			Email = '" .  $db->conn->real_escape_string($this->m_sEmail) . "';";
			
			$result = $db->conn->query($sql);
			$numberOfRows = $result->num_rows;
			
			if ($numberOfRows == 1){
			
			return true ;

			}else{

			return false;
			}

		}

public function login()
		
		{
			$db = new Db();
			$sql = "select * from phpherexamen.user where 
			Email = '" .  $db->conn->real_escape_string($this->m_sEmail) . "' and Password = '" . $db->conn->real_escape_string($this->m_sPassword) ."';";
			
			$result = $db->conn->query($sql);
			$numberOfRows = $result->num_rows;
			
			if ($numberOfRows == 1){

			return true ;

			}else{

			return false;
			}

		}	

public function getUserId()
	{
			$db = new Db();
			$sql = "select UserId from user where 
			Email = '" .  $db->conn->real_escape_string($this->m_sEmail) . "' and Password = '" . $db->conn->real_escape_string($this->m_sPassword) ."';";
			
			$result = $db->conn->query($sql);
			$row = mysqli_fetch_row($result);
			
			return $row[0];

	}

public function getUsername()
	{

	$db = new Db();
			$sql = "select Firstname from user where 
			Email = '" .  $db->conn->real_escape_string($this->m_sEmail) . "' and Password = '" . $db->conn->real_escape_string($this->m_sPassword) ."';";
			
			$result = $db->conn->query($sql);
			$row = mysqli_fetch_row($result);
			
			return $row[0];
	}
}


?>