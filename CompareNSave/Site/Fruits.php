<!DOCTYPE html>
<html>
<head>
    <title>Categories - Fruits</title>

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


                <li class="dropdown" id="dropDownHovered"><a class="dropdown-toggle" data-toggle="dropdown" id="ddMain" href="#">Fruits<span class="caret"></span></a>
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
    <h1>Fruits</h1>
</div>
<hr>
<div class="container-fluid" id="bodyWrapper">
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Click on the product to compare prices!</strong>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price1" id="Product1">
            <p id="itemname">Apples</p>
            <figure value="Milk" >
                <img class="productLogo img-thumbnail" src="../Images/apples.jpg" id="1" onclick="fruitPrice(this.id);" alt="Apples">
                <figcaption>Apples 1 LB</figcaption>
            </figure>

            <div id="price1" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price2" id="Product2">
            <p id="itemname">Bananas</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/bananas.jpg" id="2" onclick="fruitPrice(this.id);" alt="Bananas">
                <figcaption>Bananas 1 LB</figcaption>
            </figure>

            <div id="price2" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price3" id="Product2">
            <p id="itemname">Cherries</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/cherries.jpg" id ="3" onclick="fruitPrice(this.id);" alt="Cherries">
                <figcaption>Cherries 1 LB</figcaption>
            </figure>

            <div id="price3" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price4" id="Product2">
            <p id="itemname">Grapes</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/grapes.jpg" id="4" onclick="fruitPrice(this.id);" alt="Grapes">
                <figcaption>Grapes 1 LB</figcaption>
            </figure>

            <div id="price4" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price5" id="Product2">
            <p id="itemname">Lemons</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/lemons.jpg" id="5" onclick="fruitPrice(this.id);" alt="Lemons">
                <figcaption>Lemons 1 LB</figcaption>
            </figure>

            <div id="price5" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price6" id="Product2">
            <p id="itemname">Limes</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/limes.jpg" id="6" onclick="fruitPrice(this.id);" alt="Limes">
                <figcaption>Limes 1 LB</figcaption>
            </figure>

            <div id="price6" class="collapse">

            </div>
        </div>
    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price7" id="Product2">
            <p id="itemname">Oranges</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/oranges.jpg" id="7" onclick="fruitPrice(this.id);" alt="Oranges">
                <figcaption>Oranges 1 LB</figcaption>
            </figure>

            <div id="price7" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price8" id="Product2">
            <p id="itemname">Melons</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/melons.jpg" id="8" onclick="fruitPrice(this.id);" alt="Melons">
                <figcaption>Melons 1 LB</figcaption>
            </figure>

            <div id="price8" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price9" id="Product2">
            <p id="itemname">Peaches</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/peaches.jpg" id="9" onclick="fruitPrice(this.id);" alt="Peaches">
                <figcaption>Peaches 1 LB</figcaption>
            </figure>

            <div id="price9" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price10" id="Product2">
            <p id="itemname">Pears</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/pears.jpg" id="10" onclick="fruitPrice(this.id);" alt="Pears">
                <figcaption>Pears 1 LB</figcaption>
            </figure>

            <div id="price10" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price11" id="Product2">
            <p id="itemname">Pineapples</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/pineapples.jpg" id="11" onclick="fruitPrice(this.id);" alt="Pineapples">
                <figcaption>Pineapples 1</figcaption>
            </figure>

            <div id="price11" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price12" id="Product2">
            <p id="itemname">Strawberries</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/strawberries.jpg" id="12" onclick="fruitPrice(this.id);" alt="Strawberries">
                <figcaption>Strawberries 1</figcaption>
            </figure>

            <div id="price12" class="collapse">

            </div>
        </div>

    </div>
    <div class="row row-centered" id="prod">
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price13" id="Product2">
            <p id="itemname">Watermelon</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/watermelons.jpg" id="13" onclick="fruitPrice(this.id);" alt="Watermelon">
                <figcaption>Watermelon 1 LB</figcaption>
            </figure>

            <div id="price13" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default"  data-toggle="collapse" data-target="#price14" id="Product2">
            <p id="itemname">Prunes</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/prunes.jpg" id="14" onclick="fruitPrice(this.id);" alt="Prunes">
                <figcaption>Prunes 1 LB</figcaption>
            </figure>

            <div id="price14" class="collapse">

            </div>
        </div>
        <div class="col-md-2 panel panel-default" data-toggle="collapse" data-target="#price15" id="Product2">
            <p id="itemname">Raisins</p>
            <figure>
                <img class="productLogo img-thumbnail" src="../Images/raisins.jpg" id="15" onclick="fruitPrice(this.id);" alt="Raisins">
                <figcaption>Raisins 1 LB</figcaption>
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