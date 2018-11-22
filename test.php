<?php
    $mode = $_POST["mode"];
    if(!$mode) header("Location:./index.php");	
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .topic{font-size: 18px;}
        .topic_result{margin-bottom:2px;}
        .result{font-size: 12px; font-weight: 200; margin-bottom:0px;}
        .ref_text{font-size: 12px; font-weight: 200; margin-bottom:1px;}
        .xzyTime{font-size:22px; font-weight:400; color:#ccffff; }

        .containerX {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .containerX input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }
        .containerX:hover input ~ .checkmark {
            background-color: #ccc;
        }
        .containerX input:checked ~ .checkmark {
            background-color: #82528b;
        }
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        .containerX input:checked ~ .checkmark:after {
            display: block;
        }
        .containerX .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
        .fa {padding: 10px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;margin: 5px 2px;}
        .fa:hover {opacity: 0.7;}
        .fa-facebook {background: #3B5998;color: white;}
        .fa-twitter {background: #55ACEE;color: white;}
        .fa-google {background: #dd4b39;color: white;}
    </style>
    <title>เว็บฝึกทำข้อสอบครูผู้ช่วยออนไลน์</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121483375-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-121483375-1');
        </script>
  </head>
  <body>
<!-- menu -->
<?php include('menu.php'); ?>

<div id="overall">
  <div class="container" id="show">
        <div class="row text-center">
            <div class="col-12 mb-2">  
                <div class="alert alert-warning alert-dismissible fade show" id="al1" role="alert">
                    <p class="al"><b>คำชี้แจง</b> ข้อสอบมีทั้งหมด 10 ข้อ จงเลือกคำตอบที่ถูกต้องเพียงหนึ่งข้อ เวลาในการทำ 10 นาที</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" id="al2" role="alert">
                    <p class="al" id="mes"></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">  
                <div class="progress mb-2">
                    <div id="percent" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:0%;" aria-valuemax="100">0%</div>
                </div>
            </div>
        </div>

<?php
    include('config.php');
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
		$sql = "SELECT id,question,ch1,ch2,ch3,ch4 FROM exam WHERE mode='$mode' ORDER BY RAND(), type LIMIT 10";
        $query = $db->query($sql);

        $perpage = 1;
        $total_record = $query->rowCount(); 
        $total_page = ceil($total_record / $perpage);
        $num=1;
        
		while($r = $query->fetch()) { ?>
            <div class="row online" id="<?=$num?>">
                <div class="col-12">
                    <div class="card text-white" style="background-color:#82528b">
                        <div class="card-header text-center xzyTime">เริ่มจับเวลา</div>
                        <div class="card-body" style="background-color:#b27fbc">
                            <div class="row">
                                <div class="col-12"> <p class="card-title float-left topic" style="color:#fff">ข้อที่ <?php echo $num." ".$r["question"]; ?> </p> </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="containerX" id="<?=$num?>">
                                                <span style="font-size:16px; font-weight:200;"><?php echo $r["ch1"]; ?></span>
                                                <input type="radio" id="A<?=$num?>" name="radio<?=$num?>" value="1">
                                                <input type="hidden" value="<?=$r["ch1"]?>">
                                                <input type="hidden" value="<?=$r["id"]?>"> 
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="containerX" id="<?=$num?>"><span style="font-size:16px; font-weight:200;"><?php echo $r["ch2"]; ?></span>
                                                <input type="radio" id="B<?=$num?>" name="radio<?=$num?>" value="2">
                                                <input type="hidden" value="<?=$r["ch2"]?>">
                                                <input type="hidden" value="<?=$r["id"]?>"> 
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="containerX" id="<?=$num?>"><span style="font-size:16px; font-weight:200;"><?php echo $r["ch3"]; ?></span>
                                                <input type="radio" id="C<?=$num?>" name="radio<?=$num?>" value="3">
                                                <input type="hidden" value="<?=$r["ch3"]?>">
                                                <input type="hidden" value="<?=$r["id"]?>"> 
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="containerX" id="<?=$num?>"><span style="font-size:16px; font-weight:200;"><?php echo $r["ch4"]; ?></span>
                                                <input type="radio" id="D<?=$num?>" name="radio<?=$num?>" value="4">
                                                <input type="hidden" value="<?=$r["ch4"]?>">
                                                <input type="hidden" value="<?=$r["id"]?>"> 
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

		<?php $num++;}
	
	} catch (PDOException $e) {
         echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
	}
 
?>
        <div class="row text-right">
            <div class="col-12"><p style="color:gray; font-size:12px; font-weight:200; margin-right:0px;"><?php if($_POST['mode']=='1'){echo"หมวดวิชาภาค ก";}else{echo"หมวดวิชาภาค ข";} ?></p></div>
        </div>
        
        <div class="row text-center mb-2">
            <div class="col-12">
                <button type="submit" id="checkAnswer" class="btn btn-info button">ตรวจคำตอบ</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation"> 
                    <ul class="pagination pagination-sm justify-content-center">
                        <!-- <li class="page-item disabled">
                            <a href="#" aria-label="Previous" class="page-link">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li> -->
                        <?php 
                            for($i=1;$i<=$total_page;$i++){
                                echo"<li class='page-item' id='b$i'> <a href='#' class='page-link'>$i</a> </li>";
                            }
                        ?>
                        <li class="page-item">
                            <a href="#" aria-label="Next" class="page-link showMessage">
                                <b><span aria-hidden="true" class="showMessage">?</span></b>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> 
</div> 
<!-- end overall -->
<div id="showEnd">
    <div class="container mb-2">
        <div class="row">
            <!-- <div class="col-sm-12 col-md-3 text-center"> 
                <img src="./img/person.png" alt="ครูผู้ช่วย.com" id="c2" class="img-fluid max-auto mb-2"  data-toggle="popover" data-trigger="focus"  data-placement="bottom" title="สวัสดีครับว่าที่ครูผู้ช่วย" data-content="แบ่งปันความรู้ให้กัน กดแชร์ได้เลยเด้อ">
            </div> -->
            <div class="col-sm-12 col-md-12 text-center"> 
                <div class="card bg-light mb-3 mx-auto" style="max-width: 45rem;">
                    <div class="card-header">สรุปผลการทดสอบ</div>
                    <div class="card-body text-secondary">
                        <p id="show_score" style="font-size:60px; color:#82528b" class="card-title"></p>
                        <p id="report_txt" class="card-text" style="color:#7e6296; font-weight: 200; font-size:20px"></p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-facebook"></a>
                        <a href="http://twitter.com/share?text=ฝึกทำแบบทดสอบครูผู้ช่วยออนไลน์&url=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-twitter"></a>
                        <a href="https://plus.google.com/share?url=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-google"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col-sm-12 col-md-3 "> 
            </div> -->
            <div class="col-sm-12 col-md-12"> 
                <div class="card bg-light mb-3 mx-auto" style="max-width: 45rem;">
                    <div class="card-header text-center">เฉลยข้อสอบ</div>
                    <div class="card-body text-secondary">
                        <p id="btn_show_answer" class="card-text text-center"><a href="#">คลิกเพื่อดูรายละเอียด</a></p>
                        <div id="show_ans_all"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end show answer -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/test.js"></script>
  </body>
</html>