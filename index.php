<?php require_once "account_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLER - LOGIN</title>
    
    <!-- Boostrap 5-->
    <link rel = "stylesheet" href="assets/css/style.css">

    <!-- Boostrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- FontAwesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

</head>
<body>
<body class="bg-light text-dark" style="font-family: 'Kanit', sans-serif;">

    <div class="container p-5 text-center">

    <form class="login-form text-center" method="post" id="login">

    <?php
            if (count($errors) > 0) {
            ?>
                <div class="alert alert-danger text-center">
                    <b>
                        <?php
                        foreach ($errors as $showerror) {
                            echo $showerror;
                        }
                        ?>
                    </b>
                </div>
            <?php
            }
            ?>

        <img src="/assets/img/logo.png" alt="" class="w-50 img-fluid mb-3">
        <h1 class="text-center pb-3">
             CLER 
        </h1>
        <p class="lead pb-3">LOG IN TO YOUR ACCOUNT</p>
        <div>
        <i class="bi bi-person-circle p-1" style='font-size:26px;'></i>  
            <input type="email" placeholder="Email" name="email" class="p-2 mb-3">
        </div>
        <div>   
            <i class="bi bi-unlock-fill p-1" style='font-size:26px;'></i>
            <input type="password" placeholder="Password" name="password" class="p-2">
        </div>
        
        <div>
        <button type="submit" class="btn btn-warning btn-lg mt-3 mb-3" name= "login" value="login" style="background: gold;" required>LOGIN</button>
        </div>

        <a href="reset-password.php" class="link-warning">Forgot Password</a>

        </form>
    </div>  
</body>
</html>