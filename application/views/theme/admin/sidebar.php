    	<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<?php $i = $this->uri->segment(2); ?>
					<ul class="nav">
						<li>
							<a href="<?= base_url('admin/dashboard');?>" class="
							<?php if($i == 'dashboard'){
								echo 'active';
							} ;?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="#subContent" data-toggle="collapse" class="collapsed 
							<?php if($i == 'content'){
								echo 'active';
							} ;?>"><i class="lnr lnr-pencil"></i> <span>Content</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subContent" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url('admin/content') ;?>" class="">Lihat Content</a></li>
									<li><a href="<?= base_url('admin/content/insert') ;?>" class="">Tambah Content</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subGuest" data-toggle="collapse" class="collapsed 
							<?php if($i == 'guest'){
								echo 'active';
							} ;?>"><i class="lnr lnr-book"></i> <span>Buku Tamu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subGuest" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url('admin/guest') ;?>" class="">Lihat Buku Tamu</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subFeedback" data-toggle="collapse" class="collapsed 
							<?php if($i == 'feedback'){
								echo 'active';
							} ;?>"><i class="lnr lnr-bubble"></i> <span>Feedback</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subFeedback" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url('admin/feedback') ;?>" class="">Lihat Feedback</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>