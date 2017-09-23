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
					<li><a href="ProMan_2.php">ProMan</a></li>
					<li><a href="groups.php">Groups</a></li>
					<li><a href="FAQs.php">FAQs</a></li>
					<li><a href="Contacts.php">Contacts</a></li>
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
				<div class="col-sm-9 tbl">
					
					<table class="table-bordered table-striped">
						<tr>
							<th class=tblGrp>Group Members</th>
							<th class=tblGrp>Batch</th>
							<th class=tblGrp>Project</th>
							<th class=tblGrp>Supervisor</th>
							<th class=tblGrp>Advisor</th>
							
						</tr>
						<?php
							include 'connection.php' ;
							$q1 = "SELECT * from student WHERE std_id IN (SELECT std1 from groups) || std_id IN (SELECT std2 from groups) || std_id IN (SELECT std3 from groups)" ;

							$q2 = "SELECT * FROM project where project_id IN (SELECT Project_id FROM groups)" ;

							$q1_result = mysqli_query($conn,$q1) ;
							$q2_result = mysqli_query($conn,$q2) ;

							$pro = mysqli_fetch_assoc($q2_result) ;

							while($std = mysqli_fetch_assoc($q1_result))
							{
								$i=1 ;
								if($i==3)
									$pro = mysqli_fetch_assoc($q2_result) ;
							
								$Supervisor = $pro['supervisor'] ;
								$Advisor = $pro['advisor'] ;
								$project = $pro['project_title'] ;

								echo "<tr>" ;
								$Batch = $std['batch_no'] ;
								$std_name = $std['std_name'] ;

								echo "<td> {$std_name} </td>" ;
								echo "<td> {$Batch} </td>" ;
								echo "<td> {$project} </td>";
								echo "<td> {$Supervisor} </td>";
								echo "<td> {$Advisor} </td>";
								echo "</tr>";

								$i++;

							}

						?>
					</table>



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