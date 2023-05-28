<?php
$mysqli = new mysqli("db", "user", "password", "hoge");
$sql = "select * from huga";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . ":" . $row['text'] . "<br>";
}