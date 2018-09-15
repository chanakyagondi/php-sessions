<?php
session_start();
$conn=new mysqli("localhost", "root", "", "test");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$s="select * from student where name='$a'";
$r=$conn->query($s);
$row;
if($r->num_rows)
{    
    $row=$r->fetch_assoc();
    
}
echo $row['name'];
echo $row['id'];
echo "<a href='logout.php'>logout</a>";
?>