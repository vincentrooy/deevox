<?php

/**
 * tdTools class.
 *
 * Tools used all over TD CMF.
 *
 * @package    tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdTools
{
  /**
   * Returns mb shortened string to a given limit.
   *
   * @param String $content - raw string value to shorten
   * @param Integer $limit - limited length of shortened string
   * @return String - mb shortened string
   */
  static public function getMbShortenedString($content, $limit)
  {
    return mb_strlen($content) > $limit ? mb_substr($content, 0, $limit) . '...' : $content;
  }

  /**
   * Returns project name, defined in config/properties.ini file.
   *
   * @return String - project name
   */
  static public function getProjectName()
  {
    $file = sfConfig::get('sf_config_dir').'/properties.ini';
    $content = parse_ini_file($file, true);
    return $content['symfony']['name'];
  }

  /**
   * Returns a string with all polish characters replaced with latin ones.
   *
   * @param String $text - original text
   * @return String - result text
   */
  static public function replacePolishWithLatin($text)
  {
    $orig = array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ż', 'ź',
      'Ą', 'Ć', 'Ę', 'Ł', 'Ń', 'Ó', 'Ś', 'Ż', 'Ź');
    $dest = array('a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z',
      'A', 'C', 'E', 'L', 'N', 'O', 'S', 'Z', 'Z');
    return str_replace($orig, $dest, $text);
  }

  /**
   * Returns slug of a given text.
   *
   * @param String $text - original text
   * @return String - result text
   */
  static public function slugify($text)
  {
    $text = self::replacePolishWithLatin($text);
    $text = preg_replace('/\W+/', '-', $text);
    $text = strtolower(trim($text, '-'));
    return $text;
  }
}
