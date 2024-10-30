
<?php
// Файл letters.php
require 'data.php';

$organizer = "Деян Иванов";

foreach ($users as $index => $user) {
    $gender = $user['gender'] == 'm' ? 'Уважаеми' : 'Уважаема';
    $event = $events[$index];
    
    echo "{$gender}, {$user['name']}<br>";
    echo "Имаме удоволствието да ви поканим на {$event['name']}.<br>";
    echo "{$event['message']}<br>";
    echo "С уважение, {$organizer}!<br><br>";
}
?>
