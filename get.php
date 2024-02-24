<?php
include 'db.php';

function getImages() {
    global $conn;

    $sql = "SELECT idimagens, link FROM imagens";  
    $result = $conn->query($sql);

    $images = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $images[] = array(
                'id' => $row["idimagens"],
                'link' => $row["link"]
            );
        }
    }

    return $images;
}
?>
