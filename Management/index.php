<?php

include 'Controller.php';
	 $controller = new Controller();
	 if (isset($_GET['action'])) {
	 	$action = $_GET['action'];
	 	switch ($action) {
	 		case "addPostget":
	 			$controller -> addPostget();
	 			break;
			case "deletePost":
	 			$controller -> deletePost();
	 			break;
			case "addPostPost":
	 			$controller -> addPostpost();
	 			break;
			case "editPostget":
	 			$controller->editPostget();
	 			break;
			case "editPost":
	 			$controller->editPost();
	 			break;
	 		default:
	 			$controller->showList();
	 			break;
	 	}
	 }
	
?>