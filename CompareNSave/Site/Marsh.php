<!DOCTYPE html>
<html>
<head>
    <title>Stores - Marsh</title>

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

                <li class="dropdown" id="dropDownHovered"><a  class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Marsh<span class="caret"></span></a>
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
    <h1>Marsh</h1>
</div>
<hr>
<div class="container-fluid" id="bodyWrapper">
    <div class="row">
        <div class="col-md-12">
            <figure>
                <img class="logoPage" src="../Images/Marsh.jpg"  alt="Marsh Logo">
                <figcaption id="caption">There are 2 stores in Bloomington!</figcaption>
            </figure>
            <p> Get the directions below!</p>
        </div>
    </div>
    <div id="add" class="row row-centered">
        <div class="col-md-6 panel panel-default" id="address">

            <p>
                <b>Address:</b> 1825 Kinser Pike,<br>
                Bloomington, IN 47404<br>
                <b>Phone:</b> 812-335-6760
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2124.4435330894116!2d-86.54101438287293!3d39.18715937544384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x56aec172ff82bd73!2sMarsh+Supermarket!5e0!3m2!1sen!2sus!4v1448822381236" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <div class="col-md-6 panel panel-default" id="address">
            <p>
                <b>Address:</b> 123 Kingston Dr S,<br>
                Bloomington, IN 47408<br>
                <b>Phone:</b> 812-335-8700
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.379777336071!2d-86.49436368475126!3d39.16608623866663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2ca9e860e34906d5!2sMarsh+Supermarket!5e0!3m2!1sen!2sus!4v1448822682108" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </div>
</div>
</body>
</html>