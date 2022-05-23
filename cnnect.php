<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $course = $_POST['course'];
    $Grievance = $_POST['Grievance'];

    //Database connection

    $conn= new mysqli('localhost','root','','','projecttest');
    if($conn-> connect_error){
        die('Connection failed'.$conn-> connection_error);
    }else{
        $stmt = $conn ->prepare("Insert into registration(firstName,lastName,course)
        values(?,?,?,?,?)");

        $stmt->bind_param("ssss",$firstName,$lastName,$course,$Grievance);
        $stmt->execute();
        echo"Registered Your Grievance...";
        $stmt->close();
        $conn->close(); 
    }
?>