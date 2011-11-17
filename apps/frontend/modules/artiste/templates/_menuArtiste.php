<?php use_helper('I18N', 'Date') ?>
<a href="<?php /*echo url_for('@Profil_artiste?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername()))*/ ?>"><?php echo __('') ?></a>
&nbsp;
<a href="<?php /*echo url_for('@biographie?username='.($sf_request->getParameter('username')?$sf_request->getParameter('username'):$sf_user->getGuardUser()->getUsername())) */?>"><?php echo __('Biography') ?></a>
&nbsp;
<a href="<?php echo url_for('radioblog/index?artistName='.($sf_request->getParameter('artistName')?$sf_request->getParameter('artistName'):$sf_user->getGuardUser()->getArtistByDeevonaute()->artistName)) ?>"><?php echo __('Radio Blog') ?></a>
&nbsp;
<a href="<?php /*echo url_for('@edit_profil_artiste')*/ ?>"><?php echo __('Edit profile') ?></a>