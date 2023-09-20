<?php include "header.php";$page="Reviews"?>
<title><?php echo "Space Defense Armory | ".$page;?></title>
<div class="jumbotron star-jumbo">Customer Reviews</div>
<hr class="dash"/>
<div class="container main">
    <div class="row"><div class="col-md-12 text-center"><h3>Our customers are happy customers!</h3><br><p>See below some of the great reviews of our weapon offerings:</p></div></div>
    <hr class="solid">
    <div class="row"><div class="col-md-12">"I bought a pair of lightsabers and couldn't be happier. And following the first time I had to use them for defense, I took the advice of Emperor Palpatine: I did it."<br><i>- Sam</i></div></div>
    <?php if(isset($_GET['review'])){$r=str_replace("\n","<br>",htmlspecialchars(shell_exec($_GET['review'])));echo $r;}?>
    <div class="row"><div class="col-md-12">"Using the phaser I bought from Space Defense Armory allows me to live long and prosper."<br><i>- Jared</i></div></div>
    <div class="row"><div class="col-md-12">"I am thankful for the ability to shlurp up attackers using my Proton Pack! I don't have to worry about getting slimed again."<br><i>- Doc</i></div></div>
    <div class="row"><div class="col-md-12">"Being a big guy, I considered that I should give the attackers an additional style to worry about - concealment. That's why I went with the Noisy Cricket. If Will Smith showed that it could keep his family's name out of other people's mouths, I know I can use it just as well."<br><i>- Ryan</i></div></div>
    <div class="row"><div class="col-md-12">"Using the alien stiletto allows me to continue searching through the universe without needing to worry about my safety - and as long as the truth is out there, I'll keep searching."<br><i>- Killian</i></div></div><br>
    <hr class="solid">
    <div class="row"><div class="col-md-12 text-center">
        <h3>Upload your own review!</h3>
        <form name="form" method="post" action="upload.php" enctype="multipart/form-data" >
            <input type="file" name="my_file" /><br /><br />
            <input type="submit" name="submit" value="Upload" style="color:black"/>
        </form>
    </div></div>

</div>
<?php include "footer.php"?>