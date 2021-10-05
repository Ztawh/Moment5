<?php
// Skapar klass som sköter databasuppkoppling

class CourseDB {
    private $db;

    function __construct()
    {
        // Kopplar upp till databasen
        if ($_SERVER["SERVER_NAME"] == "localhost") {
            $this->db = new mysqli("localhost", "root", "", "CourseDB");
            if ($this->db->connect_errno > 0) {
                die('Fel vid anslutning [' . $this->db->connect_error . ']');
            }
        } else {
            $this->db = new mysqli('studentmysql.miun.se', 'amhv2000', 'CA2gMHbpLX', 'amhv2000');
            if ($this->db->connect_errno > 0) {
                die('Fel vid anslutning [' . $this->db->connect_error . ']');
            }
        }
    }

    // public function connect()
    // {
    //     // Kopplar upp till databasen
    //     if ($_SERVER["SERVER_NAME"] == "localhost") {
    //         $this->db = new mysqli("localhost", "root", "", "CourseDB");
    //         return $this->db;
    //         if ($this->db->connect_errno > 0) {
    //             die('Fel vid anslutning [' . $this->db->connect_error . ']');
    //         }
    //     } else {
    //         $this->db = new mysqli('studentmysql.miun.se', 'amhv2000', 'CA2gMHbpLX', 'amhv2000');
    //         return $this->db;
    //         if ($this->db->connect_errno > 0) {
    //             die('Fel vid anslutning [' . $this->db->connect_error . ']');
    //         }
    //     }
    // }

    // public function close(){
    //     $this->db = null;
    // }


}