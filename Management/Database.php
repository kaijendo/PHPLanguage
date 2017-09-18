
<?php 
	class Database {

// Create connection
function init() {
$conn = new mysqli("localhost", "root", "", "sinhvien");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

return $conn;
}
}
	 ?>