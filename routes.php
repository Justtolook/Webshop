<?php
	function check_session() {
		if(!isset($_SESSION)) {
			session_start();
			if(!(isset($_SESSION["var"]))) {
					return false;
			}
			else return true;
	}
	else return true;
	}

  function call($controller, $action) {
	require_once('controllers/' . $controller . '_controller.php');
	require_once('controllers/pages_controller.php');
	require_once('repository/PostRepository.php');
	require_once('repository/ProductRepository.php');
	require_once('repository/ServiceRepository.php');
	require_once('repository/WarenkorbRepository.php');
	require_once('repository/RechnungRepository.php');
	require_once('repository/HerstellerRepository.php');
	require_once('repository/ProfilRepository.php');
	
		if(check_session() || ($controller == 'pages' || $controller == 'products' || $controller =='hersteller' || ($controller == 'services' && $action != 'addToWarenkorb'))) {

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
				case 'rechnung':
				require_once('models/rechnung.php');
				$controller = new RechnungController();
				break;
				case 'hersteller':
				require_once('models/hersteller.php');
				$controller = new HerstellerController();
				break;
				case 'profil':
				require_once('models/profil.php');
				$controller = new ProfilController();
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
	$controllers = array('pages' => ['home', 'error', 'anmeldung', 'loginfailed', 'loginsuccessfull', 'registrierung', 'error_invalid_session', 'abgemeldet', 'error_existingUser'],
					   'posts' => ['index', 'show'],
						 'products' => ['index', 'add', 'input', 'search'],
						 'warenkorb' => ['index', 'kasse', 'produktEntfernen', 'changeQuantity'],
						 'rechnung' => ['index'],
						 'hersteller' => ['index'],
						 'profil' => ['index'],
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