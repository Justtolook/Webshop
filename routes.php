<?php
	function check_session() {
		if(!isset($_SESSION)) {
			session_start();
			if(!(isset($_SESSION["var"]))) {
					return false;
					//header("Location: error_invalid_session.html");
			}
			else return true;
	}
	}

  function call($controller, $action) {
	require_once('controllers/' . $controller . '_controller.php');
	require_once('controllers/pages_controller.php');
	require_once('repository/PostRepository.php');
	require_once('repository/ProductRepository.php');
	require_once('repository/ServiceRepository.php');
	require_once('repository/WarenkorbRepository.php');
	
		if(check_session() || ($controller == 'pages' || $controller == 'products' || ($controller == 'services' && $action != 'addToWarenkorb'))) {

			switch($controller) {
				case 'pages':
				$controller = new PagesController();
				break;
				case 'posts':
				// we need the model to query the database later in the controller
				require_once('models/post.php');
				$controller = new PostsController();
				break;
				case 'products':
				require_once('models/product.php');
				$controller = new ProductsController();
				break;
				case 'services':
				$controller = new ServicesController();
				break;
				case 'warenkorb':
				require_once('models/warenkorb.php');
				$controller = new WarenkorbController();
				break;
			}
		}
	else {
		$controller = new PagesController();
		$action = 'error_invalid_session';
	}
	$controller->{ $action }();
	}

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error', 'anmeldung', 'loginfailed', 'loginsuccessfull', 'registrierung', 'error_invalid_session', 'abgemeldet'],
					   'posts' => ['index', 'show'],
						 'products' => ['index', 'add', 'input', 'search'],
						 'warenkorb' => ['index'],
						 'services' => ['anmelden', 'abmelden', 'registrieren', 'addToWarenkorb']);

  if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
	  call($controller, $action);
	} else {
	  call('pages', 'error');
	}
  } else {
	call('pages', 'error');
  }
?>