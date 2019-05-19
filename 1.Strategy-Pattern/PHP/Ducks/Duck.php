<?php


abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    abstract public function display();

    public function swim()
    {
        echo "";
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}