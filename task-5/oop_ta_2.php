<?php 
class Circle {
    private float $radius;

   
    public function __construct(float $radius = 1.0) {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
    public function __toString(): string {
        return "Circle[radius={$this->radius}]";
    }
}
echo"<br>******************circle*******************<br>";
$circle = new Circle(5.0);
echo "Circle radius: " . $circle->getRadius(),"<br>" ;
echo "Circle area: " . $circle->getArea() ,"<br>";
echo $circle ,"<br>";


class Cylinder extends Circle {
    private float $height;

    public function __construct(float $radius = 1.0, float $height = 1.0) {
 
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height): void {
        $this->height = $height;
    }

    public function getVolume(): float {
        return $this->getArea() * $this->height; 
    }
    public function __toString(): string {
        return "Cylinder[" . parent::__toString() . ", height={$this->height}]";
    }
}
echo"<br>******************cylinder*******************<br>";
$cylinder = new Cylinder(3.0, 7.0);


echo "Cylinder radius: " . $cylinder->getRadius(),"<br>" ;
echo "Cylinder height: " . $cylinder->getHeight() ,"<br>";

echo "Cylinder base area: " . $cylinder->getArea() ,"<br>" ;
echo "Cylinder volume: " . $cylinder->getVolume() ,"<br>";

echo $cylinder ,"<br>" ;

?>