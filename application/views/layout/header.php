<!-- Navigation START -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav">
		<div class="container">
				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a href="<?php echo site_url(); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/img/logo-remeccon.png"></a>
				</div>
				<div class="collapse navbar-collapse" role="navigation">
						<ul class="nav navbar-nav navbar-right">
								<li class="<?php echo active_link('home'); ?>"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="<?php echo active_link('profile'); ?>"><a href="<?php echo site_url('profile'); ?>">Profile</a></li>
								<li class="dropdown <?php echo active_link('products'); ?>"><a href="<?php echo site_url('products'); ?>" class="dropdown-toggle">Products <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
												<li class="<?php echo active_link('pullverizer-mill'); ?>"><a href="<?php echo site_url('pullverizer-mill'); ?>">Pullverizer Mill</a></li>
												<li class="<?php echo active_link('mesin-rotomolding'); ?>"><a href="<?php echo site_url('mesin-rotomolding'); ?>">Mesin Rotomolding</a></li>
												<li class="<?php echo active_link('ice-crusher'); ?>"><a href="<?php echo site_url('ice-crusher'); ?>">Ice Crusher</a></li>
												<li class="<?php echo active_link('ice-flake'); ?>"><a href="<?php echo site_url('ice-flake'); ?>">Ice Flake</a></li>
												<li class="<?php echo active_link('biji-plastik'); ?>"><a href="<?php echo site_url('biji-plastik'); ?>">Jual Biji Plastik</a></li>
												<li class="<?php echo active_link('jasa-giling'); ?>"><a href="<?php echo site_url('jasa-giling'); ?>">Jasa Giling Biji Plastik</a></li>
												<li class="<?php echo active_link('jasa-polyurethane'); ?>"><a href="<?php echo site_url('jasa-polyurethane'); ?>">Jasa Polyurethane</a></li>
										</ul>
								</li>
								<li class="<?php echo active_link('portfolio'); ?>"><a href="<?php echo site_url('portfolio'); ?>">Portfolio</a></li>
								<li class="<?php echo active_link('contact'); ?>"><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
						</ul>
				</div>
		</div>
</nav>
<!-- Navigation END -->