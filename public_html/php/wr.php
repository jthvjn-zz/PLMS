<?php
session_start();
include_once 'connect.php';
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
$yr_admn = $_SESSION['yr_admn'];
$regno = $_SESSION['regno'];
$path = "../Files/".$d_name."/".$c_type."/".$c_name."/".$scheme_name."/Year of admission/".$yr_admn."/".$regno."/".$lc_name;
$algo = $path."/Algorithms/".$p_name.".txt";
$pgm  = $path."/Programs/".$p_name.".c";
$cw_id = $_SESSION['cw_id'];
$u_name = $_SESSION['user'];
$time = getdate();
$t = $time[0];
echo $_POST['type'];
if($_POST['type'] == 0) {
    file_put_contents("$algo", $_POST['contents']) or die("Unable to write");
    $sql = "INSERT INTO  SUBMISSION_Q VALUES ('$regno','$cw_id','$p_name','$u_name',0,'$t');";
    if ($conn->query($sql) === true)
        echo 0;
    else
        echo "Error: " . $sql . "<br>" . $conn->error;

}
else if($_POST['type'] == 1){
    file_put_contents("$pgm", $_POST['contents']) or die("Unable to write");
    $sql = "INSERT INTO  SUBMISSION_Q VALUES ('$regno','$cw_id','$p_name','$u_name',1,'$t');";
    if ($conn->query($sql) === true)
        echo 0;
    else
        echo "Error: " . $sql . "<br>" . $conn->error;
    
}
?>