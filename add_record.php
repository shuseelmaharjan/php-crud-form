<?php
require_once('config.php');
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $lan = $_POST['language'];
        $zip = $_POST['zip'];
        $about = $_POST['about'];
    
        $sql = "INSERT INTO input (name, email, pwd, phone, gender, language, zip, about) 
        values ('$name', '$email', '$password', '$phone', '$gender', '$lan', '$zip', '$about')";
    
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: index.php');
        }else{
            echo "error";
        }
    }
    

    ?>