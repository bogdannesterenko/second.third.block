<?php
$dbh = new PDO('mysql:host=localhost;dbname=readers', 'root');

if (!$dbh) {
    die('Could not connect: ' . mysqli_error());
}
function executeQuery($dbh, $query)
{
    if ($dbh->query($query)) {
        echo "Success";
    } else {
        echo "Error: " . $query . "<br>" . $query->error;
    }
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $adress = $_POST['adress'];
    $users_books = $_POST['book'];

    $query = "INSERT INTO users (name,last_name,adress) VALUES ('$name','$surname','$adress')";
    executeQuery($dbh, $query);
    $userId = $dbh->lastInsertId();
    foreach ($users_books as $book) {
        $query = "INSERT INTO user_books (user_id, name) VALUES ('$userId','$book')";
        executeQuery($dbh, $query);
    }
}




