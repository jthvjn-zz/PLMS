<div class="header"><h3>Login As</h3></div>
<div id="serr" style="color: red"></div>
<form  action="php/slogin.php" method="post" class="slogin" >
    <div id="credentials">

        <div id="username">
            <input type="text" name="Username" placeholder="Username"><br>
        </div>
        <input type="checkbox" style="padding: 5px;"><span>Remember me</span><br>
        <div id="pass">
            <input type="password" name="Password" placeholder="Password" >
        </div>

    </div>


    <span ><a href="#" id="forgot">Forgot Credentials?</a> </span>
    <div>
        <a data-toggle="modal" data-target="#admin" style="color: white;font-size: 14px;padding-left: 4px;">Admin ?</a>
    </div>
    <div id="lgin-btn">
        <input type="submit"  value="Log In">
    </div>
</form>
<?php
include "adminModal2.php";
include_once "sform_submit.php";
?>


