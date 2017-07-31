<div class="row topimage">
  <?= $this->Html->image('topimage1.jpg',['class'=>'img-responsive'])  ?>
</div>
  <div class="row">
    <?php foreach ($pdata as $img){ ?>
    <div class="col-md-3 product" style="height:250px;">
      <a href='<?php echo $this->Url->build(['controller'=>'Products','action'=>'product','id'=>$img['id']]) ?>'><?= $this->Html->image($img['imgname'],['class'=>'product']) ?><br>
      <?= $img['pname']  ?></a><br>
      <?= $img['price']  ?>
    </div>
  <?php } ?>

  </div>
