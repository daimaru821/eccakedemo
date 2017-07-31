<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
class User extends Entity{
  protected $_accessible=['id'=>false, '*'=>true];

  protected function _setUpassword($value)
  {
    $hasher = new DefaultPasswordHasher();
    return $hasher->hash($value);
  }

}
