<?php include "db.php";?>
<?php

function createRows() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $salt = "iusesomecrazystrings22";
        $password = crypt($password, $salt);

        $connection = mysqli_connect('localhost', 'root', 'a31102002x', 'loginapp');

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Recorded";
        }
    }
}

function showAllData() {

    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query FAILED" . mysqli_error($connection));
    }
}

function deleteRows() {
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query FAILED" . mysqli_error($connection));
    }
}
?>