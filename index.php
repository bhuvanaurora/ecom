<?php require_once("load_xml.php"); session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pepperizza</title>
    <head>
    <body>
        <center><h1>Welcome to Pepperizza!</h1></center>
        <? print_r($_SESSION); ?>
        <? menu(); ?>
    </body>
</html>
