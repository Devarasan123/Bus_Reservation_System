<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: first.html");
    exit();
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div >
    <h1 style="color:blue;text-align:center;font-size:50px;">WELCOME</h1>
    <p style="text-align:end">
    <i class="fa fa-sign-out" style="font-size:24px;color:red"></i>
    <a style="color:blue;font-size:20px;margin-left:4px;" href='logout.php'>Logout</a></p>
</div>

</html>