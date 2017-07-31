<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefoultPasswordHasher;
class Product extends Entity{
  protected $_accessible=['id'=>false,'*'=>true];
}



 ?>
