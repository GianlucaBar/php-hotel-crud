<?php 
    require_once __DIR__ . '/database.php';

    $sql = "SELECT * FROM `stanze`";
    $result = $conn->query($sql);

    $rooms = [];
    if ($result && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
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
    <title>dbhotel connect</title>
</head>
<body>
    <h1>LISTA STANZE</h1>
    <?php var_dump($room) ?>
    <ul>
        <?php foreach($rooms as $room) {?>
            <li>
                N. stanza: <?php echo $room['room_number'] ?>
                Piano: <?php echo $room['floor'] ?>
                <a href="room-info.php?id=<?php echo $room['id']?>">Dettagli stanza</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>


