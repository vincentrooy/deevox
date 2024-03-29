<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2011/11/16 19:46:04
sfConfig::add(array(
  'app_recaptcha_enabled' => false,
  'app_recaptcha_public_key' => 'YOUR_PUBLIC_reCAPTCHA_KEY',
  'app_recaptcha_private_key' => 'YOUR_PRIVATE_reCAPTCHA_KEY',
  'app_sfForkedApply_applyForm' => 'sfApplyApplyForm',
  'app_sfForkedApply_resetForm' => 'sfApplyResetForm',
  'app_sfForkedApply_resetRequestForm' => 'sfApplyResetRequestForm',
  'app_sfForkedApply_settingsForm' => 'sfApplySettingsForm',
  'app_sfForkedApply_editEmailForm' => 'sfApplyEditEmailForm',
  'app_sfForkedApply_mail_editable' => false,
  'app_sfForkedApply_confirmation' => array (
  'reset' => true,
  'apply' => true,
  'email' => true,
  'reset_logged' => false,
),
  'app_sfForkedApply_routes' => array (
  'apply' => '/deevonaute/new',
  'reset' => '/deevonaute/password-reset',
  'resetRequest' => '/deevonaute/reset-request',
  'resetCancel' => '/deevonaute/reset-cancel',
  'validate' => '/deevonaute/confirm/:validate',
  'settings' => '/deevonaute/settings',
),
  'app_sfForkedApply_from' => array (
  'email' => 'from@no-reply.com',
  'fullname' => 'The staff of deevox.com',
),
  'app_sf_guard_plugin_remember_key_expiration_age' => 2592000,
  'app_sf_guard_plugin_remember_cookie_name' => 'deevoxRememberMe',
  'app_sfApplyPlugin_from' => array (
  'email' => 'your@emailaddress.com',
  'fullname' => 'the staff at deevox.com',
),
));
