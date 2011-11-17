<?php

// class myUser extends sfBasicSecurityUser
class myUser extends sfGuardSecurityUser
{
	public function setCulture($culture)
	{
		// setlocale(LC_TIME, sfConfig::get('app_culture_locale'));
		// parent::setCulture($culture);
	}
}
