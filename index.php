<?php

$connect = mysqli_connect(
    'db',
    'lamp_docker',
    'password',
    'lamp_docker'
);

$query = 'SELECT * FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySql content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['tittle'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo 'Posted: '.$record['date'].'';
    echo '<hr>.';
}

?>