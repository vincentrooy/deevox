<!-- debut module de connexion -->

		<?php if(!$sf_user->getGuardUser()){ ;?>
			<a href="<?php echo url_for('@sf_guard_signin') ;?>">connexion</a>
			&nbsp|&nbsp
			<a href="<?php echo url_for('@inscription_deevonaute') ;?>">inscription</a>
		<?php }else{ ;?>
			<span><?php echo "Bonjour  ".$sf_user->getGuardUser() ;?></span>
			&nbsp|&nbsp
			<a href="<?php echo url_for('@sf_guard_signout') ;?>">deconnexion</a>
		<?php } ;?>
		
<!-- fin module de connexion -->
   
 