<?php
    $arr = require "includes/monitor.inc.php";
    if (count($_GET)>0){
        $pass = require "includes/update.inc.php";
        echo $pass;
    }
    $levels=array("Clear","Minimal","Moderate","Severe","OVERRUN");
    $axiom=$levels[$arr[0][0]];
    $fcl=$levels[$arr[0][1]];
    $mec=$levels[$arr[0][2]];
    $pp=$levels[$arr[0][3]];
?>
<?php include "header.php";$page="Alien Monitor"?>
<title><?php echo "Space Defense Armory | ".$page;?></title>
<style>
    .pad-top{
        padding-top:15px;
    }
    .fcl{
        animation-delay:200ms; 
    }
    .mec{
        animation-delay:100ms;
    }
    .pp{
        animation-delay:400ms;
    }
</style>
<div class="jumbotron star-jumbo">Alien Monitoring</div>
<hr class="dash"/>
<div class="container main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">See the Dangerous Spots!</h3>
            <p class="text-center">We keep up to the minute reports on the areas with dangerous situations. See below for our monitoring reports:</p>
        </div>
    </div>
    <hr class="solid">
    <div class="row">
        <div class="col-md-6 text-center d-flex align-middle pad-top <?php echo $axiom?> axiom">
            <img src="images/locations/axiom.png" class="exhibitor-logo">
        </div>
        <div class="col-md-6 text-center d-flex align-middle pad-top <?php echo $fcl?> fcl">
            <img src="images/locations/fabulous_comet_lounge.png" class="exhibitor-logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center pad-bottom <?php echo $axiom?> axiom">
            <h3>Axiom Ship</h3>
        </div>
        <div class="col-md-6 text-center pad-bottom <?php echo $fcl?> fcl">
            <h3>Fabulous Comet Lounge</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center <?php echo $axiom?> axiom">
            <h3><?php echo $axiom?></h3>
        </div>
        <div class="col-md-6 text-center <?php echo $fcl?> fcl">
            <h3><?php echo $fcl?></h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 text-center d-flex align-middle pad-top <?php echo $mec?> mec">
            <img src="images/locations/mos_eisley_cantina.png" class="exhibitor-logo">
        </div>
        <div class="col-md-6 text-center d-flex align-middle pad-top <?php echo $pp?> pp">
            <img src="images/locations/pizza_planet.png" class="exhibitor-logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center pad-bottom <?php echo $mec?> mec">
            <h3>Mos Eisley Cantina</h3>
        </div>
        <div class="col-md-6 text-center pad-bottom <?php echo $pp?> pp">
            <h3>Pizza Planet</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center <?php echo $mec?> mec">
            <h3><?php echo $mec?></h3>
        </div>
        <div class="col-md-6 text-center <?php echo $pp?> pp">
            <h3><?php echo $pp?></h3>
        </div>
    </div>
    <br>
</div>
<?php include "footer.php"?>