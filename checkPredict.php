<?php
    header("Access-Control-Allow-Origin: *");
    include('config.php');

	try {
        $id = $_POST['data'];

        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);

        $sql = "SELECT * FROM `predict` WHERE id='$id'";
        $query = $db->query($sql);
        $total_record = $query->rowCount(); 
        
        $ii=0;
		while($r = $query->fetch()) {
            $id = $r['id'];
            $result = $r['result'];
            $ar[$ii] = array(
                'id' => $id,
                'result' => $result
            );
            $ii++;
        }

        echo json_encode($ar);
        
    }catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
    }
?>