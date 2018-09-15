<?php
session_start();
$conn=new mysqli("localhost", "root", "", "test");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}

$name=$_GET["name"];
$id=$_GET["id"];
$_SESSION["name"]=$name;
$t="insert into student(id,name) values('$id','$name');";
$r=$conn->query($t);
if($r==FALSE)
        echo $conn->error;
echo "inserted succsfully";
echo "<a href='welcome.php'>login</a>";
?>