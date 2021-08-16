<?php
    $mssg = '';
    if(isset($_GET['mssg'])){
        $mssg = $_GET['mssg'];
    }
    $conn = mysqli_connect("localhost", "habwikuzo", "Habwa@12", "dropout");
    if(isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $sql = "SELECT * FROM sponsor WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if(array_filter($user)){
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
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="webPage.php">Home</a>
        <a href="dropout.php">Dropout Form</a>
        <a href="Login.php">Login</a>
        <a href="sponsor.php">Sponsor</a>
    </div>

    <?php if($mssg){ ?>
        <p class="mssg"><?php echo $mssg ?></p>
    <?php } ?>

    <div class=Cont>
        <div class="cForm">
            <form action="" class="myForm" method="POST">
                <fieldset>
                    <legend>Login</legend>
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

    <div class="footer">
        <footer>
            <div class="about">
                <p><h3>about Us</h3></p>
                <p>Posted by: Habwa</p>
                <p>Contact information: <a href="habwa@gmail.com">habwa@gmail.com</a>.</p>
                <p>telephone: 0783654654</p>
                <p>twiiter: @habwa12</p>
            </div>

            <div class="contact_us">
                <form action="">
                    <h3>Feedback</h3>
                    <input type="email" placeholder="Enter your email"><br>
                    <textarea name="mytext" id="" cols="30" rows="4" placeholder="your message..."></textarea><br>
                    <input type="submit" value="send">
                </form>
            </div>
        </footer>
    </div>

    
</body>
</html>