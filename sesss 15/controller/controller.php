<?php 
	include 'model/model.php';
	class Controller
	{
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model();
			switch ($action) {
				case 'home':
					include 'views/home.php';
					break;
				case 'add':
					if(isset($_POST['submit'])) {
						$title = $_POST['title'];
						$decription = $_POST['decription'];
						$file = $_FILES['image'];
						$image = $file['name'];
						$data = $model->addDetail($title,$decription,$image);
						if($data) {
							move_uploaded_file($file['tmp_name'], './files/'.$image);
							header('Location: index.php?action=list');
						}
					}
					include 'views/addProduct.php';
					break;
				case 'list':
					$olddata = $model->getNews();
					include 'views/listProduct.php';
					break;
				case 'delete':
						$id = $_GET['id'];
						if($model->delete($id))
							header('Location: index.php?action=list');
					break;
				case 'edit':

					$id = $_GET['id'];
					$data = $model->getById($id);
					if(isset($_POST['edit'])) {
						$title = $_POST['title'];
						$decription = $_POST['decription'];
						$file = $_FILES['image'];
						$image = $file['name'];
						if($model->edit($id,$title,$decription,$image))

							move_uploaded_file($file['tmp_name'], './files/'.$image);
							header('Location: index.php?action=list');
					}
					include 'views/editProduct.php';
					break;


				default:
					# code...
					break;
			}
		}
	}
?>