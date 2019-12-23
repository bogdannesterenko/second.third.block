<?php
$dbh = new PDO('mysql:host=localhost;dbname=injection', 'root');
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
if (isset($_POST['text'])) {
    $text = $_POST['text'];

    $stmt = $dbh->prepare("INSERT INTO user_information (text) VALUES  (:text)");

    $stmt->execute(array('text' => $text));

}


 ?>