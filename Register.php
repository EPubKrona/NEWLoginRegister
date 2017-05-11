<?php
    $con = mysqli_connect("webftp.all-inkl.com", "d026557a", "shortyMP3", "d026557a");
    
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, mail, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $name, $username, $mail, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
