<?php
/**
 * Created by PhpStorm.
 * User: jetaimefrc
 * Date: 01/07/2018
 * Time: 15:10
 */

class Human
{
  var $name;
  var $age;
 protected  $address;
  /**
   * Human constructor.
   *
   * @param $name
   * @param $age
   */
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getAge()
  {
    return $this->age;
  }

  /**
   * @param mixed $age
   */
  public function setAge($age)
  {
    $this->age = $age;
  }

  function born()
  {
    echo $this->getName() . " + " . $this->getAge();
  }
}

class  Nhat extends Human
{
  function setProperties(){
    $this->address
    parent::born();
  }
}

$nhat = new Nhat("Tran Quang Nhat", 20);
$nhat->setProperties();
