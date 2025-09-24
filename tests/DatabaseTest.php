<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testConnection() {
        $host = 'localhost';    // database server
        $user = 'devops';       // username
        $pass = 'password';     // password
        $db   = 'studentdb';    // database name

        $conn = new mysqli($host, $user, $pass, $db);

        // If connection fails, test will FAIL (❌)
        $this->assertFalse($conn->connect_error, "Database connection failed");

        $conn->close();
    }
}
