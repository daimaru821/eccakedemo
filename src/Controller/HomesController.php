<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class HomesController extends AppController{
  public function beforeFilter(Event $event){
    parent:: beforeFilter($event);
    $this->Auth->allow(array('home'));
  }
  public function home(){
    $this->loadModel('Products');
    $data = $this->Products->find('all')->toArray();
    $this->set('pdata',$data);
  }
}

 ?>
