<?php
    $conn = mysqli_connect('localhost', 'habwikuzo', 'Habwa@12');
    if($conn){
        if(isset($_POST)){
        $fullName = $_POST['names'];
        $age = $_POST['age'];
        $fName = $_POST['fname'];
        $mName = $_POST['mName'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $dropout_date = $_POST['drop'];
        $educate = $_POST['education'];
        $reason = $_POST['reason'];
        $tel = $_POST['telephone'];

        $sql = 'INSERT INTO dropout form (full_name, age, father name, mother name, gender, email, telephone, dropout date, eduction level, dropout reason, other reasons) VALUES('$fullName', '$age', '$fName', '$mName', '$gender', '$email', '$dropout_date', '$educate', '$reason', '$tel', "no reason");
        mysqli_query($conn, $sql);
    }
    

?>
