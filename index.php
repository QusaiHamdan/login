<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LogIn</title>
    <style>
        body{
            overflow:hidden;
            background: linear-gradient(#7076ff,#7bffff);
            height: 100vh;
        }
        .container{
            background-color: #ffff;
            box-shadow: 0 0 15px black;
        }
        h1{
            text-shadow: 0 0 15px #76ffff;
            -webkit-text-stroke: #76ffff;
            -webkit-text-stroke-width: 1px;

            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="continaer-fluid  m-5 p-5 rounded">

        <div class="container text-dark rounded p-5">
            <h1 class="d-block text-primary fw-bold float-start my-5">Login</h1>
                <div class="container-fluid d-flex gap-3">
                    <div class="login-card mx-auto d-block">
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == 'GET' ){
                            @$result = $_REQUEST['result'];
                            echo "<h3 style='color:#000;'>";
                            echo $result;
                            echo "</h3>";
                        }
                    ?>
                        <form action="<?php echo htmlspecialchars("validation.php");?>" method="get" class="form">
                            <input type="text" name="email" id="user" placeholder="UserName" class="text-body rounded form-control form-control-lg mt-3" style="border:1px solid blue;">
                            <input type="password" name="password" placeholder="Password" class="text-body rounded form-control form-control-lg mt-3" style="border:1px solid blue;">
                            <input type="submit" class="btn btn-outline-primary fw-bold mt-3 mx-auto d-block px-5" value="Login">
                        </form>
                    </div>
                </div>
                <p class="text-center fw-bold mt-4 mb-0">------ or -------</p>
                <p class="text-center mt-3 mb-0">Not a member? <a href="#!" class="link-primary fw-bold">Register</a></p>
        </div>
    </div>
    <div class="footer mt-5 px-5 ">
        <p class="fw-bold mx-auto d-block ">All CopyRight &copy; Qusai Hamdan 2021 - <?php
    @date_timezone_set('Asian/Amman');
    $time = date('Y');
    echo $time;
?></p>
    </div>
</body>
</html>