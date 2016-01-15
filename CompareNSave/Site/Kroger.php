<!DOCTYPE html>
<html>
<head>
    <title>Stores - Kroger</title>

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

                <li class="dropdown" id="dropDownHovered"><a  class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Kroger<span class="caret"></span></a>
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
    <h1>Kroger</h1>
</div>
<hr>
<div class="container-fluid" id="bodyWrapper">
    <div class="row">
        <div class="col-md-12">
            <figure>
                <img class="logoPage" src="../Images/Kroger.png"  alt="Kroger Logo">
                <figcaption id="caption">There are 3 stores in Bloomington!</figcaption>
            </figure>
            <p>Get the directions below!</p>
        </div>
    </div>
    <div class="row row-centered" id="add">
        <div class="col-md-4 panel panel-default" id="address">

            <p>
                <b>Address:</b> 1175 S College Mall Rd,<br>
                Bloomington, IN 47401<br>
                <b>Phone:</b> 812-333-5766
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.9089168844203!2d-86.49770968475163!3d39.154053239379714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c64287c88e71f%3A0x3703ad290a0b9013!2sKroger!5e0!3m2!1sen!2sus!4v1449440079164" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 panel panel-default" id="address">

            <p>
                <b>Address:</b> 528 S College Ave,<br>
                Bloomington, IN 47403<br>
                <b>Phone:</b> 812-339-3351
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.6526690638507!2d-86.53784308464186!3d39.15988087953116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c66e3ffe01243%3A0xf0e838533684e6f7!2sKroger!5e0!3m2!1sen!2sus!4v1449440099671" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4 panel panel-default" id="address">

            <p>
                <b>Address:</b> 4025 S Old State Rd,<br>
                Bloomington, IN 47401<br>
                <b>Phone:</b> 812-824-5200
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3095.3949968384154!2d-86.53157068475245!3d39.12024214138276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886c66370ae13e0d%3A0x23dc16ff4586de3a!2sKroger!5e0!3m2!1sen!2sus!4v1449440226001" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
</body>
</html>