<?php
class MyClass {
    private $data = [];

    public function __set($name, $value) {
        echo " <br> Setting value <br> $value to property $name.\n";
        $this->data[$name] = $value;
    }

   
    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            echo "Property $name is not set.\n";
        }
    }

    public function __call($name, $arguments) {
        
        echo " <br>Calling method <br> $name with arguments: " . implode(", ", $arguments) . "\n";
    }
}


$obj = new MyClass();

// __set() 
$obj->name = "Menna";  
echo $obj->name . "\n"; 

// __call() 
$obj->greet("Hello", "World");  
?>
