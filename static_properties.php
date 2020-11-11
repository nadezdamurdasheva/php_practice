<?php
class pi {
  protected static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
//echo x::$value; ------ ERROR, because it's like when we declare protected value in public field
                        //and we can't do like this

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>