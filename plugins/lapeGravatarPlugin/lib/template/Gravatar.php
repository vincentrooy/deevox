<?php

class Gravatar extends Doctrine_Template
{
	/**
	 * Array of Gravatar options
	 *
	 * @var string
	 */
	protected $_options = array('email_field' => 'email');

	/**
	 * __construct
	 *
	 * @param string $array
	 * @return void
	 */
	public function __construct(array $options = array())
	{
		$this->_options = Doctrine_Lib::arrayDeepMerge($this->_options, $options);
	}

	/**
	 * Builds an <img> tag url using a gravatar.
	 *
	 * @param string $email The user email.
	 * @param integer $size The gravatar size.
	 * @param string $rating The gravatar rating.
	 * @param string $default The default image to use if the email does not have a gravatar image.
	 *
	 * @return string The gravatar image url.
	 */
	public static function getGravatarImageUrl($email, $size = 80, $rating = 'g', $default = null)
	{
		$url = 'http://www.gravatar.com/avatar/';

		$email_hash = md5(trim(strtolower($email)));

		$url .= $email_hash;

		$params_added = false;
		if ($size >= 1 && $size <= 512)
		{
			$url .= "?s=$size";
			$params_added = true;
		}

		if ($rating == 'g' || $rating == 'pg' || $rating == 'r' || $rating == 'x')
		{
			$url .= ($params_added?'&':'?')."r=$rating";
		}

		if (!is_null(($default)))
		{
			$url .= ($params_added?'&':'?')."d=$default";
		}

		return $url;
	}

	/**
	 * 
	 * Builds an <img> tag url using a gravatar.
	 * @param int $size
	 * @param string $rating
	 * @param string $default
	 * @throws Exception
	 * 
	 * @return string
	 */
	public function getGravatarUrl($size = 80, $rating = 'g', $default = null)
	{
		$invoker = $this->getInvoker();
		$column = $this->_options['email_field'];
		
		if(!$this->getTable()->hasColumn($column)) {
			throw new Exception(sprintf('Email field "%s" not exists in table "%s"', $column, $this->getTable()->name));
		}
		return self::getGravatarImageUrl($invoker->{$this->_options['email_field']}, $size, $rating, $default);
	}

}

class Gravatarable extends Gravatar {}