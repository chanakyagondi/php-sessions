<?php
session_start();
$_SESSION["name"]=$_GET["name"];
$name=$_GET["name"];
$conn=new mysqli("localhost:3306", "root", "1234", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from internal where name='$name';";
$r=$conn->query($s);
if($r->num_rows)
{
    while($row=$r->fetch_assoc())
    {
        if($row[name]==$name)
        {
            header("location: welcome.php");
                   
        }
        else 
        {
            echo "THIS USERNAME IS NOT REGISTERED PLEASE REGISTER";
            include "register.html";
        }
    }
}
    $conn->close();
?>

