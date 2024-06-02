<?php
$conn=mysqli_connect("localhost","id21833050_projectkit","Project@1234");
mysqli_select_db($conn,"id21833050_project23");
$str=$_REQUEST["id"];
$res=mysqli_query($conn,"delete  from org where email='$str'");
header("location:admin.php");
?>