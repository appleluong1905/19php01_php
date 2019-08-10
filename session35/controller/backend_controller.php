<?php 
	include 'model/backend_model.php';
	class BackendController {

		function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'dashboard';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($controller) {
				case 'home':
					$this->handeDashboard($action);
					break;
				case 'user':
					$this->handleUser($action);
					break;
				case 'product':
					$this->handleProduct($action);
					break;
				default:
					# code...
					break;
			}
		}

		function handleProduct($action) {

		}
		function handleUser($action) {
			switch ($action) {
				case 'list_user':
					# code...
					$model = new BackendModel();
					$listUser = $model->getListUser();
					include 'view/users/list_user.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>