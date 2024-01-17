<?php
    session_start();

    if (isset($_SESSION['email'])){ ?>
    <h1>
            Welcome <?php echo $_SESSION['email']; ?>!
            Thank you for your support!
    </h1>
<?php } else {?>
    <h2>
        Nothing to see here, you normal peasant!
    </h2>
<?php } ?>
