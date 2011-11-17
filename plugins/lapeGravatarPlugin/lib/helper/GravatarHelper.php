<?php

/**
 * Builds an image url using a gravatar service.
 *
 * @param string $email The user email.
 * @param integer $size The gravatar size.
 * @param string $rating The gravatar rating.
 * @param string $default The default image to use if the email does not have a gravatar image.
 *
 * @return string The gravatar image url.
 */
function gravatar_path($email, $size = 80, $rating = 'g', $default = null)
{
	return Gravatar::getGravatarImageUrl($email, $size, $rating, $default);
}


/**
 * Builds an <img> tag using a gravatar service.
 *
 * @param string $email The user email.
 * @param integer $size The gravatar size.
 * @param string $rating The gravatar rating.
 * @param string $default The default image to use if the email does not have a gravatar image.
 *
 * @return string The gravatar image tag.
 */
function gravatar_tag($email, $size = 80, $rating = 'g', $default = null)
{
	return image_tag(gravatar_path($email, $size, $rating, $default));
}
