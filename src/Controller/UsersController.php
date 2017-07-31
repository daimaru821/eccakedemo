<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController{
  public function beforeFilter(Event $event){
    parent:: beforeFilter($event);
    $this->Auth->allow(array('register','login'));
  }

  public function register(){
    $user=$this->Users->newEntity();
    if($this->request->is('post')){
    $user=$this->Users->patchEntity($user,$this->request->data);
    if($this->Users->save($user)){
      $this->Flash->success('you can regist');
    }else{
      $this->Flash->error('you failed');
    }
  }
  $this->set('u',$user);
  }
      public function login(){
        $user=$this->Users->newEntity();
      if($this->request->is('post')){
      $user=$this->Auth->identify();
      if($user){
        $this->Flash->success('you can login');
        $this->request->session()->write('a',$this->request->data['uemail']);
        $this->request->session()->write('b',$this->request->data['upassword']);
        $this->request->session()->read('a');
        $this->request->session()->read('b');
        $this->redirect('/r');
      }else{
        $this->Flash->error('you failed to login');
      }
      }
      $this->set('aa',$user);
  }

}

 ?>
