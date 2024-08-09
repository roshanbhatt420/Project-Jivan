<?php
include 'connect.php';
$sql = "SELECT id, title, content, photo_url FROM stories";
$result = $conn->query($sql);

$stories = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $stories[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($stories);
?>