<html>
<head>
    <title>Compare N Save Welcome Admin</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
</head>
<body id="sugg">

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Compare 'N' Save</a>
        </div>
        <div>
             <ul id="navContents" class="nav navbar-nav">

                
            </ul>
        </div>
    </div>
</nav>
<div class="hr">
    <h1>User Feedback</h1>
</div>
<hr>
<div id="bodyWrapper" >
    <div class="col-md-8">
        <table class="table table-hover">
            <tr>
                <th>User Email Id</th>
                <th>Suggestion</th>
            </tr>
    <?php

    include_once("Connect.php");
    $sql="SELECT * FROM usersuggestions";
    $result=mysqli_query($conn,$sql);

    if($result!=null){
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<tr>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["suggestion"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    ?>
    <a href="Admin.php"><button class="btn btn-default" name="logout">Logout</button></a>
    </div>
</div>

</body>
</html>