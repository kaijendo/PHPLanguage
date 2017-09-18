	<?php
	include 'Database.php';

	
	class PostModel {

		public function add($name, $age, $phone){
		$db = new Database();
		$conn = $db -> init();	
		$sql = 'INSERT INTO `qlsv`(`name`, `age`, `phone`) VALUES 
				(\''.$name.'\',
				\''.$age.'\',
				\''.$phone.'\')';
				echo $sql;
		$result = $conn->query($sql);
		return $result;
	}
		public function getList(){
		$db = new Database();
		$conn = $db -> init();
		$result = $conn->query('SELECT * FROM `qlsv`');
		
		$dssv = array();
		if ($result->num_rows > 0) {
			while  ($sv = $result->fetch_assoc()) {
				$dssv[] = $sv;
			}
		}
		return $dssv;
	}
	public function getEdit($id) {
		$db = new Database();
		$conn = $db -> init();
		$sql = "SELECT * FROM `qlsv` WHERE id=$id";
		$result = $conn -> query($sql)->fetch_assoc();
		
		return $result;
	}
	
	public function edit($id, $name, $age, $phone) {
			$db = new Database();
			$conn = $db -> init();	
			$sql = "UPDATE `qlsv` SET `name` = '".$name."', `age` = '".$age."', `phone` = '".$phone."' WHERE `qlsv`.`id` = $id;";

			$result = $conn -> query($sql);
		}
		
		
		
		public function deleteData($id) {
			$db = new Database();
			$conn = $db -> init();
			$sql = 'DELETE FROM `qlsv` WHERE id='.$id;
			$result = $conn -> query($sql);
		}
}

?>