<div class="">
<h1><?= $data['pname']?></h1>
</div>
<div class="row">
 <div class="col-md-7">
  <?= $this->Html->image($data['imgname'],['class'=>'pimage'])  ?>
 </div>
 <div class="col-md-5">
<h4><?= $data['pname']?></h4>
<span　class="price">$<?= $data['price']?></span><br>
<button type="button" class="btn addbtn" name="button">Add to Cart</button><br>
<?= $data['pdetail'] ?><br>
Brand:<a><?php echo $brand;?></a><br>
Category:<a>Main</a>
 </div>
</div>
