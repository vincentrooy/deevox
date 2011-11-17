<?php use_helper('I18N') ?>

<div id="menu">
	<ul>
		<li><a href="<?php /*echo url_for('@mes_albums?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername())) ?>"><?php echo __('My Photos') ?></a></li>

		<li><a href="<?php echo url_for('@videos?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername())) ; */?>"><?php echo __('My Videos') ?></a></li>

		<li><a href="<?php echo url_for('article/index?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername())) ; ?>"><?php echo __('My blog') ?></a></li>

		<li><a href="<?php /*echo url_for('@playlists?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername())) ;?>"><?php echo __('My Playlists') ?></a></li>

		<li><a class="reseau" href="<?php echo url_for('@network') ?>"><?php echo __('Deevox Network') ?></a></li>

		<li><a class="editer" href="<?php echo url_for('@editer') ;?>"><?php echo __('Edit my profile') ?></a></li>

		<li><a class="editer" href="<?php echo url_for('@changer_photo') ;?>"><?php echo __('change my profile photo') ?></a></li>

		<li><a class="editer" href="<?php echo url_for('@changer_mdp') ;?>"><?php echo __('change my password') */ ?></a></li>
	</ul>
</div>

