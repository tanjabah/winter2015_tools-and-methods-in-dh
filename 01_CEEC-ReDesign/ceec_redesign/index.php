<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="CEEC Redesign">
		<meta name="author" content="Hendrik Schmeer">
		<link rel="icon" href="favicon.ico">

		<title>CEEC Redesign</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body>

		<?php include('navbar.php'); ?>

    

		<div class="container">
			<div class="row">
				<div class="col-md-5 clearfix left">
					<!--search form manuscrips-->
					<div id="ceec_search" class="clearfix nicebox">
						<h1>CEEC Manuscript Search</h1>
						<form id="simple_search">
							<div class="form-group clearfix">
								<input class="form-control pull-left" type="text" placeholder="Suche">
								<input type="submit" class="btn btn-success" value="Go!">
							</div>
						</form>
						<button class="btn btn-default" id="dropdown-toggle">
							Advanced Search
						</button>
					</div>
					
					<!--Advanced Search-->
					<div id="dropdown" class="clearfix nicebox" style="display: none;">
						<!-- name: Zusatzparameter fuer die Alltype-Suche fuer… -->
						<h2>Further search options</h2>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="filter">Filter by</label>
								<select class="form-control">
									<option value="0" selected>All Filings</option>
									<option value="1">Archives</option>
									<option value="2">Manuscripts</option>
									<option value="3">Country of Origin</option>
									<option value="4">Decade</option>
									<option value="5">Epoch</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contain">Filer</label>
								<input class="form-control" type="text" />
							</div>
							<div class="form-group">
								<label for="contain">Contains the words</label>
								<input class="form-control" type="text" />
							</div>
							<input type="submit" class="btn btn-success" value="Go!">
						</form>
					</div>
					
					<!--Search for Literature-->
					<div id="Search_for_Literature" class="clearfix nicebox">
						<h2>Search for Literature</h2>
						<form id="ob-simplesearch_form" action="http://kug.ub.uni-koeln.de/portal/kug/search.html" method="get">
							<!-- Recherchieren Sie in  Titeln und  Katalogen -->
							<div class="ob-searchfield ob-clear_floats">
									<input id="to_focus" class="form-control pull-left" type="text" title="Literature Search in KUG" placeholder="Search in KUG" name="fs" required="required"></input>
									<input type="submit" class="btn btn-success" value="Go!">
							</div>
						</form>                       
					</div> 
					
					
					<div id="search_results" class="clearfix nicebox">
						<h2>Search Results</h2>
						<ul class="library">
							<li>
								<span class="glyphicon glyphicon-folder-close"></span>
								Bergisch-Gladbach, Paffrath, Kath. Pfarrei St. Clemens
							</li>
							<li id="st_lambertus">
								<span class="glyphicon glyphicon-folder-close"></span>
								Düsseldorf, St. Lambertus
								<ul class="book">
									<li>
										<span class="glyphicon glyphicon-book"></span>
										Sammelhandschrift (1511)
										<ul class="series">
											<li id="book_pages">
												<span class="glyphicon glyphicon-duplicate"></span>
												Pages
											</li>
											<li id="book_front">
												<span class="glyphicon glyphicon-duplicate"></span>
												Frontmatter
											</li>
											<li id="book_addenda">
												<span class="glyphicon glyphicon-duplicate"></span>
												Addenda
											</li>
										</ul>
									</li>
									<li>
										<span class="glyphicon glyphicon-book"></span>
										Biblia Sacra  (15. Jh.)
									</li>
									<li>
										<span class="glyphicon glyphicon-book"></span>
										Antiphonarium officii  (15./16.Jh.)
									</li>
								</ul>
							</li>
							<li>
								<span class="glyphicon glyphicon-folder-close"></span>
								Düsseldorf, Gerresheim, Kath. Pfarrei St. Margareta
							</li>
							<li>
								<span class="glyphicon glyphicon-folder-close"></span>
								Euskirchen, Kath. Pfarrei St. Martin
							</li>
						</ul>
					</div>
					
					
				</div> <!--close Spalte 1 : searches and results-->
				
				<!--Zweite Spalte: Slider und click prompt-->
				<div class="col-md-7 container-fluid">
					
					<?php include('slider.php'); ?>
					
				</div>
			</div> <!--.row close-->
		</div> <!--.container close-->

		<hr>

		<?php include('footer.php'); ?>
					
	</body>
</html>
