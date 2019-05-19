<?php

require 'vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performQuack();
$model->performFly();

$model->setFlyBehavior(new FlyWithWings());
$model->performFly();