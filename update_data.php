<?php

require_once('config.php');

$id = $_GET['criteria'];
$sql = "SELECT * FROM input WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$formData = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $lan = $_POST['language'];
        $zip = $_POST['zip'];
        $about = $_POST['about'];
    
        $update = "UPDATE INTO input SET name='$name', email='$email', pwd='$password', 
        phone='$phone', gender='$gender', language='$lan', zip='$zip', about='$about' WHERE id=$id";
    
        $query = mysqli_query($conn, $update);

        if($query){
            header('Location: index.php');
        }else{
            echo "error";
        }
    }