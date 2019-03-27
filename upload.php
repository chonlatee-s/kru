<?php

include('config.php');
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);


        if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"])){
            echo "Copy/Upload Complete<br>";
        //*** Insert Record ***//
            $strSQL = "INSERT INTO news ";
            $strSQL .="(topic,content,files_picture,ref) VALUES ('".$_POST["topic"]."','".$_POST["content"]."','".$_FILES["filUpload"]["name"]."', '".$_POST["ref"]."')";
            $objQuery = $db->query($strSQL);
        }

    } catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
   }
?>
<a href="axyz.php"><< back</a>