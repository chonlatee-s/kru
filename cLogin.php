<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

include('config.php');
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
		$sql = "SELECT * FROM login WHERE user='$user' AND pass='$pass' ";
        $query = $db->query($sql);

        while($r = $query->fetch()) {
            $user_db = $r["user"];
            $pass_db = $r["pass"];
        }

        if(($user == $user_db) && ($pass == $pass_db)) {
            header("Location: axyz.php");
            die();
        }else {
            echo "YOUR ACCOUNT IS NOT CORRECT";
        }

    } catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
   }
?>