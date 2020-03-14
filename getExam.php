<?php
    header("Access-Control-Allow-Origin: *");
    include('config.php');
    $MODE = $_GET["topic"];
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
		$sql = "SELECT id,question,ch1,ch2,ch3,ch4,answer,ref FROM exam WHERE mode='$MODE' ORDER BY RAND(), type LIMIT 10";
        $query = $db->query($sql);
        $json_array = array();
        
        while($row = $query->fetch()) {
            $json_array[] = $row;
        }

        $myJSON = json_encode($json_array);
        echo $myJSON;
        // echo '<pre>';
        // print_r($json_array);
        // echo '</pre>';
	
	} catch (PDOException $e) {
         echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
	}
 
?>