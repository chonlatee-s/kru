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
        include('./menu.php');
    ?>

    <!-- banner -->
    <div class="container mb-4">
        <div class="row text-center">
            <div class="col-12">   
                <p class="topicTop">เนื้อหาที่เกี่ยวข้อง ข่าวการศึกษา</p>
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
                            <th class="htable text-center" width="100">รายละเอียด</th>
                            <!-- <th class="htable">เปิดดู</th> -->
                        </tr>
                    </thead>
                    <tbody class="bodytable">
                        <tr>
                            <td>ข้อมูลยุทธศาสตร์ชาติ พ.ศ. 2561-2580</td>
                            <td class="text-center"><a href="./contents/national.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>ครูอาสาสมัครโครงการสอนภาษาไทย ณ วัดไทยในต่างประเทศ ประจำปี พ.ศ.๒๕๖๒ (จุฬาลงกรณ์มหาวิทยาลัย)</td>
                            <td class="text-center"><a href="./contents/volunteer_cu.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>โครงการครูอาสาสมัครสอนภาษาและวัฒนธรรมไทยในต่างประเทศ ประจำปี 2562 (มหาวิทยาลัยราชภัฎบ้านสมเด็จเจ้าพระยา)</td>
                            <td class="text-center"><a href="./contents/volunteer.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>กำหนดการสอบครูผู้ช่วยสพฐ. รอบทั่วไป ปี 2561</td>
                            <td class="text-center"><a href="./agenda.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>ประกาศรับสมัครสอบครูผู้ช่วยสพฐ. รอบทั่วไป ปี 2561</td>
                            <td class="text-center"><a href="./apply.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>คุณสมบัติการขอขึ้นทะเบียนรับใบอนุญาตประกอบวิชาชีพทางการศึกษา</td>
                            <td class="text-center"><a href="./contents/cer.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>มาตรฐานวิชาชีพทางการศึกษา</td>
                            <td class="text-center"><a href="./contents/std_teacher.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>ครูผู้ช่วยคืออะไร มีหน้าที่ความรับผิดชอบอย่างไรบ้าง</td>
                            <td class="text-center"><a href="./contents/detail_teacher.php">รายละเอียด</a></td>
                        </tr> 
                        <tr>
                            <td>มาตรฐานการอุดมศึกษา พ.ศ.๒๕๖๑</td>
                            <td class="text-center"><a href="./contents/std_university.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>แผนการศึกษาแห่งชาติ พ.ศ.2560-2579</td>
                            <td class="text-center"><a href="./contents/plan_edu.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>แผนพัฒนาการศึกษาของกระทรวงศึกษาธิการ ฉบับที่ 12 (พ.ศ. 2560 – 2564)</td>
                            <td class="text-center"><a href="./contents/plan_edu12.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>สอศ. จับมือนานาชาติ ประชุมวิชาการ</td>
                            <td class="text-center"><a href="./contents/rchewa.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>สอศ. ร่วมกับเยอรมนี ยกระดับมาตรฐานอาชีวศึกษา</td>
                            <td class="text-center"><a href="./contents/rchewa_contact.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>สอศ. ร่วมสัมมนาวิชาการ “อาชีวะ 4.0 ศักยภาพแห่งอนาคต”</td>
                            <td class="text-center"><a href="./contents/rchewa_vichakan.php">รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>3R 8C คืออะไร</td>
                            <td class="text-center"><a href="./contents/3r8c.php">รายละเอียด</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-facebook"></a>
                <a href="http://twitter.com/share?text=ฝึกทำแบบทดสอบครูผู้ช่วยออนไลน์&url=http://ครูผู้ช่วย.com.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-twitter"></a>
                <a href="https://plus.google.com/share?url=http://ครูผู้ช่วย.com.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-google"></a>
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