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
    <link rel="stylesheet" href="css/15.css">



    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="jss/script.js" ></script>
</head>

<body>
<!--********************* H E A D E R *******************-->
<header></header>
<!--***************** N A V I G A T I O N ***************-->
<div id="navigation">
    <nav>
        <div class="container-fluid">
            <span  id="user" class="glyphicon glyphicon-user"><span id="username">&nbsp<?php print $_SESSION['user']?></span></span>
            <div class="nav_right">
                <li><a href="#">Log Out</a> </li>
                <li ><a href="#"  onclick="myFunction()" class="notification" >Notifications<span class="badge">5</span></a>
                    <div class="notif" id="notif">
                        <p style="color: black;">Notification 1</p>
                        <p style="color: black;">Notification 2</p>
                        <p style="color: black;">Notification 3</p>
                        <p style="color: black;">Notification 4</p>
                        <p style="color: black;">Notification 5</p>
                    </div>
                </li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#"><?php print $_SESSION['lc_name']?></a> </li>

            </div>
        </div>
    </nav>
</div>
<!--********************* C O N T E N T *****************-->
<div id="content">
    <section>
        <div id="info" class="container">
            <div id="info1">#Problem Id/Problem Name</div>
            <div id="info2">#My Submissions</div>
        </div>
        <div class="container" id="c1">
            <table class="table table-hover">
                <tr>
                    <th>Submission No.</th>
                    <th>Time/Date</th>
                    <th>Status</th>
                </tr>
                <tr class="wrong">
                    <td>1</td>
                    <td><p>13:30/12/01/2015</p></td>
                    <td>Wrong Algorithm</td>
                </tr>
                <tr class="wrong">
                    <td>2</td>
                    <td><p>13:30/12/01/2015</p></td>
                    <td>Wrong Program</td>
                </tr>
                <tr class="accepted">
                    <td>3</td>
                    <td><p>13:30/12/01/2015</p></td>
                    <td>Accepted</td>
                </tr>
            </table>
        </div>
    </section>
</div>
<!--********************* S I D E  B A R ****************-->
<aside></aside>
<!--********************* F O O T E R *******************-->
<div class="container-fluid" style="padding: 0px;"><footer><hr class="s"></footer></div>

</div>
</body>
</html>