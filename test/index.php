<?php

 abstract class A {
    abstract public function printIt($text);
  }
  
  abstract class B extends A {
    protected function getText() {
      return "class B";
    }
  }
  
  class C extends B {
    public function printIt($a) {
      echo $this->getText();
    }
  }
  
  $a = new A();
  $a->printIt('1');
  