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

        
        $sql = "UPDATE input SET name='$name', email='$email', pwd='$password', phone='$phone', gender='$gender', language='$lan', zip='$zip', about='$about' WHERE id=$id";
    
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: index.php');
        }else{
            echo "error";
        echo ("$name");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<blockquote>

<h1>Update Data</h1>
    <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="your name" value="<?= $formData['name']?>"><br> <br>

    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="your email" value="<?= $formData['email']?>"><br> <br>

    <label for="password">Password:</label>
    <input type="password" name="password" value="<?= $formData['pwd']?>"><br> <br>

    <label for="phne">Phone Number:</label>
    <input type="number" name="phone" value="<?= $formData['phone']?>"> <br> <br>

    <label for="gender">Gender:</label>
    <input type="radio" value="male" name="gender" value="male" <?php if($formData['gender']=="male"){ echo "checked";}?>>Male
    <input type="radio" value="female" name="gender" value="female" <?php if($formData['gender']=="female"){ echo "checked";}?>>Female 
    <input type="radio" value="other" name="gender" value="other" <?php if($formData['gender']=="other"){ echo "checked";}?>>Other<br> <br>

    <label for="language">Language:</label>
    <select name="language" id="lan">
    <option value="select language" selected>Select Language</option>
        <option value="nepali" <?php if($formData['language']=="nepali") echo 'selected="selected"'; ?> >Nepali</option>
        <option value="english" <?php if($formData['language']=="english") echo 'selected="selected"'; ?> >English</option>
    </select>   <br> <br>
    
    <label for="zip">Zip Code:</label>
    <input type="number" name="zip" value="<?= $formData['zip']?>"><br> <br>

    <label for="about">About:</label>
    <textarea name="about" id="about" cols="30" rows="10"><?php echo($formData['about']) ?></textarea> <br> <br>

    <!-- <textarea name="about" id="about" cols="30" rows="10" value=""></textarea> <br> <br> -->

    <input type="submit" name="update" value="Update">
    </form> <br><br>
    <button><a href="index.php">Back</a></button>
</blockquote>
</body>
</html>