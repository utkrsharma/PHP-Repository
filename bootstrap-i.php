<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap-CDN</title>
	<!--bootstrap css framework-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--jquery cdn-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<!--popper-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!--bootstrap javascript-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
	<!--alert-->
	<!--primary,success,danger,info,warning-->
<!--<div class="container">-->
<div class="container">	
	<div class="alert alert-primary">
		<strong>Well Done!</strong>
		<p>Alert Creation Successful</p>
	</div>
</div>
    <!--buttons-->
<!--<a href="https://www.google.com/" class="btn btn-info">Redirect</a>
<a href="https://www.google.com/" class="btn btn-outline-info">Redirect</a>
-->
<div class="container">
	<a href="https://www.google.com/" class="btn btn-outline-info btn-block">Redirect</a>
</div>
     <!--dropdowns-->
     <p></p>
     <div class="container">
<div class="button-group">
	<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
	<div class="dropdown-menu" x-placement ="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px,38px,0px);">
		<a href="#" class="dropdown-item">Home</a>
		<a href="#" class="dropdown-item">Shop</a>
		<a href="#" class="dropdown-item">Cart</a>
		<a href="#" class="dropdown-item">Checkout</a>
	
	<div class="dropdown-divider"></div>
	<a href="#" class="dropdown-item">Profile</a>
	</div>
</div>
     <!--button-grouping-->
     <p></p>
<div class="btn-group-vertical">
	<a href="#" class="btn btn-success">One</a>
	<a href="#" class="btn btn-success">Two</a>
	<a href="#" class="btn btn-success">Three</a>
</div>
     <!--checkboxes-->
     <p></p>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
	<label class="btn btn-outline-primary active">
		<input type="checkbox" name="">Checkbox1
	</label>
	<label class="btn btn-outline-primary">
		<input type="checkbox" name="">Checkbox2
	</label>
</div>
      <!--cards-->
      <p></p>
<div class="card bg-primary text-white mb-3 text-center">
	<div class="card-body">
		<blockquote class="card-blockquote">
			<p>
				Two roads diverged in a yellow wood,
                And sorry I could not travel both
                And be one traveler, long I stood
                And looked down one as far as I could
                To where it bent in the undergrowth;
			</p>
		</blockquote>
		<footer>Poet
			<cite title="title">Robert Frost</cite>
		</footer>
	</div>
</div>
       <!--carousel-->
       <p></p>

<div id="carouselExampleControls" class="carousel-slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block img-fluid" src="la.jpg" alt="First Image">
		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid" src="chicago.jpg" alt="Second Image">
		</div>
		<div class="carousel-item">
			<img class="d-block img-fluid" src="ny.jpg" alt="Third Image">
		</div>
	

    	<a href="#carouselExampleControls" class="carousel-control-prev" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
    	</a>
    	<a href="#carouselExampleControls" class="carousel-control-next" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
    	</a>
    	
    	      <!--Indicators-->
              <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    </div>
</div>
</body>
</html>