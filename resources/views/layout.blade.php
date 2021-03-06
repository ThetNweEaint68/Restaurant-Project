<!DOCTYPE html>
<html>
<head>
	<title>Colorado</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<!--Main Navigation-->
    <header>
    	<nav class="navbar navbar-expand-lg navbar-dark indigo">
    		<a class="navbar-brand" href="#"><strong>Colorado</strong></a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        	<ul class="navbar-nav mr-auto">
		            <li class="nav-item">
		            	<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/restaurant">Restaurant Lists</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="/orderList">All Food Orders</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">Search</a>
		            </li>
	            </ul>
	            <ul class="navbar-nav nav-flex-icons">
		            <li class="nav-item">
		                <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link"><i class="fab fa-twitter"></i></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link"><i class="fab fa-instagram"></i></a>
		            </li>
	            </ul>
	        </div>
        </nav>
    </header>
    <!--Main Navigation-->
	    <div class="container">
		    @yield('content')
	    </div>
		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>