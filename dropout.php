<?php
    $mssg = '';
    if(isset($_GET['mssg'])){
        $mssg = $_GET['mssg'];
    }
    $conn = mysqli_connect("localhost", "habwikuzo", "Habwa@12", "DROPOUT");
    if (isset($_POST['submit'])) {
        $fullName = htmlspecialchars($_POST['names']);
        $age = htmlspecialchars($_POST['age']);
        $f_name = htmlspecialchars($_POST['fname']);
        $m_name = htmlspecialchars($_POST['mname']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $drop_date = htmlspecialchars($_POST['drop']);
        $ed_level = htmlspecialchars($_POST['education']);
        $tel = htmlspecialchars($_POST['phone']);
        $reason = htmlspecialchars($_POST['reason']);
        $other_reason = htmlspecialchars($_POST['othereason']);

        $sql = "INSERT INTO dropout(full_name, age, f_name, m_name, gender, email, dropout_date, education_level, telephone, reason, other_reason) 
        VALUES('$fullName', '$age', '$f_name', '$m_name', '$gender', '$email', $drop_date, '$ed_level', '$tel', '$reason', '$other_reason')";

        $result = mysqli_query($conn, $sql);
        if($result){
            header('Location: dropout.php?mssg= request recieved successful');
        }
        else{
            echo "data not saved";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dropoutStyle.css">
    <title>School dropout</title>
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
    
    <div class="dropout">
        <div class="dropform">
            <form class="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend>Particular student</legend>
                    <label for="names">Full Names</label><br>
                    <input type="text" name="names"><br>
    
                    <label for="age">Age</label><br>
                    <input type="text" name="age"><br>

                    <label for="fname">Father's Names</label><br>
                    <input type="text" name="fname"><br>

                    <label for="fname">Mother's Names</label><br>
                    <input type="text" name="mname"><br><br>

                    <label>gender</label><br><br>
                    <input type="radio" name="gender" value="male" checked>
                    <label for="gender">Male</label><br>
                    <input type="radio" name="gender" value="female">
                    <label for="male">Female</label><br><br>

                    
                    <label for="names">Email</label><br>
                    <input type="email" name="email"><br>
    
                    <label for="widthdraw">Dropout Date</label><br>
                    <input type="date" name="drop"><br>
    
                    <label for="education">Education Level</label><br>
                    <select name="education" id="education">
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                        <option value="university">University</option>
                    </select><br>
    
                    <label for="telephone">Telephone</label><br>
                    <input type="telephone" name="phone"><br>

                    <label for="reason">Reason for dropout</label>
                    <textarea name="reason" cols="30" rows="5"></textarea><br>

                    <label for="othereason">Other reason</label>
                    <textarea name="othereason" cols="30" rows="5"></textarea><br>

                    <input type="submit" name="submit">
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
                    <textarea name="mytext" id="" cols="30" rows="5" placeholder="your message..."></textarea><br>
                    <input type="submit" value="send">
                </form>
            </div>
        </footer>
    </div>
</body>
</html>