<div class="header" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><h3>Register As</h3></div>

<form action="#" method="post" id="reg">

    <div id="content1">
        <div id="err1" style="color: red;"></div>
        <div id="option">
            <input type="radio" name="registeras" value="staff"><span >Staff</span><br></input>
            <input type="radio" name="registeras" value="student"><span>Student</span><br></input>
        </div>
        <div id="err2"></div>
        <span id="msg">#Obtain passcode from staff-in-charge.</span>

        <div id="passcode">
            <input type="text" name="Passcode" placeholder="PassCode" id="ps"><br>
        </div>

        <div id="reg-btn">
            <input type="submit"  value="Register" id="r">
        </div>

    </div>

</form>
<script>
    $(document).ready(function () {
        $("form#reg").submit(function () {
            if($("input[name = registeras]:checked").length === 0 || $("input[name = registeras]:checked").length === 2 ){
              $("#err1").html("**Required");
            }
            else
            if($("#ps").val == "") $("#err2").html("**Passcode required");
            else




        });
        return false;

    });
</script>