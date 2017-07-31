<?= $this->Form->create($u,array('enctype'=>'multipart/form-data'))  ?>
  <?= $this->Form->input('name',array('class'=>'form-control'))  ?>
    <?= $this->Form->input('uname',array('class'=>'form-control'))  ?>
  <?= $this->Form->input('uemail',array('class'=>'form-control'))  ?>
  <?= $this->Form->input('upassword',array('class'=>'form-control'))?>
  <?= $this->Form->input('uploadfile',array('type'=>'file'))?>
  <?= $this->Form->button('Submit',array('class'=>'btn'))  ?>
<?= $this->Form->end()?>
