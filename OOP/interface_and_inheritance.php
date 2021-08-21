<?php

interface I {
	function F1();
	function F2();
	function F3();
}

class A implements I {
	function F1() {
		echo "F1";
	}
	function F2() {
		echo "F2";
	}		
}

class B extends A {
	function F3() {
		echo "F3";
	}	
}

$objB = new B();
$objB.F1();