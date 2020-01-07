<?php 
	include "model/model.php";
	/**
	 * 
	 */
	class Controller
	{
		
		function Request() {
			$action = isset($_GET['action'])?$_GET['action']:'list_product';
			$model = new Model;
			switch ($action) {
				case 'list_product':
					$list_product = $model->list();
					include "view/list_product.php";
					# code...
					break;
				case 'add_product':
					$getCategory = $model->getCategory();
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$decription = $_POST['decription'];
						$img = $_POST['image'];
						$id_category = $_POST['idCATEGORY'];
						if ($model->add($name,$decription,$img,$id_category)===TRUE) {
							header('Location: index.php?action=list_product');
						}
					}
					include "view/add_product.php";
					break;
				case 'list_category':
					$list_category = $model->getCategory();
					include "view/list_category.php";
					break;
				case 'delete_pro':
					$idDelete = $_GET['id'];
					// lay thong tin trang list ra
					if ($model->deleteProduct($idDelete) === TRUE) {
						header('Location: index.php?action=list_product');
					}
					break;	
				case 'delete_cate':
					$idDelete = $_GET['id'];
					// lay thong tin trang list ra
					if ($model->deleteCate($idDelete) === TRUE) {
						header('Location: index.php?action=list_category');
					}
					break;
				case 'add_cate':
					if(isset($_POST['submit'])){
						$tendm = $_POST['name'];
						if($model->addCate($tendm)===TRUE){
							header('Location: index.php?action=list_category');
						}
					}
					include "view/add_category.php";

					break;

				default:
					# code...
					break;
			}
			# code...
		}

	}
?>