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
    <link rel="stylesheet" href="css/15.css">
    <link rel="stylesheet" href="css/16.css">



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
            <div id="info2">#<?php include 'php/p_status.php'?><a href="16_My_Submissions.php" style="margin-left: 30px;">My Submissions</a></div>
        </div>
        <?php
        include_once 'php/connect.php';
        $d_id=$_SESSION['d_id'];
        $s = "select D_Name from DEPARTMENT where D_Id = '$d_id'";
        $r = $conn->query($s);
        $d = $r->fetch_assoc();
        $d_name = $d['D_Name'];
        $scheme_id = $_SESSION['scheme_id'];
        $s = "select Scheme_Name from SCHEME where Scheme_Id = '$scheme_id'";
        $r = $conn->query($s);
        $d = $r->fetch_assoc();
        $scheme_name = $d['Scheme_Name'];
        $c_type = $_SESSION['c_type'];
        $c_name = $_SESSION['c_name'];
        $lc_name = $_SESSION['lc_name'];
        $p_name = $_SESSION['p_name'];
        $path = "./Files/".$d_name."/".$c_type."/".$c_name."/".$scheme_name."/Lab course set/".$lc_name."/".$p_name;
        //echo $path;

        ?>
        <div id="st" class="container">
            <p>
                <?php
                $stmt = $path."/stmt.txt";
                $file_handle = fopen("$stmt", "r") or die("Unable to open file");
                while (!feof($file_handle)) {
                    $line = fgets($file_handle);
                    echo $line;
                }
                fclose($file_handle)
                ?>
            </p>
        </div>
        <div id="sampleinput" class="container">
            Sample Input:
        </div>
        <div id="ip" class="container">
            <pre style="margin-bottom: 0px;">
               <?php
               $stmt = $path."/ip.txt";
               $file_handle = fopen("$stmt", "r") or die("Unable to open file");
               while (!feof($file_handle)) {
                   $line = fgets($file_handle);
                   echo $line;
               }
               fclose($file_handle)
               ?>
            </pre>
        </div>
        <div id="sampleoutput" class="container">
            Sample Output:
        </div>
        <div id="op" class="container">
            <pre style="margin-bottom: 0px;">
                <?php
                $stmt = $path."/op.txt";
                $file_handle = fopen("$stmt", "r") or die("Unable to open file");
                while (!feof($file_handle)) {
                    $line = fgets($file_handle);
                    echo $line;
                }
                fclose($file_handle)
                ?>
            </pre>
        </div>
        <div id="remarks" class="container">
            Remarks:
        </div>
        <div id="re" class="container">
            <p>
                <?php
                $stmt = $path."/remarks.txt";
                $file_handle = fopen("$stmt", "r") or die("Unable to open file");
                while (!feof($file_handle)) {
                    $line = fgets($file_handle);
                    echo $line;
                }
                fclose($file_handle)
                ?>
            </p>
        </div>
        <div class="container" style="padding-right: 0px"><?php
            if($_SESSION['p_status'] == 0 || $_SESSION['p_status'] == 1)
                echo "<a href=\"17_algo_submission.php\" class=\"btn btn-primary\" style=\"font-size: 25px;float: right;width: 150px;\">Solve</a>";
            else
                if($_SESSION['p_status'] == 2 || $_SESSION['p_status'] == 3)
                    echo "<a href=\"18_problem_submission.php\" class=\"btn btn-primary\" style=\"font-size: 25px;float: right;width: 150px;\">Solve</a>";
            else echo "<a href=\"18_problem_submission.php\" class=\"btn btn-primary\" style=\"font-size: 25px;float: right;width: 150px;\">Try another logic</a>

<script>
$(\".btn .btn-primary\").click(function() {
alert(\"You have already solved the problem!\");
  
});
</script>";
            ?>
        </div>
    </section>
</div>
<!--********************* S I D E  B A R ****************-->
<aside></aside>
<!--********************* F O O T E R *******************-->
<div class="container-fluid" style="padding: 0px"><footer><hr class="s"></footer></div>

</body>
</html>