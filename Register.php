<?php
    $con = mysqli_connect("files.000webhost.com", "id1612358_krona", "shortyMP3", "id1612358_epub");
    
    $name = $_POST["name"];
    $age = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, mail, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $name, $username, $mail, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
