<!DOCTYPE html>
<html>
<head>
    <title>profile</title>
</head>
<link rel="stylesheet" href="bootstrap.min.css">

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <font size="40" color="white">&#9763;</font>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">about us</a>
                    </li>
                    <li>
                        <a href="profile.php">profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br><br>
    <?php
$hostname = 'localhost';
$username = 'root';
$password = '123456789';
$database = 'Machine';
$connect = mysqli_connect($hostname,$username,$password,$database);
$query = "select password from login";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($result);

if (isset($_FILES['file'])) {
    $FLAG = explode(':',$row['password']);    
    echo $FLAG[0];
}


?>



</body>
</html>