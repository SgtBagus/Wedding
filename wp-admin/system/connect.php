<?php
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'wedding') or die(mysqli_error($con));
?> 