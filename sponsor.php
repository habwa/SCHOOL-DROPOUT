<?php
    $conn = mysqli_connect("localhost", "habwikuzo", "Habwa@12", "dropout");
    if(isset($_POST['submit'])){
        $f_name = htmlspecialchars($_POST['fname']);
        $l_name = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $frequency = htmlspecialchars($_POST['frequency']);
        $pay_method = htmlspecialchars($_POST['payment']);
        $other_method =htmlspecialchars($_POST['other_method']);
        $amount = htmlspecialchars($_POST['amount']);
        $address = htmlspecialchars($_POST['address']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $password1 = htmlspecialchars($_POST['password1']);
        $password2 = htmlspecialchars($_POST['password2']);

        $sql = "INSERT INTO sponsor(f_name, l_name, email, frequency, payment_method, other_method, amount, address, telephone, password) 
        VALUE('$f_name', '$l_name', '$email', '$frequency', '$pay_method', '$other_method', '$amount', '$address', '$telephone', '$password1')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: login.php?mssg=account created successful');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactStyle.css">
    <title>School dropout contact_Us</title>
</head>
<body>
    <div class="nav">
        <a href="webPage.php">Home</a>
        <a href="dropout.php">Dropout Form</a>
        <a href="Login.php">Login</a>
        <a href="Sponsor.php">Sponsor Form</a>
    </div>

    <div class=Cont>
        <div class="cForm">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" class="myForm">
                <fieldset>
                    <legend>Sponsor Form</legend>
                    <label for="fname">First Name</label><br>
                    <input type="text" name="fname"><br>

                    <label for="lname">last Name</label><br>
                    <input type="text" name="lname"><br>
                    
                    <label for="email">Email</label><br>
                    <input type="email" name="email"><br>

                    <label for="frequency">frequency</label><br>
                    <select name="frequency" id="frequency">
                        <option value="primary">one time donation</option>
                        <option value="secondary">mothly recurring donation</option>
                    </select><br><br><br>

                    <label for="Payment method"> Payment method</label><br>
                    <select name="payment" id="Payment method">
                        <option value="primary">credit card</option>
                        <option value="secondary">bank acount</option>
                        <option value="primary">MTN mobile money</option>
                        <option value="primary">Tigo cash</option>
                        <option value="primary">Aitel money</option>
                    </select><br><br>
                    
                    <label for="Payment">other Payment method</label><br>
                    <input type="text" name="other_method"><br>
                    <label for="lname">Amount</label><br>
                    <input type="text" name="amount"><br>

                    <label for="address">Address</label><br>
                    <input type="text" name="address"><br>

                    <label>telephone</label><br>
                    <input type="text" name="telephone">

                    <label for="password">password</label><br>
                    <input type="password" name="password1"><br>
                    <label for="password">confirm password</label><br>
                    <input type="password" name="password2"><br>

                    <input type="submit" name="submit" id="submit">
                    <p>have account? <a href="login.php">login</a></p>
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
                    <input type="submit" name="submit" value="send">
                </form>
            </div>
        </footer>
    </div>

</body>
</html>