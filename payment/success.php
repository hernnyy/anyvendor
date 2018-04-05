<!DOCTYPE html>
<html>
<head>
	<title>Any Vendor</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton|Bitter" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Any vendor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	Descarga
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <nav>
          <a class="dropdown-item" href="#">Free Download</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Most Viewed</a>
        </nav> 
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<div class="container">
	<section class="header mt-5 mb-5">
		<h1>Any Vendor</h1>
	</section>
	<!-- <div class="dropdown">
	  <button class="btn btn-primary btn-lg btn-block" type="button" id="ddm-aritmetica" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Aritmetica
	  </button>
	  <div class="dropdown-menu" aria-labelledby="ddm-aritmetica">
	    <a class="dropdown-item" href="aritmetica.html">operaciones con numeros naturales</a>
	  </div>
	</div>
	<div class="dropdown">
	 <button class="btn btn-secondary btn-lg btn-block" type="button" id="ddm-algebra" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Algebra<span class="caret"></span></button>
	 </button>
	  <div class="dropdown-menu" aria-labelledby="ddm-algebra">
	    <a class="dropdown-item" href="#">Operaciones con expresiones algebraicas enteras</a>
	  </div>
	</div>
	<div class="dropdown">
	  <button class="btn btn-primary btn-lg btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Ecuaciones
	  </button>
	  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="#">Ecuaciones de primer grado con una incognita</a>
	  </div>
	</div> -->
<section>
	<div class="container">
		<H4>Download Model </H4>
		
		<a href="../../../download.php?astrid=<?php echo (int)$_REQUEST['codea'] * (int)$_REQUEST['codeb'];?>" class="btn btn-info">Download File</a>
		<!-- <form action="#">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-info">Download</button>
		</form> -->
	</div>
</section>
<section>
		
</section>
</div>
</body>
</html>
