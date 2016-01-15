<?php
$servername = "mysql6.000webhost.com";
$username = "a9897528_sree";
$password = "compare";
$dbname="a9897528_compare";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>