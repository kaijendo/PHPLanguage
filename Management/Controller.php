<?php
	include 'Model.php';
	include 'View.php';
	class Controller {
		function showList(){
			$m = new PostModel();
			$data = $m->getList();
			$v= new View();
			$v-> displayList($data);
		}
		function addPostget() {
			$v = new View();
			$v -> displayAdd();
		}
		function addPostpost() {
			$m = new PostModel();
			$m -> add($_POST['name'],$_POST['age'],$_POST['phone']);
			header("location:index.php?controller=Controller&action=showList");
		}
		
		function editPostget() {
			$m = new PostModel();
			$result = $m -> getEdit($_GET['id']);
			$v = new View();
			$v -> displayUpdate($result);
		}
		function editPost() {
			$m = new PostModel();
			$m -> edit($_GET['id'], $_POST['name'],$_POST['age'],$_POST['phone']);
			$this->showList();
		}
		function deletePost() {
			$m = new PostModel();
			$m -> deleteData($_GET['id']);
			$this->showList();

		}
	}
?>