<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$sql = "INSERT INTO students_php (name, email, phone, msg)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssss",
    $name,
    $email,
    $phone,
    $msg
);

if (mysqli_stmt_execute($stmt)) {

    echo "Student registered successfully!";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>