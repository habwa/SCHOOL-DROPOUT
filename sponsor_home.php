<?php
    session_start();
    if(isset($_SESSION['email'])){
        $conn = mysqli_connect("localhost", "habwikuzo", "Habwa@12", "dropout");

        if (!$conn){
            echo "connection error";
        }
        else{
            $sql = 'SELECT * FROM dropout';
            $result = mysqli_query($conn, $sql);
            $student_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }
    else{
        header('Location: sponsor.php');
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sponsor.css">
    <title>my Home</title>  
</head>
<body>
    <div class="cont">
        <?php foreach ($student_list as $student) :?>
            <div class="student">
                <p><strong>Student names: </strong><?php echo $student['full_name']?></p>
                <p><strong>Email: </strong><?php echo $student['email'] ?></p>
                <p><strong>Telephone: </strong><?php echo $student['telephone'] ?></p>
                <p><strong>Education level: </strong><?php echo $student['education_level'] ?></p>
                <p><strong>Gender: </strong><?php echo $student['gender'] ?></p>
                <p><strong>Age: </strong><?php echo $student['age'] ?></p>
                <p><strong>Reason for dropout: </strong><?php echo $student['reason'] ?></p>
            </div>
        <?php endforeach ?>
        
    </div>
    
</body>
</html>