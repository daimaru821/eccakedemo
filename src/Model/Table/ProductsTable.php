<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
class ProductsTable extends Table{
  public function initialize(array $config){
  Parent::initialize ($config);

  $this->setTable('products');
  $this->setPrimaryKey('id');
  $this->setDisplayField('id');
  }
}
 ?>
