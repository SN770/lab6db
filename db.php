<?php

	try {
		$connection = new PDO('mysql:host=localhost;dbname=lab6', 'root', '');
	} catch(PDOException $e){
		echo $e->getMessage();
	}

	function getAll(){
		global $connection;
		$query = $connection->prepare("select * from users");
		$query->execute();

		$results = $query->fetchAll();
		return $results;
	}

	function addUser($login, $pass, $name, $age){
		global $connection;
		$query = $connection->prepare("insert into users(name, age, city) VALUES(:n, :a, :c , :d)");
		$rows = $query->execute(array(":n"=>$login, ":a"=>$pass, ":c"=>$name, ":d"=>$age));

		return $rows>0;
	}

	function deleteUser($id){
		global $connection;
		$query = $connection->prepare("delete from users where id=:sid");
		$rows = $query->execute(array("sid"=>$id));

		return $rows>0;
	}

	function getOneUser($id){
		global $connection;
		$query = $connection->prepare("select * from users where id=:sid");
		$rows = $query->execute(array("sid"=>$id));
		$result = $query->fetch();
		return $result;
	}

	function updateUser($id, $login, $pass, $name, $age){
		global $connection;
		$query = $connection->prepare("
			update users
			SET login=:l, pass=:p, name=:n, age=:a
			WHERE id=:sid
			");
		$rows = $query->execute(array(":l"=>$login, ":p"=>$pass, ":n"=>$name, ":a"=>$age, "sid"=>$id));
		return $rows>0;
	}

?>