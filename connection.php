<<<<<<< HEAD
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "tnvs";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

=======
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "tnvs";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

>>>>>>> 1872544059947e75dda83b936ab46edce32e296e
?>