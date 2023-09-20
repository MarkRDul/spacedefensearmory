<?php 
if (isset($_GET["id"])){
    $arr = require "includes/weapon.inc.php";
    $name=$arr[0][1];
    $image=strtolower(str_replace(' ', '_', str_replace('\'', '', $name)));
    $desc=$arr[0][2];
    $price=$arr[0][3];
    $type=$arr[0][4];
}
else{ //Defaults if ID isn't set
    $name="Uh Oh!";
    $image="zurgs_blaster";
    $desc="Error!";
    $price=0;
    $type="Error!";
}
?>
<?php include "header.php";$page="Weapon: ". $name;?>
<title><?php echo "Space Defense Armory | ".$page;?></title>
<div class="jumbotron star-jumbo"><?php echo $name;?></div>
<hr class="dash"/>
<div class="container main">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="images/weapons/<?php echo $image?>.png" class="ship-display"/>
        </div>
    </div>
    <hr class="dash-row"/>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Description</h3>
            <?php eval("?> $desc <?php ")?>        
        </div>
    </div>
    <hr class="dash"/>
    <div class="row text-center">
        <div class="col-md-6">
            <h4>Price</h4>
            <hr class="dash"/>
        </div>
        <div class="col-md-6">
            <h4>Size Specification</h4>
            <hr class="dash"/>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <p>𒁣 <?php echo $price?></p>
        </div>
        <div class="col-md-6">
            <p><?php echo $type?></p>
        </div>
    </div>
</div>
<br>
<?php include "footer.php"?>