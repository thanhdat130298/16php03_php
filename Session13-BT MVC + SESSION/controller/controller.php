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
					$list_category = $model->listALL();
					include "view/list_product.php";
					# code...
					break;
				case 'list_users':
					$listUsers = $model->listUsers();
					include "view/users.php";
					# code...
					break;
				case 'add_product':
					$check = TRUE;
					$errName = $errDec = $errImg = '';
					$getCategory = $model->getCategory();
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$decription = $_POST['decription'];
						$up = $_FILES['image'];
						$img = $up['name'];
						if (empty($name)) {
							$errName = "Please type the name!";
							$check = FALSE;
						}
						if (empty($decription)) {
							$errDec = "Please type the decription!";
							$check = FALSE;
						}
						if (empty($img)) {
							$errImg = "Please choose image!";
							$check = FALSE;
						}
						if ($check) {
							move_uploaded_file($up['tmp_name'], './uploads/'.$img);
							$id_category = $_POST['idCATEGORY'];
							if ($model->add($name,$decription,$img,$id_category)===TRUE) {
								header('Location: index.php?action=list_product');
							}
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
					$errCate = ''; 
					if(isset($_POST['submit'])){
						$tendm = $_POST['name'];
						if (empty($tendm)) {
							$errCate = "Please type the Category Name!";
						}
						else if($model->addCate($tendm)===TRUE){
							header('Location: index.php?action=list_category');
						}
					}
					include "view/add_category.php";
					break;
				case 'register':
				$errRegister ='';
					if(isset($_POST['register'])) {
						$user = $_POST['username'];
						$pass = $_POST['password'];
						$check = $model->getOldUser($user);
						while ($row = $check->fetch_assoc()) {				
								if($row['username'] = $user)
									$errRegister = "Username is exist!";
								# code...
								else if ($model->register($user,$pass) === TRUE) {
									header('Location: index.php?action=list_product');
								}
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
							header('Location: index.php?action=list_product');
						}
						else $errLogin = "Sai tai khoan or pass";
					}
					include "view/login.php";
					# code...
					break;
				case 'logout':
					unset($_SESSION['login']);
					header('Location: index.php?action=list_product');
					# code...
					break;	
				case 'edit_pro':
					$check = TRUE;
					$id = $_GET['id'];
					$edit = $model->getOldProduct($id);
					$edit = $edit->fetch_assoc();
					$decription = $name = $img = '';
					$errDec = $errName = $errImg = '';
					if (isset($_POST['submit'])) {
						$name = $_POST['name'];
						$decription = $_POST['decription'];
						$img = $_FILES['image'];
						$imgName = $_FILES['image']['name'];
						move_uploaded_file($img['tmp_name'],'./uploads/'.$imgName);
						if(empty($name)) {
							$errName = "Please Nhập name sản phẩm!";
							$check = FALSE;
						}
						if(empty($decription)) {
							$errDec = "Please Nhập decription sản phẩm!";
							$check = FALSE;
						}
						if(empty($imgName)) {
							$errImg = "Please Nhập Hình ảnh sản phẩm!";
							$check = FALSE;
						}
						else if ($check = true) {
							//echo $name.$id.$decription.$imgName;
							if($model->editProduct($id, $name, $decription, $imgName)===TRUE){
								header('Location: index.php?action=list_product');
							}
						}
					}
					include "view/edit_product.php";
				break;
				case 'edit_cate': 
					$check = TRUE;
					$id = $_GET['id'];
					$edit = $model->getOldCategory($id);
					$edit = $edit->fetch_assoc();
					$errName = '';
					$TenDM = '';
					if (isset($_POST['submit'])) {
						echo "$TenDM";
						$TenDM = $_POST['TenDM'];
						if (empty($TenDM)) {
							$errName = 'Please nhap ten DM!';
							$check = FALSE;
						}
						else if ($check = TRUE) {
							if ($model->editCate($id, $TenDM) === TRUE) { 
								header('Location: index.php?action=list_category');
							}
						}
					}
						
				include "view/edit_category.php";
				default:
					# code...
					break;
			}
			# code...
		}

	}
?>