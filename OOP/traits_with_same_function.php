<?php

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }    
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }    
}

class Talker {

    //try uncommenting this - and comment the statement after this
    // use A, B;

    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

$obj = new Talker();
$obj->smallTalk();
$obj->bigTalk();