<?php
$PAGE_TITLE = "Juliana Connors";
require_once("php/template/utilities.php");
?>
<!DOCTYPE HTML>
<div class="container">
	<header>
		<?php require_once("php/template/header.php"); ?>
	</header>

<body>
	<nav class="navbar navbar-inverse">
		<!-- logo and mobile toggle button get grouped together for better mobile display -->
		<div class="navbar-header">
			<!-- this is the mobile menu button -->
			<<button type="button" class="btn btn-default btn-lg"> <span class="glyphicon glyphicon-menu-hamburger"></span></button>
			<a class="navbar-brand" href="#"></a>
		</div>

		<!-- here are your main nav links, grouped for toggling -->
		<div class="collapse navbar-collapse" id="main-menu">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Home</a></li>
				<li><a href="#">Link1</a></li>
				<li><a href="#">Link2</a></li>
				<li><a href="#">Link3</a></li>
			</ul>
		</div>
	</nav>

	<!--<div class="container"-->
			<div class="row">
				<div class=".col-md-4">
					todo-matt add image
				</div>
				<div class=".col-md-offset-4">
					todo-matt add links
				</div>
			</div>
		</div>
</body>
<footer>
	<?php require_once("php/template/footer.php");?>
</footer>
</div>
