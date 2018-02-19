<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computational Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/6.css">

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
    <div class="container">
        </div>
</section>
</div>
<!--********************* S I D E  B A R ****************-->
<script>
    $(document).ready(function () {
        $(".container").load("php/course_home_student_load_content.php");
    });
</script>
<aside>

</aside>

<!--********************* F O O T E R *******************-->
<div class="container-fluid" style="padding: 0px;"><footer><hr class="s"></footer></div>

</div>

</body>
</html>