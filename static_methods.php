<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class mainclass {
    protected static function getMainName() {
        return "Hello, world, my dear";
    }
}

class subclass extends mainclass {
    public $variableSubclass;
    public $variableSubclass2;
    public function __construct() {
        $this -> variableSubclass = parent::getMainName();
        $this ->  variableSubclass2 = "21";
    }
}
$subclassObj = new subclass();
echo $subclassObj -> variableSubclass;
echo $subclassObj -> variableSubclass2;
?>
</body>
</html>