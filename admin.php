<?php
	
	$sflag = 0;
	$pflag = 0;
	$dflag = 0;

	if( isset($_GET['std-msg']) && !empty($_GET['std-msg']) )
	{
		$sflag = 1 ;
		$msg = $_GET['std-msg'] ;
	}
	else if ( isset($_GET['pro-msg']) && !empty($_GET['pro-msg']) )
	{
		$pflag = 1 ;
		$msg = $_GET['pro-msg'] ;

	}
	else if ( isset($_GET['dlt-msg']) && !empty($_GET['dlt-msg']) )
	{
		$dflag = 1 ;
		$msg = $_GET['dlt-msg'] ;

	}
	else
		$msg = "" ;
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		
		<title>ProMan System</title>
	</head>

	<body>
		<header class="headerImg">
			<div class="container">
				<div class="row">
					<div class="col-xs-offset-3 col-xs-6">
						<img src="images/logo.png" alt="ProMan Logo" class="headerLogo">
					</div>
				</div>
			</div>
		</header>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="ProMan_1.html">ProMan</a></li>
					<li><a href="groups.html">Groups</a></li>
					<li><a href="FAQs.html">FAQs</a></li>
					<li><a href="Contacts.html">Contacts</a></li>
				</ul>

				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
						<button type="submit" class="btn btn-default">Search</button>
					</div>
				</form>
			</div>
		</nav>

		<div class="container-fluid colMain">
			<div class="row">
				<div class="col-sm-9">

					<table>
						<tr>
							<td>
					
					<form class="form-horizontal formContainer" action="./process.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<h3>
							<?php
								if ($sflag)
									echo $msg ;
							?>
						</h3>
							<label class="control-label col-sm-2" for="Sfile">Upload Students File</label>
							<div class="col-sm-10 ">
								<input type="file" name="sfile" accept=".xls" >
							</div>
						</div>
						<button type="submit" name="upload_student" class="btn btn-primary btn-block">Submit</button>
					</form>

				</td>

				<td>
					<form class="form-horizontal formContainer" action="./process.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<h3>
							<?php
								if ($pflag)
									echo $msg ;
							?>
						</h3>
							<label class="control-label col-sm-2" for="Pfile">Upload Projects File</label>
							<div class="col-sm-10 ">
								<input type="file" name="pfile" accept=".xls">
							</div>
						</div>
						<button type="submit" name="upload_project" class="btn btn-primary btn-block">Submit</button>
					</form>

				</td>

				<td>
					<form class="form-horizontal formContainer" action="./process.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<h3>
							<?php
								if ($dflag)
									echo $msg ;
							?>
						</h3>
							<label class="control-label col-sm-2" for="delP">Delete Project</label>
							<div class="col-sm-10 ">
								<input type="number" name="group_no" >
							</div>
						</div>
						<button type="submit" name="delete_project" class="btn btn-primary btn-block">Submit</button>
					</form>
				</td>

				</div>
				<div class="col-sm-3 classified">
					<div class="row">
						<h2>Classified</h2>
						<div class="col-lg-12">
							<p>Bootstrap is a free and open-source front-end web framework for designing websites and web applications. It contains HTML- and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<footer class="headerImg">
			<p class="copy">Copyright &copy 2017 PROMAN SYSTEM. All rights reserved.</p>
		</footer>

		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>

</html>