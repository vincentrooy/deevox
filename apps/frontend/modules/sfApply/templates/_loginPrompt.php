<?php use_helper('I18N') ?>
<form method="post" action="<?php echo url_for("@sf_guard_signin") ?>" name="sf_guard_signin" id="sf_guard_signin" class="sf_apply_signin_inline">
   <ul>
	 <li><?php echo $form['username']->renderLabel() ?></li>
	 <li><?php echo $form['username']->renderError() ?></li>
	 <li><?php echo $form['username'] ?></li>

	 <li><?php echo $form['password']->renderLabel() ?></li>
	 <li><?php echo $form['password']->renderError() ?></li>
	 <li><?php echo $form['password'] ?></li>

	 <li><?php echo $form['remember']->renderLabel() ?>
	 <?php echo $form['remember']->renderError() ?>
	 <?php echo $form['remember'] ?></li>

	 <?php echo $form->renderHiddenFields() ?>
     <li>
       <input type="submit" value="<?php echo __('sign in', array(), 'sfForkedApply') ?>" />
     </li>
  </ul>
  <p>
  <?php echo link_to(__('Reset Your Password',array(),'sfForkedApply'), 'sfApply/resetRequest')  ?>
  </p>
  <p>
  <?php
  echo link_to(__('Create a New Account',array(),'sfForkedApply'), 'sfApply/apply')
  ?>
  </p>
</form>
