<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

class UsersTable extends Table{
  public function initialize (array $config){
    Parent::initialize ($config);
    $this->setTable('users');
    $this->setPrimaryKey('id');
    $this->setDisplayField('id');
  }
  public function buildRules(RulesChecker $rules){
    $rules->add($rules->isUnique(['uemail']));
    $rules->add($rules->isUnique(['upassword']));
    return $rules;
  }
  public function validationDefault(Validator $validator){
    $validator
              ->allowEmpty('id','create')
              ->integer('id');
    $validator
              ->notEmpty('name')
              ->requirePresence('name');
    $validator
              ->notEmpty('uname')
              ->requirePresence('uname');
    $validator
              ->notEmpty('uemail')
              ->requirePresence('uemail');
    $validator
               ->notEmpty('upassword')
               ->requirePresence('upassword')
               ->lengthBetween('upassword',[6,12],'password between 6 to 12');
    return $validator;


  }
}

 ?>
