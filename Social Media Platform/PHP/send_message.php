<?php
include("includes/database.php");
include("includes/session.php");
$firstname = $_POST['firstname'];
$my_message  = $_POST['my_message'];
$result=mysqli_query($con,"INSERT into messages(sender,recipient,text,sent) VALUES ('$id','$firstname','$my_message',NOW()");
?>
<script>alert('Your Message has been sent.');</script>
<script>window.location = 'message.php'; </script>
