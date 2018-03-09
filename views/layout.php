<DOCTYPE html>
<html>
  <head>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/mdb.css" rel="stylesheet" type="text/css">
	<link href="style/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Web Shop</title>
  </head>
  <body>
    <header>  
	  <!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark unique-color fixed-top">

			<!-- Navbar brand -->
			<a class="navbar-brand" href="/hlammert/WebshopWMVC">Home</a>

			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="basicExampleNav">

				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?controller=products&action=index">List Products</a>
							<a class="dropdown-item" href="?controller=products&action=add">Add Products</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>

				</ul>
				<!-- Links -->

				<form class="form-inline" action="?controller=products&action=search" method="POST">
					<div class="md-form mt-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" name="name" aria-label="Search">
					</div>
				</form>
				<ul class="navbar-nav mr-auto">
				<li class="nav-item">
						<a class="nav-link" href="?controller=warenkorb&action=index">Warenkorb</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Konto</a>
						<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Profil</a>
							<a class="dropdown-item" href="#">Rechnungen</a>
							<a class="dropdown-item" href="?controller=services&action=abmelden">Abmelden</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- Collapsible content -->

		</nav>
	<!--/.Navbar-->
	  
	  
	  
    </header>
	
	<div class="content">
    <?php require_once('routes.php'); ?>
	</div>
    <!--Footer-->
	
      <footer class="page-footer font-small unique-color pt-4 mt-4">
      
          <!--Footer Links-->
          <div class="container-fluid text-center text-md-left">
              <div class="row">
      
                  <!--First column-->
                  <div class="col-md-6">
                      <h5 class="text-uppercase">Footer Content</h5>
                      <p>Here you can use rows and columns here to organize your footer content.</p>
                  </div>
                  <!--/.First column-->
      
                  <!--Second column-->
                  <div class="col-md-6">
                      <h5 class="text-uppercase">Links</h5>
                      <ul class="list-unstyled">
                          <li><a href="#!">Link 1</a></li>
                          <li><a href="#!">Link 2</a></li>
                          <li><a href="#!">Link 3</a></li>
                          <li><a href="#!">Link 4</a></li>
                      </ul>
                  </div>
                  <!--/.Second column-->
              </div>
          </div>
          <!--/.Footer Links-->
      
          <!--Copyright-->
          <div class="footer-copyright py-3 text-center">
              <div class="container-fluid">
                  © 2015 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
      
              </div>
          </div>
          <!--/.Copyright-->
      
      </footer>
      <!--/.Footer-->
  </body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/hlammert/WebshopWMVC/bootstrap/js/bootstrap.js"></script>
<script src="/hlammert/WebshopWMVC/bootstrap/js/mdb.js"></script>
</html>
