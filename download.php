<?php
    require_once('./mpdf/mpdf.php');
    ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="2">แนวข้อสอบครูผู้ช่วย (พร้อมเฉลย) โดย <?php echo $_GET['name'] ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('config.php');
                    $trainer = $_GET["trainer"];
                    $num=1;
                    try {
                        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
                        $sql = "SELECT * FROM exam WHERE ref_id_trainer='$trainer'";
                        $query = $db->query($sql);

                        while($r = $query->fetch()) {
                            echo"<tr><td width='70'><b>ข้อที่ ".$num."</b></td> <td> <b>".$r['question']."</b></td></tr>";
                            echo"<tr><td>ตัวเลือกที่ 1</td> <td>".$r['ch1']."</td><tr>";
                            echo"<tr><td>ตัวเลือกที่ 2</td> <td>".$r['ch2']."</td><tr>";
                            echo"<tr><td>ตัวเลือกที่ 3</td> <td>".$r['ch3']."</td><tr>";
                            echo"<tr><td>ตัวเลือกที่ 4</td> <td>".$r['ch4']."</td><tr>";
                            echo"<tr><td><u><b>เฉลย</b></u></td> <td><b>ตัวเลือกที่ ".$r['answer']."</b></td></tr>";
                            echo"<tr><td colspan='2'><hr></td></tr>";
                            $num++;
                        }
                    }catch (PDOException $e) {
                        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
<?php
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf = new mPDF('th', 'A4', '0', 'THSarabunNew');//การตั้งค่ากระดาษ แนวตั้ง ก็ A4 แนวนอนเท่ากับ A4-L
    // $mpdf->SetHeader('ครูผู้ช่วย.com');
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>