<?= $this->Form->create(null,['enctype'=>'multipart/form-data'])  ?>
<?= $this->Form->input('bid')  ?>
<?= $this->Form->input('pname')  ?>
<?= $this->Form->input('price')  ?>
<?= $this->Form->input('pdetail')  ?>
<?= $this->Form->input('imgname',['type'=>'file'])  ?>
<?= $this->Form->button('Submit')  ?>
<?= $this->Form->end();  ?>
