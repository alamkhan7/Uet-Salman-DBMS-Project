<?php
	include 'get_record.php' ;

	
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
				<div class="col-sm-9">
				<h4 class="pull-left" style="color: red; font-weight: 700">
				<?php
					if (isset($_GET['msg']) && !empty($_GET['msg']))
						echo $_GET['msg'] ;
				?>
				</h4>
					<form id="outer" class="form-horizontal formContainer" action="./process.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="member1">Member 1</label>
							<div class="col-sm-10">
								<select name="member1" id="member1" class="form-control">
								
								<?php
									$query_result =  show_student_list() ;
									while ($list= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$list['std_id']}> {$list['std_id']} &nbsp&nbsp {$list['std_name']} &nbsp&nbsp {$list['CGPA']} </option>\n" ;
									}
									
								?>
							</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="member2">Member 2</label>
							<div class="col-sm-10">
								<select name="member2" id="member2" class="form-control">
								
								<?php
									$query_result =  show_student_list() ;
									while ($list= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$list['std_id']}> {$list['std_id']} &nbsp&nbsp {$list['std_name']} &nbsp&nbsp {$list['CGPA']} </option>\n" ;
									}
									
								?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="member3">Member 3</label>
							<div class="col-sm-10">
								<select name="member3" id="member3" class="form-control">
								
								<?php
									$query_result =  show_student_list() ;
									while ($list= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$list['std_id']}> {$list['std_id']} &nbsp&nbsp {$list['std_name']} &nbsp&nbsp {$list['CGPA']} </option>\n" ;
									}
									
								?>
								</select>
							</div>
						</div>
<!-- aaaaaaaaaaaaaaaaa -->
<div class="form-group">
							<label class="control-label col-sm-2" for="supervisor">Supervisor</label>
							<div class="col-sm-10">
								<select name="supervisor" id="supervisor" class="form-control">
									<option value=""> Select Superviser </option>
								<?php
									$query_result =  show_project_list() ;
									while ($supervisor= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$supervisor['supervisor']}> {$supervisor['supervisor']} </option>\n";
									}
								?>
							</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="advisor">Advisor</label>
							<div class="col-sm-10">
								<select name="advisor" id="advisor" class="form-control">
									<option value=""> Select Advisor </option>
								<?php
									$query_result =  show_project_list() ;
									while ($advisor= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$advisor['advisor']}> {$advisor['advisor']} </option>\n";
									}
								?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="project">Project</label>
							<div class="col-sm-10">
								<select name="project" id="project" class="form-control">
									<option value=""> Select project </option>
								<?php
									$query_result =  show_project_list() ;
									while ($project_title= mysqli_fetch_assoc($query_result) ) 
									{
										echo "<option value={$project_title['project_id']}> {$project_title['project_title']} </option>\n";
									}
								?>
							</select>
							</div>
						</div>



						
						<div>
							<button type="submit" class="btn btn-primary btn-block" name="submit">Next</button>
						</div>

						
<!-- _________________________________________________________-->
		
					</form>
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