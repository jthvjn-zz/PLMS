<?php
session_start();
?>
<span style="font-size: 30px;color: #33334d;font-weight: 600"><hr>#Problem Set<hr></span>
<table class="table table-hover">
    <tr>
        <th>Sl.No</th>
        <th>Problem</th>
        <th>Status</th>
    </tr>
    <?php
    include 'connect.php';
    $cwid = $_SESSION['cw_id'];
    //print_r($cwid);
    $regno = $_SESSION['regno'];
    //print $regno;
    $sql = "select Problem_Id from PSET where Cw_Id='$cwid';";
    $result = $conn->query($sql);
    //$rows = $result->fetch_assoc();
    //print_r($rows);
    $sql2 = "select Status from LAB_GDPTS WHERE Reg_No = '$regno' and Cw_Id ='$cwid';";
    $res = $conn->query($sql2);
    $r = $res->fetch_assoc();
    $statusString = str_split($r['Status']);
    //print_r($statusString);
    $index = 0;
    while($row = $result->fetch_assoc()) {
        $pid = $row['Problem_Id'];
        //echo "loop".$index;
        $sql = "select P_Name from PROBLEMS where Problem_Id ='$pid';";
        $p = $conn->query($sql);
        $pn = $p->fetch_assoc();
        $pnme = $pn['P_Name'];
        switch($statusString[$index]) {
            case 0: echo "<tr class=\"not_tried\">".
                            "<td>".$index."</td>".
                            "<td><a href='15_prb_st_pg.php' id='".$pid."'>".$pnme."</td>".
                            "<td>Not Tried Yet!</td>";
                            break;
            case 1: echo "<tr class=\"wrong\">".
                "<td>".$index."</td>".
                "<td><a href='15_prb_st_pg.php' id='".$pid."'>".$pnme."</td>".
                "<td>Wrong Algorithm!</td>";
                break;
            case 2: echo "<tr class=\"accepted\">".
                "<td>".$index."</td>".
                "<td><a href='15_prb_st_pg.php' id='".$pid."'>".$pnme."</td>".
                "<td>Algorithm Correct, try the program</td>";
                break;
            case 3: echo "<tr class=\"wrong\">".
                "<td>".$index."</td>".
                "<td><a href='15_prb_st_pg.php' id='".$pid."'>".$pnme."</td>".
                "<td>Worng Program!</td>";
                break;
            case 4: echo "<tr class=\"accepted\">".
                "<td>".$index."</td>".
                "<td><a href='15_prb_st_pg.php' id='".$pid."'>".$pnme."</td>".
                "<td>Solution Accepted</td>";
                break;
        }
        $index++;
    }
    ?>
</table>

<div id="msgs" >
    <table class="table table-hover" id="m">
        <tr>
            <th>Messages</th>
        </tr>
        <?php
        $sql = "select Notif from NOTIF_ST where Mark = 1 and Reg_No = '$regno';";
        $res = $conn->query($sql);
        while($msg=$res->fetch_assoc()){
            $notif = $msg['Notif'];
            echo "<tr>
            <td><p>".$notif."</p></td>
        </tr>";
        }
        ?>

    </table>
</div>
<script>
    $(document).ready(function () {
        $(".table a").click(function () {
            var d =$(this).attr('id');
            console.log("d");

       $.ajax({
           url:"php/set_problem_session.php",
           data:{value: d},
           success:function (res) {
               console.log(res);

           }
       });
        });

    });
</script>