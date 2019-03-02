<?php
    header("Access-Control-Allow-Origin: *");
    include('config.php');

	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
        // for($i=0; $i<count($_POST['data']); $i++){
        //     if($i==(count($_POST['data'])-1)){
        //         $condition .= "id = '".$_POST['data'][$i]['id']."' AND answer = '".$_POST['data'][$i]['answer']."' ";
        //     }else $condition .= "id = '".$_POST['data'][$i]['id']."' AND answer = '".$_POST['data'][$i]['answer']."' OR ";
        // } กรอกแค่ข้อที่ถูก
        $condition="";
        for($i=0; $i<count($_POST['data']); $i++){
            if($i==(count($_POST['data'])-1)){
                $condition .= "id = '".$_POST['data'][$i]['id']."' ";
            }else $condition .= "id = '".$_POST['data'][$i]['id']."' OR ";
        }

        $sql = "SELECT * FROM `exam` WHERE $condition";
        $query = $db->query($sql);
        $total_record = $query->rowCount(); 
        
        $ii=0;
		while($r = $query->fetch()) {
            $id = $r['id'];
            $question = $r['question'];
            $answer = $r['answer'];
            $ref = $r['ref'];
            
            if($answer == 1) $ch = $r['ch1'];
            else if($answer == 2) $ch = $r['ch2'];
            else if($answer == 3) $ch = $r['ch3'];
            else if($answer == 4) $ch = $r['ch4'];
            else $ch ="NO answer";

            $ar[$ii] = array(
                'id' => $id,
                'question' => $question,
                'answer' => $answer,
                'ch' => $ch,
                'ref' => $ref
            );
            $ii++;
        }

        echo json_encode($ar);
        
    }catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
    }
?>