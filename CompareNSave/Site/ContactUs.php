<!DOCTYPE html>
<html>
<head>
    <title>Compare N Save Contact Us</title>

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
    <h1>Shoot a message!</h1>
</div>
<hr>
<p id="formMessage">Got a question? Ask us!</p>
<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" >
    <div class="form-group">
        <label class="control-label col-sm-2" for="email" >Email ID:</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="UserEmail" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="msg">Question/Suggestion:</label>
        <div class="col-sm-8">
            <textarea rows="5" class="form-control" id="msg" name="Suggestion" placeholder="Type in your question or suggestion"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">Shoot</button>
        </div>
    </div>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include_once("Connect.php");
    $useremail=$_POST["UserEmail"];
    $usersuggestion=$_POST["Suggestion"];
    $sql="INSERT INTO UserSuggestions(email,suggestion) VALUES(?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss", $useremail, $usersuggestion);

    $result=$stmt->execute();

    if($result){

        echo "<div id='footer'><p>Suggestion successfully posted. We'll start working on it soon.</p></div>";
    }
    else{
        echo "<div id='footer'><p>Suggestion could not be posted.</p></div>";
    }
}

?>

</body>
</html>