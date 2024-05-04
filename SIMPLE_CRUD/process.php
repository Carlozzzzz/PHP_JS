<?php

session_start();

function my_connection() {
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "crud_refresh";

    $mysqli = new mysqli($host, $username, $password, $dbname) or die(mysqli_error($mysqli));

    return $mysqli;
}

// ASSIGNING GLOBAL VARIABLES
$connect = my_connection();

$fullname = '';
$email = '';
$password = '';
$usertype = '';

// CREATE INSERT UPDATE DELETE here->>>>>

if(isset($_POST['save'])) {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    // Simple Validation
    if(checkIfEmpty($fullname) || checkIfEmpty($email) || checkIfEmpty($password) || checkIfEmpty($usertype)) {
        $_SESSION['message'] = "Missing Fields!";
        $_SESSION['msg_type'] = "error";
    
        // redirect back to the create page
        header("location: addedit.php");
        exit();
    }

    // echo "<pre>";
    // var_dump($_POST);
    // die();

    $connect->query("INSERT INTO users (`fullname`, `email`, `password`, `user_type`) VALUES ('$fullname', '$email', '$password', '$usertype')") or 
            die(mysqli_error($connect));

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    // redirect back to the create page
    header("location: addedit.php");
    exit();
}

// Update data
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    if(checkIfEmpty($fullname) || checkIfEmpty($email) || checkIfEmpty($password) || checkIfEmpty($usertype)) {
        $_SESSION['message'] = "Missing Fields!";
        $_SESSION['msg_type'] = "error";
    
        // redirect back to the create page
        header('location: addedit.php?id='.$id);
        exit();
    }

    $connect->query("UPDATE users SET fullname='$fullname', email='$email', password='$password', user_type='$usertype' WHERE id='$id'") or 
            die(mysqli_error($connect));

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "success";

    // redirect back to the create page
    header('location: addedit.php?id='.$id);
    exit();
}

// Delete Data
if(isset($_GET['delete']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare you query
    $result = $connect->query("DELETE FROM users WHERE id='$id'") or die(mysqli_error($connect));

    if($result) {
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Failed to delete!";
        $_SESSION['msg_type'] = "error";
    }

    header('location: index.php');
    exit();
}

// Usefulfunction
function checkIfEmpty($data) {
    if(empty($data) || $data == "") {
        return true;
    } return false;
}