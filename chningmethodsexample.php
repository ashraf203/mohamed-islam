<?php


class car
{
    public $color;

    public function increaseBlack()
    {
        $this->color .= " + black";
        return $this;
    }

    public function increasewite()
    {
        $this->color .= " + white";
        return $this;
    }
}

$bmw = new car;
$bmw->color = 'blue';
// $bmw->increaseBlack()->increaseBlack()->increaseBlack();
// echo $bmw->color;

// $bmw->increaseBlack()->increaseBlack()->increaseblack()->color;
