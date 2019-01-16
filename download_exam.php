<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>เว็บฝึกทำข้อสอบครูผู้ช่วยออนไลน์</title>
    <style>
        .fa {padding: 10px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;margin: 5px 2px;}
        .fa:hover {opacity: 0.7;}
        .fa-facebook {background: #3B5998;color: white;}
        .fa-twitter {background: #55ACEE;color: white;}
        .fa-google {background: #dd4b39;color: white;}
    </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121483375-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-121483375-1');
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5901161227057601",
                enable_page_level_ads: true
            });
        </script>
  </head>
  <body>
    <!-- menu -->
    <?php 
        include('menu.php');
    ?>

    <!-- banner -->
    <div class="container mb-4">
        <div class="row text-center">
            <div class="col-12">   
                <p class="topicTop">ดาวน์โหลดแนวข้อสอบครูผู้ช่วยทุกสังกัด</p>
            </div>
        </div>
    </div>

    <div id="apply" class="container mb-3">
        <div class="row mb-3">
            <div class="col-10 mx-auto">   
                <div class="input-group">
                    <div class="input-group-prepend"><div class="input-group-text">ค้นหา</div></div>
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="พิมพ์คำที่ต้องการค้นหา . . .">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">   
                <table id="myTable" class="table table-bordered table-striped table-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th class="htable">หัวข้อ</th>
                            <th class="htable text-center" width="100">จัดการ</th>
                            <!-- <th class="htable">เปิดดู</th> -->
                        </tr>
                    </thead>
                    <tbody class="bodytable">
                        <tr>
                            <td>ไฟล์อ่านสอบครู อปท.</td>
                            <td class="text-center"><a href="./contents/exam1.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>ไฟล์อ่านสอบครู สพฐ.</td>
                            <td class="text-center"><a href="./contents/exam2.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>เก็งข้อสอบครูผู้ช่วย 2558</td>
                            <td class="text-center"><a href="./download/ex1.zip" target="_blank">ดาวน์โหลด</a></td>
                        </tr> 
                        <tr>
                            <td>แนวข้อสอบอาชีวศึกษา (ความรอบรู้) 2559 </td>
                            <td class="text-center"><a href="./download/ex2.zip" target="_blank">ดาวน์โหลด</a></td>
                        </tr> 
                        <tr>
                            <td>แนวข้อสอบครูผ้ช่วย (สำหรับท่านที่ไม่ค่อยมีเวลาอ่านเยอะ)</td>
                            <td class="text-center"><a href="./download/ex3.zip" target="_blank">ดาวน์โหลด</a></td>
                        </tr> 
                        <tr>
                            <td>สรุปย่อแนวข้อสอบอาชีวศึกษา</td>
                            <td class="text-center"><a href="./download/ex4.zip" target="_blank">ดาวน์โหลด</a></td>
                        </tr> 
                        <tr>
                            <td>แนวข้อสอบวิชาเอกคอมพิวเตอร์</td>
                            <td class="text-center"><a href="./download/ex_com.zip" target="_blank">ดาวน์โหลด</a></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-facebook"></a>
                <a href="http://twitter.com/share?text=ฝึกทำแบบทดสอบครูผู้ช่วยออนไลน์&url=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-twitter"></a>
                <a href="https://plus.google.com/share?url=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-google"></a>
            </div>
        </div>
    </div>
    </br>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
    
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }
    </script>
  </body>
</html>