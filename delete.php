<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "update";

function connect_db($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function delete_record($conn, $id) {
    $sql = "DELETE FROM data_table WHERE ID='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn = connect_db($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    delete_record($conn, $id);
    $conn->close();
}
?>