<?= $this->Form->create()  ?>
  <?= $this->Form->input('uemail',array('class'=>'form-control'))  ?>
  <?= $this->Form->input('upassword',array('class'=>'form-control','type'=>'password'))?>
  <?= $this->Form->button('Submit',array('class'=>'btn submit'))  ?>
<?= $this->Form->end()?>
<div class="caccount">
  <?= $this->Html->link('Create an account?',array('controller'=>'Users','action'=>'register'))  ?>
</div>
