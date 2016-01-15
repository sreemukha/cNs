<!DOCTYPE html>
<html>
<head>
    <title>Compare N Save About Us</title>

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
    <h1>Get to know us!</h1>
</div>
<hr>
<div id="bodyWrapper" >
    <div class="container-fluid">
        <div class="row" id="dev">
            <div class="col-md-12 panel panel-default" id="About">
                <p><strong>Compare 'N' Save</strong> is a website that is aimed at helping out all the new students coming to Bloomington from other states and countries in terms of buying groceries. The website compares product prices in three different categories across three different stores. The motivation for developing this website came from experiences we had during our transition from India to Bloomington.</p>
            </div>              
        </div>
        <p id="developers">Developers</p>
        <div class="row row-centered" id="dev">

            <div class="col-md-4">
                    <figure>
                        <img class="devPic" src="../Images/prashanth.jpg"  alt="Developer 1">
                    </figure>
                <p><strong>Prashanth Reddy Bheemagani</strong><br>MS in Computer Science<br>pbheemag@iu.edu</p>
            </div>
            <div class="col-md-4 ">
               
                    <figure>
                        <img id="devS" class="devPic img-rounded" src="../Images/srav.jpg" alt="Developer 2" >
                    </figure>
                <p><strong>Sravya Panganamamula</strong><br>MS in Computer Science<br>vpangana@iu.edu</p>
            </div>
            <div class="col-md-4 ">
                
                    <figure>
                        <img class="devPic img-rounded" src="../Images/sree.jpg" alt="Developer 3">
                    </figure>
                <p><strong>Sreemukha Taduru</strong><br>MS in Computer Science<br>staduru@iu.edu</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>