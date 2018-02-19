<?php
/**
 * Created by PhpStorm.
 * User: architect
 * Date: 12/5/16
 * Time: 4:15 PM
 */
session_start();
session_destroy();
header('Location: ../login.php');
?>