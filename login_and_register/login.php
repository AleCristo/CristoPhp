<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Login</title>

        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="singin.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>

    <?php
    $email = $password = $emailErr = $passwordErr = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $email = noSpace($_POST["email"]);   
        if (!preg_match("/[A-z0-9\.\+_-]+@buonarroti.tn.it{1}/", $email)){
            $emailErr = "Errore";
        }
        
        $password = noSpace($_POST["password"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)){
            $passwordErr = "Errore";
        }
        
        
    }
    
    function noSpace($obj) {
        $obj = trim($obj);
        $obj = stripcslashes($obj);
        $obj = htmlspecialchars($obj);
        //trim
        //strips
        //htmls
        return $obj;
    }
    
    ?>
    
        
    </head>
    <body class="text-center">
        <div class="container">
            <main class="form-signin w-100 m-auto">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
                    <h1 class="h3 mb-3 fw-normal">Please login:</h1>
                    <div class="form-floating">
                        <input type="text" name="email" class="form-control" id="floatingInput" value="<?= $email; ?>" placeholder="name@example.com"><span class="error"><?php echo $emailErr;?></span>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" value="<?php echo $password; ?>" placeholder="Password"><span class="error"><?php echo $passwordErr;?></span>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <input class="w-100 btn btn-lg btn-primary" type="submit">
                </form>
            </main>
        </div>
    </body>
</html>
