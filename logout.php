<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <section>
        <div class="bg-primary text-white text-center py-1">
            <h6>IREMBO | Practical CAT</h6>
        </div>

        <div class="body text-center my-5 mx-5" style="display: grid; place-items: center;">
            <div class="card border-2 shadow" style="height: 450px; width: 350px;" >
                <div class="card-body">
                    <div > 
                        <img  class="rounded-circle position-relative" style="width: 200px; top: -9px;"  src="image/image.jpg" alt="">
                    </div>

                    <div class="mt-2">
                        <h6 style="font-size: 17px;">HARERIMANA Lambert</h6>
                        <h6 style="font-size: 17px;">Lamertharerimana@gmail.com</h6>
                    </div>

                    <a href="log_out.php">
                        <div class="mx-5 my-5">
                            <button class="form-control btn-primary">Log Out</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </section>
</body>
</html>