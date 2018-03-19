<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="Styles/Index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<?php
$conn=mysqli_connect('localhost', 'root', 'labas', 'my_db');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name']) || empty($_POST['email'])){
        $error = "Bad entry douchebag";
        if(strlen($_POST['name'])>=1){
            $error = "Names too short";
        }
    }
    else {
        $success = 'File updated successfully';
//                $file = 'formos.txt';
//                $previousData = file_get_contents($file);
//                $postData = $_POST['name'] . " " . $_POST['email'] . " " . $_POST['tel'] . "\n";
//                file_put_contents($file, $previousData . $postData);
        if(isset($_POST['submit'])){
            $sql = "INSERT INTO users (name, email, phone, address, username, shoesize)
                    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST['address']."','".$_POST['username']."','".$_POST['shoesize']."')";

            $result = mysqli_query($conn,$sql);
        }
    }
}


?>

<div class="container">
    <H1> form</H1>
    <div class="row">
        <div class="col-4">
            <?php if(isset($error)){
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            elseif(isset($success)){
                echo '<div class="alert alert-success">' . $success . '</div>';
            }
            ?>
            <form method="POST" action="Index1.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" type="phone" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="address" class="form-control" id="address">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="shoesize">Shoe size</label>
                    <input name="shoesize" type="shoesize" class="form-control" id="shoesize">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
        <!---->











</body>
</html>
