<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/16.css">
    <link rel="stylesheet" href="css/17.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jss/bootstrap.min.js"></script>
    <script src="jss/jquery.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="jss/script.js" ></script>
</head>

<body>
<!--********************* H E A D E R *******************-->
<header></header>
<!--***************** N A V I G A T I O N ***************-->
<div id="navigation"><?php include_once 'php/course_home_student_nav.php'?>
</div>
<!--********************* C O N T E N T *****************-->
<div id="content">
    <section>
        <div class="container" style="padding-left: 0px;padding-right: 0px">
            <div id="info1">#<?php print $_SESSION['p_name']?></div>
            <div id="info2">Algorithm</div>
        </div>
    </section>
<!--********************* E D I T O R *******************-->
    <div class="container" id="wrapper">

        <div id="editor">

        </div>
    </div>
    <div class="container" style="padding-right: 0px">
        <a class="btn btn-primary" style="font-size: 25px;float: right;width: 150px;" id="submit">Submit</a>
    </div>
<script>
    $(document).ready(function () {
        $("#submit").click(function () {
            var contents = editor.getSession().getValue();
            $.post({
                url: "php/wr.php",
                data: {type: 0,contents: contents},
                success: function (response) {
                    if(response == 0){
                        alert("Solution successfully submitted");
                        window.location.assign("6_course_home_student.php");
                    }
                    console.log(response);
                }

            });
        });
    });
</script>
    <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/xcode.js");
        editor.getSession().setMode("ace/mode/c_cpp.js");
        document.getElementById('editor').style.fontSize='18px';
        editor.setOption("showPrintMargin", false);

    </script>

</div>
<!--********************* S I D E  B A R ****************-->
<aside></aside>
<!--********************* F O O T E R *******************-->
<div class="container-fluid" style="padding: 0px;"><footer><hr class="s"></footer></div>
</div>
</body>
</html>