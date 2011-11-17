<?php

/**
 * tdRandomDataGenerator class.
 *
 * Random data generator used for managing fixtures in TD CMF.
 *
 * @package    tdCorePlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class tdRandomDataGenerator
{
  /**
   * All letters.
   *
   * @var string
   */
  private $alphabet = "abcdefghijklmnopqrstuvwxyz";

  /**
   * All digits.
   *
   * @var string
   */
  private $numeric = "0123456789";

  /**
   * All digits and letters.
   *
   * @var string 
   */
  private $alphanumeric = "0123456789abcdefghijklmnopqrstuvwxyz";

  /**
   * Some sample top level domains.
   *
   * @var array
   */
  private $tlds = array("com","net","gov");

  /**
   * Some random names.
   *
   * @var array
   */
  private $names = array(
  'Aligator Teacher',
  'Aligatormiser',
  'Aspirinmentalist',
  'Bullfrog Killer',
  'Carbohydratemistress',
  'Carbohydratesmith',
  'Cariboumentalist',
  'Crawdad Supervisor',
  'Crayon Jouster',
  'Dirt Warrior',
  'Gluesmith',
  'Noodle Thumper',
  'Otter Supervisor',
  'Ottermancer',
  'Rattlesnake Pummeler',
  'Salamander Trampler',
  'Skinkmiser',
  'Snark Herder',
  'Stuff Kicker',
  'Tape Conjurer',
  'Toffeeologer',
  'Troutmaster',
  'Turtlemiser',
  'Vibe Criminal',
  'Vulturementalist',
  'Alytesi',
  'Berod',
  'Besstu',
  'Darab',
  'Diopaiappu',
  'Eian',
  'Fasaus',
  'Fasich',
  'Harichy',
  'Hytiusep',
  'Iasi',
  'Joclusad',
  'Joneum',
  'Jotholialer',
  'Lclcamusthe',
  'Mesotopus',
  'Nusmus',
  'Pheis',
  'Sionerotile',
  'Sipprthu',
  'Thalear',
  'Vianda',
  'Xedipartam',
  'Xytoneus',
  'Yllia',
);

  /**
   * Class constructor.
   */
  public function __construct()
  {
    mt_srand((double)microtime() * 1000000);
  }

  /**
   * Generates random name.
   *
   * @return string generated E-mail address.
   */
  public function getRandomName()
  {
    return $this->names[mt_rand(0,count($this->names)-1)];
  }

  /**
   * Generates random E-mail address.
   *
   * @return string generated E-mail address.
   */
  public function getRandomEmail()
  {
    $ulen = mt_rand(3, 8);
    $dlen = mt_rand(6, 15);
    $result = "";
    for ($i = 1; $i <= $ulen; $i++)
      $result .= substr($this->alphanumeric, mt_rand(0, strlen($this->alphanumeric)), 1);
    $result .= "@";
    for ($i = 1; $i <= $dlen; $i++)
      $result .= substr($this->alphanumeric, mt_rand(0, strlen($this->alphanumeric)), 1);
    $result .= ".";
    $result .= $this->tlds[mt_rand(0, (sizeof($this->tlds) - 1))];
    return $result;
  }

  /**
   * Generates random HTTP address.
   *
   * @return string generated HTTP address.
   */
  public function getRandomHttp()
  {
    $ulen = mt_rand(3, 8);
    $result = "www.";
    for ($i = 1; $i <= $ulen; $i++)
      $result .= substr($this->alphanumeric, mt_rand(0, strlen($this->alphanumeric)), 1);
    $result .= ".";
    $result .= $this->tlds[mt_rand(0, (sizeof($this->tlds) - 1))];
    return $result;
  }

  /**
   * Generates random text of given length.
   *
   * @param integer $length length of generated text.
   * @return string generated text.
   */
  public function getRandomText($length)
  {
    $result = strtoupper($this->alphabet[mt_rand(0, strlen($this->alphabet)-1)]);
    $space = true;
    for ($i = 1; $i < $length; $i++)
      if (!$space && !mt_rand(0,5))
      {
        if (mt_rand(0,3) + mt_rand(0,3))
        {
          $result .= " ";
        } else {
          $result .= ". ".strtoupper($this->alphabet[mt_rand(0, strlen($this->alphabet)-1)]);
          $i+=2;
        }
        $space = true;
      } else {
        $result .= $this->alphabet[mt_rand(0, strlen($this->alphabet)-1)];
        $space = false;
      }
    return $result;
  }

  /**
   * Generates random IP address.
   *
   * @return string IP address.
   */
  public function getRandomIP()
  {
    return mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255).'.'.mt_rand(0,255);
  }

  /**
   * Generates random browser agent.
   *
   * @return string browser agent.
   */
  public function getRandomAgent()
  {
    switch (mt_rand(0,9))
    {
      case 0: case 1: case 2: case 3: return 'Firefox';
      case 4: case 5: case 6: return 'Internet Explorer';
      case 7: case 8: return 'Opera';
      case 9: return 'Safari';
    }
  }

  /**
   * Generates random created_at (timestampable) value.
   *
   * @param integer $year year of the timestamp
   * @return string created_at as a string
   */
  public function getRandomCreatedAt($year)
  {
    return
      '\''.
      $year.
      '-'.
      sprintf("%02d", mt_rand(1,12)).
      '-'.
      sprintf("%02d", mt_rand(1,28)).
      ' '.
      sprintf("%02d", mt_rand(0,23)).
      ':'.
      sprintf("%02d", mt_rand(0,59)).
      ':'.
      sprintf("%02d", mt_rand(0,59)).
      '\'';
  }
}
?>