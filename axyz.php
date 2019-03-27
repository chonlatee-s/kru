<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"> -->
 
    <!-- Include Editor style. -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css" /> -->

    <title>เว็บฝึกทำข้อสอบครูผู้ช่วยออนไลน์</title>
  </head>
  <body>
  <div class="container-fluid">
    <h2>UPLOAD NEWS</h2>
        <form name="form1" method="post" action="upload.php" enctype="multipart/form-data">
            หัวข้อข่าว <input type="text" name="topic" class="form-control"><br>
            เนื้อหา <textarea id="froala-editor" name="content" cols="100" rows="10"></textarea><br>
            รูป <input type="file" name="filUpload"><br><br>
            ที่มา <input type="text" name="ref" class="form-control"><br>
            <input type="submit" value="UPLOAD">
        </form>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script> -->
 
    <!-- Include Editor JS files. -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script> -->
    <!-- <script>
        $(document).ready(function(){
            $('textarea#froala-editor').froalaEditor();
        });
    </script> -->

  </body>
</html>