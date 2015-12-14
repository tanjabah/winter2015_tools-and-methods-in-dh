<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">CEEC</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar">
			
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control">
				</div>
				<button type="submit" class="btn btn-success">Sign in</button>
				<button type="submit" class="btn btn-success">Register</button>
			</form>
			
			<ul class="nav navbar-nav">
				<!--Dropdown Sprachen-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle language_selector" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Language</span> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Deutsch</a></li>
						<li><a href="#">English</a></li>
						<li><a href="#">Francais</a></li>
					</ul>
				</li>
				
				<!--Dropdown Expertenbereich ehemalig bei CEEC für Experten und Transkriptionstools-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools for experts <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Transcription </a></li>
						<li><a href="#">Digitalization</a></li>
						<li><a href="#">Datastructure</a></li>
					</ul>
				</li>

				<!--Dropdown Literatur ehemalige Bereiche Historische Bibliotek und Handaperat mit sinnvollerer Einteilung-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Literature <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Catalouges</a></li>
						<li><a href="#">About Selected Manuscripts</a></li>
						<li><a href="#">About "Dombibliothek"</a></li>
						<li><a href="#">About Certain Collections</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.navbar-collapse -->
	</div>
</nav>