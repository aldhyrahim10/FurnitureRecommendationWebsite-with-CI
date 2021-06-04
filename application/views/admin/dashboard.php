        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Overview</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-file"></i></span>
										<p>
											<span class="number">
											<?php foreach ($content as $item) : ?>
                            				    <?= $item['total']; ?>
                            				<?php endforeach ?>
											</span>
											<span class="title">Content</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="number">
											<?php foreach ($guest as $item) : ?>
                            				    <?= $item['total']; ?>
                            				<?php endforeach ?>
											</span>
											<span class="title">Guest</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-bubble"></i></span>
										<p>
											<span class="number">
											<?php foreach ($guest as $item) : ?>
                            				    <?= $item['total']; ?>
                            				<?php endforeach ?>
											</span>
											<span class="title">Feedback</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>