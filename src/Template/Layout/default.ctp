<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
　　<?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this ->Html->css('style.css')  ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample7">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?=$this->Html->image('misaologo.png',array("id"=>"logo")) ?>
        </div>

        <div class="collapse navbar-collapse" id="navbarEexample7">
          <ul class="nav navbar-nav" id="mylist">
            <li id="title"><?= $this->Html->link('Misao Demo shopping cart',array('controller'=>'pages','action'=>'home')) ?></li>
            <li><?= $this->Html->link('Home',array('controller'=>'homes','action'=>'home')) ?></li>
            <li><?= $this->Html->link('Products',array('controller'=>'pages','action'=>'navli')) ?></li>
            <li><?= $this->Html->link('Brands',array('controller'=>'products','action'=>'brand')) ?></li>
            <li><?= $this->Html->link('Categories',array('controller'=>'pages','action'=>'navli')) ?></li>
            <li><?= $this->Html->link('Login',array('controller'=>'users','action'=>'login')) ?></li>
          </ul>
        </div>
      </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <center>
    <div class="alert">
      <p class="atext">THIS IS A MISAO DEMO E-COMMERCE WEBSITTE WITH CAKEPHP !</p>
    </div>
  </center>
    <footer>
      <div class="footer">
        <?= $this->Html->link('Misao Demo Shopping Cart',array('controller'=>'pages'))  ?><br>
        <?= $this->Html->Link('www.misaodemoshoppingcart.com ',array('controller'=>'pages'))  ?>
        <p>© 2017 misao-it.com </p>
      </div>
    </footer>
</body>
</html>
