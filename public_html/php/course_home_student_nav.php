<nav>
    <div class="container-fluid">
        <span  id="user" class="glyphicon glyphicon-user"><span id="username">&nbsp<?php echo $_SESSION['user']?></span></span>
        <div class="nav_right">
            <li><a href="php/logout.php">Log Out</a> </li>
            <li ><a href="#"  onclick="myFunction()" class="notification" >Notifications<span class="badge">5</span></a>
                <div class="notif" id="notif">
                    <p style="color: black;">Notification 1</p>
                    <p style="color: black;">Notification 2</p>
                    <p style="color: black;">Notification 3</p>
                    <p style="color: black;">Notification 4</p>
                    <p style="color: black;">Notification 5</p>
                </div>
            </li>
            <li><a href="../student_dashboard.php">Dashboard</a></li>
            <li><a href="../6_course_home_student.php"><?php echo $_SESSION['lc_name']?></a> </li>

        </div>
    </div>
</nav>
