<?php

namespace Veiw;

require_once 'index.php';

interface Adress{
  public function __construct();
  public function __destructor();
  public function getIndex();
  public function getCountry();
  public function getCity();
  public function getStreet();
  public function getHouse();
}


class MailAdress implements Adress {
  private $index;
  private $country;
  private $city;
  private $street;
  private $house;

  public function __construct(){
    echo 'Adress: <br/><br/>';
    $this ->index = '344065';
    $this ->country = 'Russia';
    $this ->city = 'Rostov-on-Don';
    $this ->street = 'Lenina';
    $this ->house = '666';
  }

  public function __destructor(){
    echo 'Поля уничтожены';
  }

  public function getIndex(){
    echo 'Индекс: '.$this->index.'<br/>';
    
  }

  public function getCountry(){
    echo 'Страна:'.$this->country.'<br/>';
  }

  public function getCity(){
    echo 'Город: '.$this->city.'<br/>';
  }

  public function getStreet(){
    echo 'Улица: '.$this->street.'<br/>';
  }

  public function getHouse(){
    echo 'Дом: '.$this->house.'<br/>';
  }

}
?>