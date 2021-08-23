<?php

trait Hello {
    function sayHello() {
        echo "Hello";
    }
}

trait World {
    function sayWorld() {
        echo "World";
    }
}

trait HelloWorld {
    use Hello, World;

    function sayHelloWorld() {
        $this->sayHello() . " " . $this->sayWorld();
    }
}

class MyWorld {
    use HelloWorld;
}

(new MyWorld())->sayHelloWorld();