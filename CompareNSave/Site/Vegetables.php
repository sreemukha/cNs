<!DOCTYPE html>
<html>
<head>
    <title>Categories - Vegetables</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <script src="../JS/prices.js"></script>
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


                <li class="dropdown" id="dropDownHovered"><a class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Vegetables<span class="caret"></span></a>
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
    <h1>Fresh Vegetables</h1>
</div>
<hr>
<div class="container-fluid" id="bodyWrapper">
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Click on the product to compare prices!</strong>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default" onclick=""  data-toggle="collapse" data-target="#price1" id="Product1">
            <p id="itemname">Avocados</p>
            <figure value="Milk" >
                <img class="productLogo img-thumbnail" src="../Images/avocados.jpg" id="1" onclick="veggiePrice(this.id);Avocados.php" alt="Avocados">
                <figcaption>Avocados 1 LB</figcaption>
            </figure>

            <div id="price1" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price2" id="Product2">
            <p id="itemname">Beans</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/beans.jpg" id="2" onclick="veggiePrice(this.id);" alt="Beans">
                <figcaption>Beans 14.5 OZ</figcaption>
            </figure>

            <div id="price2" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price3" id="Product2">
            <p id="itemname">Broccoli</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/broccoli.jpg" id ="3" onclick="veggiePrice(this.id);" alt="Broccoli">
                <figcaption>Broccoli Organic 1 LB</figcaption>
            </figure>

            <div id="price3" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price4" id="Product2">
            <p id="itemname">Cabbage</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/cabbage.png" id="4" onclick="veggiePrice(this.id);" alt="Cabbage">
                <figcaption>Cabbage Organic 1 LB</figcaption>
            </figure>

            <div id="price4" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price5" id="Product2">
            <p id="itemname">Carrots</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/carrots.jpg" id="5" onclick="veggiePrice(this.id);" alt="Carrots">
                <figcaption>Carrots 1 LB</figcaption>
            </figure>

            <div id="price5" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price6" id="Product2">
            <p id="itemname">Bell Peppers</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/peppers.jpg" id="6" onclick="veggiePrice(this.id);" alt="Bell Peppers">
                <figcaption>Bell Peppers 1 LB</figcaption>
            </figure>

            <div id="price6" class="collapse">

            </div>
        </div>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price7" id="Product2">
            <p id="itemname">Cucumbers</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/cucumbers.jpg" id="7" onclick="veggiePrice(this.id);" alt="Cucumbers">
                <figcaption>Cucumbers 1 LB</figcaption>
            </figure>

            <div id="price7" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price8" id="Product2">
            <p id="itemname">Lettuce</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/lettuce.jpg" id="8" onclick="veggiePrice(this.id);" alt="Lettuce">
                <figcaption>Lettuce 1 LB</figcaption>
            </figure>

            <div id="price8" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price9" id="Product2">
            <p id="itemname">Mushrooms</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/mushrooms.jpg" id="9" onclick="veggiePrice(this.id);" alt="Mushrooms">
                <figcaption>Mushrooms 1 LB</figcaption>
            </figure>

            <div id="price9" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price10" id="Product2">
            <p id="itemname">Onions</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/onions.jpg" id="10" onclick="veggiePrice(this.id);" alt="Onions">
                <figcaption>Onions 1 LB</figcaption>
            </figure>

            <div id="price10" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price11" id="Product2">
            <p id="itemname">Potatoes</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/potatoes.jpg" id="11" onclick="veggiePrice(this.id);" alt="Potatoes">
                <figcaption>Potatoes 1 LB</figcaption>
            </figure>

            <div id="price11" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price12" id="Product2">
            <p id="itemname">Spinach</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/spinach.jpg" id="12" onclick="veggiePrice(this.id);" alt="Spinach">
                <figcaption>Spinach 1 Bunch</figcaption>
            </figure>

            <div id="price12" class="collapse">

            </div>
        </div>

    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price13" id="Product2">
            <p id="itemname">Tomatoes</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/tomatoes.jpg" id="13" onclick="veggiePrice(this.id);" alt="Tomatoes">
                <figcaption>Tomatoes 1 LB</figcaption>
            </figure>

            <div id="price13" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price14" id="Product2">
            <p id="itemname">Squash</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/squash.jpg" id="14" onclick="veggiePrice(this.id);" alt="Squash">
                <figcaption>Squash 1 LB</figcaption>
            </figure>

            <div id="price14" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" onclick="" data-toggle="collapse" data-target="#price15" id="Product2">
            <p id="itemname">Brussel Sprouts</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/brussels.jpg" id="15" onclick="veggiePrice(this.id);" alt="Brussels">
                <figcaption>Brussel Sprouts 1 LB</figcaption>
            </figure>

            <div id="price15" class="collapse">

            </div>
        </div>
    </div>
    <div id="footer">
        <p>*Images are for representational purpose only.</p>
    </div>
</div>
</body>
</html>