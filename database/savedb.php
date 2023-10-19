<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $db = $_POST['database'];
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS $db";
    if ($conn->query($sql_create_db) === TRUE) {
        echo "Database created successfully<br>";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Select the database
    $conn->select_db($db);

    // Create table
    $table = $_POST['table'];
    $sql_create_table = "CREATE TABLE IF NOT EXISTS $table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        marks INT NOT NULL
    )";
    if ($conn->query($sql_create_table) === TRUE) {
        echo "Table created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $marks = $_POST['marks'];

    // Insert data into the table
    $sql_insert_data = "INSERT INTO $table (name, email, marks) VALUES ('$name', '$email', '$marks')";

    if ($conn->query($sql_insert_data) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql_insert_data . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>