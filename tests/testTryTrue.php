<?php
//test if true is true ;)

class TryTrue extends PHPUnit_Framework_TestCase{
  
  public function testTrueAssertion(){

                 $this->assertEquals(true, true);
  }
  
  public function testForDigit(){
    
    $this->assertEquals(1, 1);
  }

}
