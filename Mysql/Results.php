<?php
$conn=mysqli_connect('localhost', 'root', 'labas', 'my_db');
$results = mysqli_query($conn, 'SELECT * FROM users');
foreach ($results as $result){
    echo "<tr>";
    echo "<td>".$result['name']."</td> <br>";
    echo "<td>".$result['email']."</td> <br>";
    echo "<td>".$result['phone']."</td> <br>";
    echo "<td>".$result['address']."</td> <br>";
    echo "<td>".$result['username']."</td> <br>";
    echo "<td>".$result['shoesize']."</td> <br>";
    echo "</tr>";
}
?>