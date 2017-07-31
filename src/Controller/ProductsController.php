<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class ProductsController extends AppController{

public function beforeFilter(Event $event){
  parent::beforeFilter($event);
  $this->Auth->allow(array('addproduct','product','brand'));
}

public function product(){
$id=$_GET['id'];
$data=$this->Products->get($id);
$this->set('data',$data);
$bid=$data['bid'];
$Brands = TableRegistry::get('Brands');
$query = $Brands->find()->where(['id'=>$bid])->toArray();
$brandname = $query[0]['bname'];
$this->set('brand',$brandname);

}
public function addproduct(){

   $product=$this->Products->newEntity();
 if($this->request->is('post')){
     $image=$_FILES['imgname'];
     $name=$image['name'];
     $tmp_name = $image['tmp_name'];
     $dir=WWW_ROOT."img/";
     $name=time()."_".$name;
     $this->request->data['imgname']=$name;
     move_uploaded_file($tmp_name,$dir.$name);
     $product= $this->Products->patchEntity($product,$this->request->data);
     if($this->Products->save($product)){
       $this->Flash->success('good');
       $this->redirect('/home');
     }else{
      $this->Flash->error('bad');
 }
}
}
public function brand(){
$Brands = TableRegistry::get('Brands');
$data = $Brands->find('all')->toArray();
$this->set('brand',$data);
}
}

 ?>
