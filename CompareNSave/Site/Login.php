<?php
include_once("Connect.php");
$username=$_POST["USERNAME"];
$password=$_POST["PASSWORD"];
$sql="select * from Admin where username=? and password=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$result=$stmt->execute();
echo $result;
if($result){
    $_SESSION['username']=$_POST["USERNAME"];
    header("location:AdminHomeScreen.php");
    exit;
}
else{
    echo "unsuccessful";
}
$stmt->close();

?>