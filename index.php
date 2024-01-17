<?php
require_once __DIR__ .'/utilities/functions.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dajelect - <?php echo $_SESSION['email'] ?? 'guest'; ?></title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="d-flex justify-content-center pt-3 mb-4">
        <div>
            <img src="https://zeroecompany.com/wp-content/uploads/2021/02/LOGO-DAJE-BN.jpg" alt="Daje original logo TM" class="me-3 ">
        </div>
        <h1 class="text-center mb-3">
            DAJEletter
        </h1>
    </header>
    <main>
        <?php if (isset($_GET['email'])){  ?>
            <section class="container" id="userinfo">
                <div class="row">
                    <div class="col-12">
                        <?php if (checkEmailFormatting($_GET['email'])) {
                            $_SESSION['email'] = $_GET['email'];

                            ?>
                            <div class="alert alert-success" role="alert">
                                Daje! Your email has been subscribed to our Daje Podcast!
                                <?php if (isset($_GET['supporter'])){ ?>
                                    <h3 class="text-success">
                                        YOU ARE AWESOME! YOU ARE MY NEW FAVOURITE SUBSCRIBER!
                                    </h3>
                                <?php
                                header('refresh:4; URL=./thankyou.php');
                            } ?>
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-danger" role="alert">
                                Email is wrongly formatted!
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>


        <section class="container" id="userform">
            <div class="row">
                <div class="col-12">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                            We'll never share your email with anyone else other than EVERYBODY.
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="supporter" name="supporter">
                        <label class="form-check-label" for="supporter">Support us for only 500$ per day!!</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
                </div>
            </div>
        </section>
    </main>


    <!-- <script src="./js/script.js"></script> -->
</body>
</html>
