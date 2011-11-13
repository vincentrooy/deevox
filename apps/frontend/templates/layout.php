<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="page">

			
		<div id="header" class="header">
		
			<div id="logo">
				<?php echo link_to(image_tag('logo_deevox.png','alt="logo_deevox" '), '@homepage') ?>
			</div>
			
			<div id="zone_de_menu_corporate">
				<ul>
					<li><a href="#">ZEVOX</a></li>
					<li><a href="#">LA VOX cie</a></li>
					<li><a href="#">ZIC ANNUAIRE</a></li>
				</ul>
			</div>
			
			<div id="panier">
				<a href="<?php echo url_for('cart/index')  ;?>">
					<span><?php echo __('my cart') ?></span>
				</a>
			</div>
			
			<div id="zone_de_choix_de_langue" class="choix_de_langues" >
				<?php include_partial('langue/moduleChoixLangues') ?>
			</div>
			
			<div class="clear_left"></div>
			
			<!-- MODULE DE CONNEXION -->
			<div id="module_connexion_deconnexion" class="module_connexion_deconnexion">
				<?php include_partial('global/moduleConnexionDeconnexion') ?>
				&nbsp|&nbsp
				<?php echo link_to(image_tag('facebook_connection.png','alt="connection_facebook" class="connection_facebook"'), '@homepage') ?>
			</div>
			
			
		</div>
		
		<div id="zone_navigation">
		<div class="main_menu" class="clear_fix">
			<ul class="clear_fix">
				<li class="first"><a href="<?php echo url_for('@homepage') ;?>"><?php echo __('Accueil') ?></a></li>
				<li><a href="<?php echo url_for('@homepage') ;?>"><?php echo __('Mon Deevox') ?></a></li>
				<li><a href="<?php echo url_for('@homepage')  ;?>"><?php echo __('Artiste') ?></a></li>
				<li class="last"><a href="<?php echo url_for('@homepage') ?>"><?php echo __('Boutique') ?></a></li>
			</ul>
		</div>
			
			<div class="clear_left"></div>
			
			<div id="recherche">
				<?php include_partial('recherche/recherche') ?>
			</div>
			<div class="clear_left"></div>
		</div>
		
		<div id="contenu">
			
			<div id="zone_principale">
				<?php echo $sf_content ?>
			</div>
			
			<div class="clear_both"></div>	
			
			
			
			<div id="bas_de_page">
		
				<!-- detection des visiteurs-->
				<?php /*tdVisitorManager::markVisitor();*/ ?>
				<hr/>
				<div id="elements_bas_de_page" class="elements_bas_de_page">
					<ul>
						<li><a href=""><?php echo __('flux RSS') ?></a></li>
						<li><a href=""><?php echo __('A propos') ?></a></li>
						<li><a href=""><?php echo __('Mentions Legales') ?></a></li>
						<li><a href=""><?php echo __('Plan du site') ?></a></li>
					</ul>
					<div class="clear_left"></div>
				</div>
			</div>
			
		</div>
		

		<div id="footer">
			<h1>Copyright DEEVOX 2011</h1>
		</div>
			
		<?php if ($sf_user->hasFlash('notice')): ?>
		  <div class="info"><?php echo $sf_user->getFlash('notice') ?></div>
		<?php endif ?>
		<br/>
		<?php if ($sf_user->hasFlash('error')): ?>
		  <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
		<?php endif ?>
		
	</div>
  </body>
</html>
