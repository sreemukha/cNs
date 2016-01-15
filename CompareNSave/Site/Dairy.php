<!DOCTYPE html>
<html>
<head>
    <title>Categories - Dairy Products</title>

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


                <li class="dropdown" id="dropDownHovered"><a class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Dairy<span class="caret"></span></a>
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
    <h1>Dairy Products</h1>
</div>
<hr>
<div class="container-fluid" id="bodyWrapper">
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Click on the product to compare prices!</strong>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default"   data-toggle="collapse" data-target="#price1" id="Product1">
            <p id="itemname">Milk</p>
            <figure value="Milk" >
                <img class="productLogo img-thumbnail" src="../Images/Milk.PNG" id="1" onclick="dairyPrice(this.id);" alt="Milk">
                <figcaption>Milk 1 Lt</figcaption>
            </figure>

            <div id="price1" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Cheese.php" data-target="#price2" id="Product2">
            <p id="itemname">Cottage Cheese</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/Cheese.png" id="2" onclick="dairyPrice(this.id);" alt="Cheese">
                <figcaption>Cottage Cheese 1 LB</figcaption>
            </figure>

            <div id="price2" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Yogurt.php" data-target="#price3" id="Product2">
            <p id="itemname">Yogurt</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/Yogurt.jpg" id ="3" onclick="dairyPrice(this.id);" alt="Yogurt">
                <figcaption>Yogurt 2 LB</figcaption>
            </figure>

            <div id="price3" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Butter.php" data-target="#price4" id="Product2">
            <p id="itemname">Butter</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/Butter.jpg" id="4" onclick="dairyPrice(this.id);" alt="Butter">
                <figcaption>Butter 4 OZ</figcaption>
            </figure>

            <div id="price4" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Chocolate Milk" data-target="#price5" id="Product2">
            <p id="itemname">Chocolate Milk</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/chocmilk.jpg" id="5" onclick="dairyPrice(this.id);" alt="Chocolate Milk">
                <figcaption>Chocolate Milk 1 LT</figcaption>
            </figure>

            <div id="price5" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Sour Cream.php" data-target="#price6" id="Product2">
            <p id="itemname">Sour Cream</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/sourcream.jpg" id="6" onclick="dairyPrice(this.id);" alt="Sour Cream">
                <figcaption>Sour Cream 1 LB</figcaption>
            </figure>

            <div id="price6" class="collapse">

            </div>
        </div>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Ice Cream.php" data-target="#price7" id="Product2">
            <p id="itemname">Ice Cream</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/icecream.jpg" id="7" onclick="dairyPrice(this.id);" alt="Ice Cream">
                <figcaption>Ice Cream 1.5 LT</figcaption>
            </figure>

            <div id="price7" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Dry Milk.php" data-target="#price8" id="Product2">
            <p id="itemname">Dry Milk</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/drymilk.jpg" id="8" onclick="dairyPrice(this.id);" alt="Dry Milk">
                <figcaption>Dry Milk</figcaption>
            </figure>

            <div id="price8" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Whip Cream.php" data-target="#price9" id="Product2">
            <p id="itemname">Whipped Cream</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/whipcream.jpg" id="9" onclick="dairyPrice(this.id);" alt="Whip Cream">
                <figcaption>Whipped Cream Small Can</figcaption>
            </figure>

            <div id="price9" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Cream Cheese.php" data-target="#price10" id="Product2">
            <p id="itemname">Cream Cheese</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/creamcheese.jpg" id="10" onclick="dairyPrice(this.id);" alt="Cream Cheese">
                <figcaption>Cream Cheese 8 OZ</figcaption>
            </figure>

            <div id="price10" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Cheese Dip.php" data-target="#price11" id="Product2">
            <p id="itemname">Cheese Dip</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/cheesedip.jpg" id="11" onclick="dairyPrice(this.id);" alt="Cheese Dip">
                <figcaption>Cheese Dip 15 OZ</figcaption>
            </figure>

            <div id="price11" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" onclick="Soy Milk.php" data-target="#price12" id="Product2">
            <p id="itemname">Soy Milk</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/soymilk.jpg" id="12" onclick="dairyPrice(this.id);" alt="Soy Milk">
                <figcaption>Soy Milk 1 QT</figcaption>
            </figure>

            <div id="price12" class="collapse">

            </div>
        </div>

    </div>
    <div id="footer">
        <p>*Images are for representational purpose only.</p>
    </div>
</div>
</body>
</html>