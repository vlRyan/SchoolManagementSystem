<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql_create_db = "CREATE DATABASE IF NOT EXISTS Pulocan";
  if ($conn->query($sql_create_db) === TRUE) {
      echo "Database created successfully<br>";
  } else {
      echo "Error creating database: " . $conn->error;
  }

  $conn->select_db("Pulocan");

  $sql_create_users_table = "CREATE TABLE IF NOT EXISTS users (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(100) NOT NULL,
      email VARCHAR(100) NOT NULL,
      details TEXT
  )";

  $sql_create_students_table = "CREATE TABLE IF NOT EXISTS students (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      details TEXT
  )";

  $sql_create_courses_table = "CREATE TABLE IF NOT EXISTS courses (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      details TEXT
  )";

  $sql_create_instructors_table = "CREATE TABLE IF NOT EXISTS instructors (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      details TEXT
  )";

  if ($conn->query($sql_create_users_table) === TRUE) {
      echo "Table 'users' created successfully<br>";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_create_students_table) === TRUE) {
      echo "Table 'students' created successfully<br>";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_create_courses_table) === TRUE) {
      echo "Table 'courses' created successfully<br>";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_create_instructors_table) === TRUE) {
      echo "Table 'instructors' created successfully<br>";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>