<?php use_helper('I18N') ?>

<h1><?php echo __('Signin', null, 'sf_guard') ?></h1>

<?php /*echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) */?>

<?php echo include_partial('sfApply/login', array('form' => $form, 'loggedIn' => false)) ?>
