<?php

$conn = mysqli_connect("localhost", "admin", "admin", "user");
$sql = "DELETE FROM services WHERE id='$_GET[id]'";
$result = $conn->query($sql);

if(mysqli_query($conn, $sql)) {
    header("refresh:1; url=admin.php");
}
else {
    echo "Not Deleted!";
}


?>