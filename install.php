<?php
// Skapar databas
// $sql = "CREATE DATABASE CourseDB";
// if ($db->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $db->error;
// }

/* Anslut till databasen */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    $db = new mysqli("localhost", "root", "", "CourseDB");
    if ($db->connect_errno > 0) {
        die('Fel vid anslutning [' . $db->connect_error . ']');
    }
} else {
    $db = new mysqli('studentmysql.miun.se', 'amhv2000', 'lösen', 'amhv2000');
    if ($db->connect_errno > 0) {
        die('Fel vid anslutning [' . $db->connect_error . ']');
    }
}


$sql = "DROP TABLE IF EXISTS Courses;
CREATE TABLE Courses(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    course_id VARCHAR(8),
    name VARCHAR(100),
    progression VARCHAR(1),
    course_syllabus VARCHAR(200)
);";

// Skickar queryn till databasen
if ($db->multi_query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $db->error;
}
