<?php
abstract class Shape {
    private string $color;
    private bool $filled;

    public function __construct(string $color = "red", bool $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }


    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    
    abstract public function __toString(): string;
}

class Circle extends Shape {
    private float $radius;

  
    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
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

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

  
    public function __toString(): string {
        return "Circle[Shape[color={$this->getColor()}, filled={$this->isFilled()}], radius={$this->radius}]";
    }
}

class Rectangle extends Shape {
    private float $width;
    private float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[Shape[color={$this->getColor()}, filled={$this->isFilled()}], width={$this->width}, length={$this->length}]";
    }

  }

class Square extends Rectangle {

    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide(float $side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function __toString(): string {
        return "Square[Rectangle[Shape[color={$this->getColor()}, filled={$this->isFilled()}], width={$this->getWidth()}, length={$this->getLength()}]]";
    }
}


echo"<br********************circle**************************<br>";
$circle = new Circle(5.0, "blue", false);
echo $circle ;

echo"<br>" , "<br>";
echo"<br********************rectangle**************************<br>";
$rectangle = new Rectangle(4.0, 6.0, "green", true);
echo $rectangle ;

echo"<br>" , "<br>";
echo"<br********************square**************************<br>";
$square = new Square(3.0, "yellow", true);
echo $square ;
?>
