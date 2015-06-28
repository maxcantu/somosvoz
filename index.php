<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SomosVoz</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- This is the overlay DIV that is displayed while loading a new page -->
	<div id="loader"></div> 
	
	<!-- Header -->
	<header>
		<div class="container-fluid">
			 <div class="row">
				<!-- logo -->
				<div class="col-md-2">
					<img src="img/logo.png" alt="SomosVoz" />
				</div>
				<!-- search -->
				<div class="col-md-3 col-md-offset-5">
					<div class="input-group">
				      <input type="text" class="form-control" placeholder="Buscar...">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Buscar</button>
				      </span>
				    </div><!-- /input-group -->
				</div>
				<!-- login -->
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-lg">Iniciar Sesión</button>
				</div>
			 </div>
		</div>
	</header>
	
	<!-- Navbar -->
	<nav class="navbar">
		<div class="container-fluid">
			<ul id="filters">
				<li>
					<a class="voz-mundo" data-filter=".mundo, .mundo-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Mundo"></a>
				</li>
				<li>
					<a class="voz-entretenimiento" data-filter=".entretenimiento, .entretenimiento-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Entretenimiento"></a>
				</li>
				<li>
					<a class="voz-cultura" data-filter=".cultura, .cultura-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cultura"></a>
				</li>
				<li>
					<a class="voz-economia" data-filter=".economia, .economia-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Economía"></a>
				</li>
				<li>
					<a class="voz-pensamiento" data-filter=".pensamiento, .pensamiento-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pensamiento"></a>
				</li>
				<li>
					<a class="voz-ciencia" data-filter=".ciencia-y-tecnologia, .ciencia-y-tecnologia-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ciencia y Tecnología"></a>
				</li>
				<li>
					<a class="voz-deportes" data-filter=".deportes, .deportes-carousel" href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Deportes"></a>
				</li>
			</ul>
		</div>
    </nav>
	
	<!-- Posts -->
	<section id="scroll-container">
		<div class="vox-item mundo" data-url="http://google.com/" data-toggle="modal" data-target="#myModal">
			<div class="post">
				<h2 class="vox-post-title vox-color-mundo">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item entretenimiento" data-url="/me-siguen-maravillando-las-plantas/2" data-toggle="modal" data-target="#myModal">
			<div class="post">
				<h2 class="vox-post-title vox-color-entretenimiento">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item cultura" data-url="/me-siguen-maravillando-las-plantas/3" data-toggle="modal" data-target="#myModal">
			<div class="post">
				<h2 class="vox-post-title vox-color-cultura">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>	
		<div class="vox-item economia" data-url="/me-siguen-maravillando-las-plantas/4" data-toggle="modal" data-target="#myModal">
			<div class="post">
				<h2 class="vox-post-title vox-color-economia">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item pensamiento" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-pensamiento">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item ciencia-y-tecnologia" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-ciencia-y-tecnologia">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item deportes" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-deportes">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>	
		<div class="vox-item ciencia-y-tecnologia" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-ciencia-y-tecnologia">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item mundo" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-mundo">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item entretenimiento" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-entretenimiento">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item economia" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-economia">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
		<div class="vox-item mundo" data-url="/me-siguen-maravillando-las-plantas/">
			<div class="post">
				<h2 class="vox-post-title vox-color-mundo">El secreto de Adaline, excelente para ver con tu pareja</h2>
				<div class="voz-post-image" style="background-image: url('http://somosvoz.com/files/2914/3103/7184/adaline.jpg');"></div>
			</div>
		</div>
	</section>
	
	<!-- Pagination (hide) -->
	<div id="pages">
		<a href="./index.php"></a>
		<a href="./index2.php"></a>
		<a href="./index3.php"></a>
	</div>
	
	<!-- Modal for Posts -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">
		        <a id="voz-article-single-page-anchor" target="_blank" href="#"><span class="glyphicon glyphicon-file"></span> Ver en página individual</a>
	        </h4>
	      </div>
	      <div class="modal-body"></div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Isotope JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
    <!-- JS -->
    <script src="js/script.js"></script>
  </body>
</html>