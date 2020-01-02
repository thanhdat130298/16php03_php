<?php 
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			echo $action;
		}

	}
	?>