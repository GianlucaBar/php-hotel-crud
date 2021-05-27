<?php

    require_once __DIR__ . '/database.php';

    $room_id = $_GET['id'];

    $sql = "SELECT * FROM `stanze` WHERE `id` = " . $room_id . ';';
    $result = $conn->query($sql); 

    $room = [];
    if ($result && $result->num_rows > 0) {
        // output data of each row
        $room = $result->fetch_assoc();

    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli stanza</title>
</head>
<body>
    <h1>Dettagli stanza numero <?php echo $room['room_number']; ?>:</h1>
    <ul>
        <li>Numero letti:<?php echo $room['beds'] ?></li>
        <li>Piano: <?php echo $room['floor'] ?></li>
    </ul>

</body>
</html>