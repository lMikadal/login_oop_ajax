<?php if (isset($_SESSION['err_notmatch'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $_SESSION['err_notmatch'];
            unset($_SESSION['err_notmatch']);
        ?>
    </div>
<?php endif?>
<?php if (isset($_SESSION['err_username'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $_SESSION['err_username'];
            unset($_SESSION['err_username']);
        ?>
    </div>
<?php endif?>
<?php if (isset($_SESSION['err_email'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $_SESSION['err_email'];
            unset($_SESSION['err_email']);
        ?>
    </div>
<?php endif?>
<?php if (isset($_SESSION['err_wrong'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $_SESSION['err_wrong'];
            unset($_SESSION['err_wrong']);
        ?>
    </div>
<?php endif?>