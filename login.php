<?php
include "connection.php";

// ====================================================================
// STEP 1: GET ROLE (rider or driver)
// ====================================================================
$role = $_POST['role'];


// ====================================================================
// PATH A: RIDER LOGIN
// ====================================================================
if ($role === 'rider') {

    // 1. GET INPUTS
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 2. VALIDATE INPUTS
    if (empty($username) || empty($password)) {
        echo "Please fill all fields!";
        exit();
    }

    // 3. CHECK DATABASE
    $sql = "SELECT * FROM customer_tbl WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        // OPTIONAL: session_start(); then store user data
    } else {
        echo "Invalid username or password!";
    }
}


// ====================================================================
// PATH B: DRIVER LOGIN
// ====================================================================
else if ($role === 'driver') {

    // 1. GET INPUTS
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 2. VALIDATE INPUTS
    if (empty($username) || empty($password)) {
        echo "Please fill all fields!";
        exit();
    }

    // 3. CHECK DATABASE
    $sql = "SELECT * FROM driver_tbl WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}


// ====================================================================
// PATH C: INVALID ROLE
// ====================================================================
else {
    echo "Error: Invalid user role!";
}
?>