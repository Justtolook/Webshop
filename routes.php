<?php
  function call($controller, $action) {
	require_once('controllers/' . $controller . '_controller.php');
	require_once('repository/PostRepository.php');
	require_once('repository/ProductRepository.php');
	require_once('repository/ServiceRepository.php');
	

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
		
	}
	$controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error', 'anmeldung', 'loginfailed', 'loginsuccessfull', 'registrierung', 'error_invalid_session'],
					   'posts' => ['index', 'show'],
						 'products' => ['index', 'add', 'input', 'search'],
						 'services' => ['anmelden', 'abmelden', 'registrieren']);

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