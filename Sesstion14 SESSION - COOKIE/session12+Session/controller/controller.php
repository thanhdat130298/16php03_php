<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){

			$action = isset($_GET['action'])?$_GET['action']:'news';
			$model = new Model;
			switch ($action) {
				case 'home':
					// lay thong tin trang chu ra
					$homeData = $model->getHomepage();
					include 'view/homepage.php';
					break;
				case 'about':
					// lay thong tin trang about ra
					$aboutData = $model->getAbout();
					include 'view/about.php';
					break;
				case 'news':
					// lay thong tin trang news ra
					$newsData = $model->getNews();

					include 'view/news.php';
					break;
				case 'delete_news':
					// lay id can xoa
					$idDelete = $_GET['id'];
					// lay thong tin trang news ra
					if ($model->deleteNews($idDelete) === TRUE) {
						header('Location: index.php?action=news');
					}
					break;
				case 'add_news':
					// neu form duoc submit
						$errT = '';
					if (isset($_POST['add_news'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						if(empty($title)||empty($description)) {
							$errT = "Chua nhập TT!";
						}
						// xu ly luu news vao database
						else if ($model->addNews($title, $description) === TRUE) {
							header('Location: index.php?action=news');
						}
					}
					// goi 1 view cua trang add news
					include 'view/add_news.php';
					break;
				case 'edit_news':
					$id = $_GET['id'];
					$oldData = $model->getDetailId($id);
					$errD = '';

					//$oldDATa = $model->getDetailId();
					// neu form duoc submit
					if (isset($_POST['edit_news'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						if(empty($title)||empty($description)) {
							$errD = "Chua nhập TT!";
						}
						// xu ly luu news vao database
						else if ($model->editNews($id,$title, $description) === TRUE) {
							header('Location: index.php?action=news');
						}
					}
					// goi 1 view cua trang add news
					include 'view/edit_news.php';
					break;
				case 'register':
					if(isset($_POST['register'])) {
						$user = $_POST['username'];
						$pass = $_POST['password'];
						if ($model->register($user, $pass) === TRUE) {
							header('Location: index.php?action=home');
						}
					}
					include "view/register.php";
					# code...
					break;
				case 'login':
					$errLogin = '';
					if(isset($_POST['login'])) {
						$user = $_POST['username'];
						$pass = $_POST['password'];
						$login = $model->login($user, $pass);
						$login = $login->fetch_assoc();
						if (!is_null($login)) {
							$_SESSION['login'] = $login['username'];
							header('Location: index.php?action=home');
						}
						else $errLogin = "Sai tai khoan or pass";
					}
					include "view/login.php";
					# code...
					break;
				case 'logout':
					unset($_SESSION['login']);
					header('Location: index.php?action=home');
					# code...
					break;	
				default:
					# code...
					break;
			}
		}
	}
?>