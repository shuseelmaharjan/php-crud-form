<?php
require_once('config.php');
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
    <form action="add_record.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="your name"><br> <br>

    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="your email"><br> <br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br> <br>

    <label for="phne">Phone Number:</label>
    <input type="number" name="phone"> <br> <br>

    <label for="gender">Gender:</label>
    <input type="radio" value="male" name="gender">Male
    <input type="radio" value="female" name="gender">Female 
    <input type="radio" value="other" name="gender">Other<br> <br>

    <label for="language">Language:</label>
    <select name="language" id="lan">
        <option value="select language" selected>Select Language</option>
        <option value="nepali">Nepali</option>
        <option value="english">English</option>
    </select>   <br> <br>
    
    <label for="zip">Zip Code:</label>
    <input type="number" name="zip"><br> <br>

    <label for="about">About:</label>
    <textarea name="about" id="about" cols="30" rows="10" placeholder="Write about yourself..."></textarea> <br> <br>

    <input type="submit" name="register" value="Register">
    </form>

    <br>
    <br>

    <!--table-->
    <table border="1px">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Language</th>
                <th>Zip Code</th>
                <th>About</th>
                <th>Status</th>
            </tr> 
        </thead>
        <tbody>
            <?php
            $output = "SELECT * FROM input";
            $query = mysqli_query($conn, $output);
            foreach($query as $key => $response){?>
            <tr>
                <td><?= ++$key;?>.</td>
                <td><?= $response['name'] ?></td>
                <td><?= $response['email'] ?></td>
                <td><?= $response['phone'] ?></td>
                <td><?= $response['gender'] ?></td>
                <td><?= $response['language'] ?></td>
                <td><?= $response['zip'] ?></td>
                <td><?= $response['about'] ?></td>
                <td class="action">
                        <a href="update.php ? criteria=<?= $response['id']?> "><span class="edit">Edit</span></a>
                        <a href="delete.php ? criteria=<?= $response['id'] ?>" onclick="return confirm ('Are you sure.') "><span class="Delete">Delete</span></a>
                    </td>

            </tr>
               <?php 
            }
            ?>
        </tbody>
    </table>
</blockquote>    
</body>
</html>