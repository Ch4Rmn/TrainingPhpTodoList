<form action="">
    Delete Page
</form>

<?php
require_once('db_connection.php');

// Delete
// echo $_GET['id'];
$id = $_GET['id'];

$sql = "DELETE FROM TodoList WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    return header('location:index.php');
    # code...
} else {
    echo 'error' . mysqli_error($conn);
}


?>