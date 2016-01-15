<!DOCTYPE html>
<html>
<head>
    <title>Compare N Save Admin Login</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
</head>
<body id="container-fluid">
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Compare 'N' Save</a>
        </div>
        <div>
            <ul id="navContents" class="nav navbar-nav">

                <li class="dropdown" id="dropDownHovered"><a  class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Stores<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="dditem" href="Marsh.php">Marsh</a></li>
                        <li class="divider"> </li>
                        <li><a id="dditem" href="Target.php">Target</a></li>
                        <li class="divider"></li>
                        <li><a id="dditem" href="Kroger.php">Kroger</a></li>
                    </ul>
                </li>


                <li class="dropdown" id="dropDownHovered"><a class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="dditem" href="Dairy.php">Dairy</a></li>
                        <li class="divider"></li>
                        <li><a id="dditem" href="Vegetables.php">Vegetables</a></li>
                        <li class="divider"></li>
                        <li><a id="dditem" href="Fruits.php">Fruits</a></li>
                    </ul>
                </li>
                <li id="dropDownHovered"><a id="ddMain" href="AboutUs.php">About Us</a></li>
                <li id="dropDownHovered"><a id="ddMain" href="ContactUs.php">Contact Us</a></li>
                <li id="dropDownHovered">
                    <a id="ddMain" href="Admin.php" data-toggle="tooltip" title="Admin Login"><span class="glyphicon glyphicon-user"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="hr">
    <h1>Welcome Admin!</h1>
</div>
<hr>
<form class="form-horizontal" role="form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" name="USERNAME" id="email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" name="PASSWORD" id="pwd" placeholder="Enter password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
</form>

<?php
$usernameDB=null;
$passwordDB=null;
$username=null;
$password=null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once("Connect.php");
    $username = $_POST["USERNAME"];
    $password = $_POST["PASSWORD"];
    $sql = "select * from Admin where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);

   if($result!=null){

            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $usernameDB=$row['username'];
                $passwordDB=$row['password'];
            }


       if($username==$usernameDB && $password==$passwordDB){
           header("location:AdminHomeScreen.php");

       }
       else{
        echo "<div id='footer'><p>Please check your username and password</p></div>";
       }

   }

    else {
        echo "unsuccesful";
    }


}
?>



</body>
</html>