<?php

//access specifier can be - public/private/protected
abstract class Base {

    // can have class constant
    const VERSION = '1';

    var $version;

    // can have constructor
    public function __construct() {
        $this->version = self::VERSION;
        echo "This is abstract class constructor.\n";
    }

    //abstract method
    abstract function printdata();

    //concrete method
    function print() {
        printf("Base class Version: %d.\n", $this->version);
    }
}

class Derived extends Base {

    const VERSION = '2';

    // try commenting this
    public function __construct() {
        // parent::__construct();
        $this->version = self::VERSION;
        echo "This is derived class constructor.\n";
    }

    //abstract method implementation in derived class
    function printdata() {
        printf("Derived class Version: %d.\n", $this->version);
    }
}

$obj = new Derived;
$obj->print();
$obj->printdata();