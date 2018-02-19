<?php
$m="<!--******************* M O D A L *************************-->

            <div id=\"admin\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog modal-sm\">

                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Administrator</h4>
                            <div id='adminerr' style='color: red;'></div>
                        </div>
                        <div class=\"modal-body\">
                            <form role=\"form\" action=\"php/adminlogin2.php\" method=\"post\" id=\"adminlgn\" class='ajax'>
                                <div class=\"form-group\">
                                    <label for=\"adminU\">Username</label>
                                    <input type=\"text\" class=\"form-control\" id=\"adminU\" name=\"adminU\" placeholder=\"Username\">
                                    <label for=\"adminP\">Password</label>
                                    <input type=\"password\" class=\"form-control\" id=\"adminP\" name=\"adminP\" placeholder=\"Password\">

                                </div>

                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-default\" id=\"adminlgn\" >Log In</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--******************* M O D A L *************************-->
";
echo  $m;
include_once "formsubmit.php";

?>