<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
      <style>
          table, tr, td {
              border: 1px solid black;
          }
      </style>
      <link rel="stylesheet" href="Styles/Index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  <li>
    <h2>Hello world!! Welcome to PHP :D</h2>
      <?php echo "labas"; ?>
      <ul>Labas</ul>
      <ul>Ka veiki</ul>
      <ul>Kaip sekasi</ul>
      <ul>Smagu
          <img src="https://i.pinimg.com/736x/f4/89/ef/f489ef22363cf1e4c2a4fb5b1cd8aec5--geometric-background-background-designs.jpg" width="200px">
      </ul>
  </li>

  <?php

























    echo "<br>";
      echo  $coin = rand(0,1) . "<br>";

    echo $random;



    echo "<br><br>";

//    ARRAYS
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    $value1 = ["55", 5, "Antradienis", "Kazkas naujo"];
    $value2 = ["Vienas", "Du", "Trys", "Keturi"];
    unset($value1[1]);
    print_r($value1);

    echo "<br>";

    array_push($value1, "kaciukas");
    print_r($value1);

    shuffle($value1);
    print_r($value1);

    echo "<br>";

    if(in_array("Antradienis", $value1)){
        echo "yay yra";
    }
    else {
        echo "ajajaj";
    }

    echo "<br>";

    if(in_array("Du", $value2)){
        echo "yra";
    }
    else {
        echo "nera";
    }

    echo "<br>";

    echo(isset($value2[3]))?"Yra!!!!!!!!!":"Nera :((((((((((";
    unset($value2[3]);
    echo "<br>";
    echo(isset($value2[3]))?"Yra!!!!!!!!!":"Nera :((((((((((";

    echo "<br>";
    echo join("___", $value2);

    echo "<br>";
    sort($value1);
    echo "<ul></ul><li>";
    echo join("</li><li>",$value1);
    echo "</li></ul>";


    $week =['Monday','Tuesday','Wednesday', 'Thursday','Friday', 'Saturday','Sunday'];

    $array = ["Monday" => "Bloga diena",
        "Tuesday" => "Dar blogesne diena",
        "Wednesday" => "Gera diena",
        "Thursday" => "Rytoj penktadienis!!"];

    foreach($array as $value => $item){
        echo $value . " : " . $item . "<br>";
    }
    echo "<br>";

    $car = ["Audi" => "Nu nieko tokia",
    "Bmw" => "Amzina meile",
    "Opel" => "Gera gera",
    "Volvo" => "Saugi, bet nu galetu but grazesne"];
    foreach ($car as $value => $item){
        echo $value . " : " . $item . "<br>";
    }

    echo "<br>";


    $name = substr("Rusne", -2);
    echo ($name);

    echo "<br>";

    function back()
    {
        $name = 'rusne';
        $lenght = strlen($name);
        for ($letter = $lenght; $letter >= 0; $letter--){
           echo substr($name, $letter, 1);

        }


    }


    back();





    $numbers = ["A", "B", "C"];
    shuffle($numbers);
    foreach ($numbers as $number){
        echo $number;
    }



    $rooms = ["101" => 5,
        "102" => 4,
        "103" => 3];
    $used = ["101" => 1,
        "102" => 2,
        "103" => 3];
    foreach ($rooms as $roomnum => $beds){
        $free = $beds - $used[$roomnum];
        echo "Kambary" . $roomnum . " yra " . $beds . " lovos." . " Is ju laisvos" . $free . "<br>";
    }



        $user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19];
        $user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21];
        $user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];

        $users = [$user1, $user2, $user3];
        echo '<table>';
        foreach ($users as $user){
            echo '<tr>';
            echo '<td>' . $user['vardas']. '</td>';
            echo '<td>' . $user['pavarde']. '</td>';
            echo '<td>' . $user['amzius']. '</td>';
            echo '</tr>';
        }
        echo '</table>';






  ?>













  </body>
</html>
