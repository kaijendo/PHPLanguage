<?php
class View {
	function displayList($data){
		include 'list_layout.php';
	}
	function displayAdd() {
		include 'displayAdd.php';
	}
	function displayUpdate($result) {
		include 'displayUpdate.php';
	}
}

?>