<?php
// Include the credentials
require_once('./credentials.php');

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Überprüfen Sie, ob die Anfrageparameter vorhanden sind
if(isset($_GET['current_point'])) {
    $current_point = $_GET['current_point'];

    // SQL-Abfrage 
    $sql_control = "SELECT * FROM tour";
    $result_stats = $conn->query($sql_control);
    
    // Hier berechnen Sie den nächsten Punkt basierend auf dem aktuellen Punkt
    switch ($current_point) {
        case 'point1':
            $nextPoint = 'point2';
            break;
        case 'point2':
            $nextPoint = 'point3';
            break;
        case 'point3':
            $nextPoint = 'point4';
            break;
        default:
            $nextPoint = 'Kein weiterer Punkt verfügbar';
            break;
    }
    
    // Geben Sie den nächsten Punkt als Antwort zurück
    echo $nextPoint;
} else {
    // Wenn die Anfrageparameter nicht vorhanden sind, geben Sie einen Fehler zurück
    echo 'Error: Missing parameter';
}
?>
