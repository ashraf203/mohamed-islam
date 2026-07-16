<?php

class message
{
    public $message;

    public function openchat()
    {
        echo "open chat <br>";
        return $this;
    }

    public function send()
    {
        echo $this->message . '<br>';
    }

    public function closechat()
    {
        echo "close chat <br>";
    }
}

$student = new message;
$student->message = "task 2 complete";
// $student->openchat();
// $student->send();
// $student->closechat();
$student->openchat()->send();
