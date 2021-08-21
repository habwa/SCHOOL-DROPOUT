<?php
    include('feedback.php');
    $mssg = '';
    if(isset($_GET['mssg'])){
        $mssg = $_GET['mssg'];
    }
    include('connection.php');
    if(isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $sql = "SELECT * FROM sponsor WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if(array_filter($user)){
            session_start();
            $_SESSION['email'] = $email;
            header('Location: sponsor_home.php');
        }
        else {            
            header('Location: login.php?mssg=incorrect email or password');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="stylesheet" type="text/css" href="footerStyle.css">
    <link rel="stylesheet" type="text/css" href="navbarStyle.css">
    <title>Document</title>
</head>
<body>
    <?php include('navbar.php');?>

    <?php if($mssg){ ?>
        <p class="mssg"><?php echo $mssg ?></p>
    <?php } ?>

    <div class=Cont>
        <div class="cForm">
            <form action="" class="myForm" method="POST">
                <fieldset>
                    <legend>Sponsor Login</legend>
                    <label for="email">Email</label><br>
                    <input type="email" name="email"><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password"><br>
                    
                    <input type="submit" name="submit" id="submit">
                    <p>do not have account? <a href="sponsor.php">register</a></p>
                </fieldset>
            </form>
        </div>
    </div>

    <?php include('footer.php');?>

    
</body>
</html>