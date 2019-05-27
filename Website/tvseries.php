<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="WebsiteThemes/2_gabrib.css">

        <title>Seagull review</title>
    </head>
    <body class="bg-dark">
		<?php
		//$db = new MysqliDb('localhost', 'alessandro', 'secret', 'dbName');
		//echo 'ciao mamma';
		?>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-div">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Logo</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- Container for search bar -->
        <div class="container w-50 mt-3 rounded h-50 bg-div mx-auto">
            <form class="form-inline my-2 my-lg-0 justify-content-center" action="" method="GET">
                <input class="form-control mr-sm-2 mt-1 mb-1" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mt-1 mb-1 bg-btn" type="submit">Search</button>
            </form>
        </div>

        <!-- Container for bottom objects -->
        <div class="container-fluid pt-3" mt-10>
            <div class="row">

				<?php if (isset($_GET["search"])) { ?>
					<!-- Container for media objects -->
					<div class="col bg-light justify-content-md-center">
						<div class="card-deck card-deck-padding">
							<div class="card">
								<a href="http://www.google.it/">
									<img class="card-img-top" src="https://is4-ssl.mzstatic.com/image/thumb/Video114/v4/e3/a0/b4/e3a0b478-bac5-e587-7e03-4d16f4d40f09/pr_source.lsr/268x0w.png" alt="Card image cap" >
								</a>
								<div class="card-body">
									<h5 class="card-title">Acquaman</h5>
									<p class="card-text">Questa è la trama di Aquaman. Lui non è un pesce ma mangia i pesci...</p>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="https://images.wallpaperscraft.com/image/city_vector_panorama_119914_3840x2160.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Cybercity</h5>
									<p class="card-text">Wow se questa citta è figa lorem ipsum è fantastico ma veramente...</p>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
							</div>
						</div>
						<div class="card-deck card-deck-padding">
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
						<div class="card-deck">
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="..." alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } else {
				?>
				<p>Ammazzati</p>
			<?php } ?>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
