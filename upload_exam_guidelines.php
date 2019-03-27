<?php

include('config.php');
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
        //*** Insert Record ***//
            $strSQL = "INSERT INTO exam_guidelines ";
            $strSQL .="(topic,link) VALUES ('".$_POST["topic"]."','".$_POST["link"]."')";
            $objQuery = $db->query($strSQL);

    } catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
   }
?>
<a href="bxyz.php"><< back</a>