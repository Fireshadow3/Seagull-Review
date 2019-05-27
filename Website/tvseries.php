    <body class="bg-dark">
		<?php
		//$db = new MysqliDb('localhost', 'alessandro', 'secret', 'dbName');
		//echo 'ciao mamma';
		?>
        



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

    </body>
</html>
