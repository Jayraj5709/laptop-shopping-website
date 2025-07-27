<?php
session_start();
$cn = mysqli_connect("localhost","root","","project") or die("Server not Found".mysqli_error($cn));
?>