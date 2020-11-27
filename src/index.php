<?php 
echo "hello from docker yml file test which will use commands and setting in yml file";
?>
<?php
//for using docker mysql image contianer
$mysqli = new mysqli("db", "root", "example", "company1");

//print_r($mysqli);

$sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}
?>