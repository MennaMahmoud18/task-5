<?php 

namespace App;

class Person {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

namespace App;

class Student extends Person {
    private string $program;

    public function __construct(string $name, string $program) {
        parent::__construct($name);
        $this->program = $program;
    }

    public function getProgram(): string {
        return $this->program;
    }

    public function getInfo(): string {
        return "Student: {$this->getName()}, Program: {$this->program}";
    }
}

use App\Person;
use App\Student;


$person = new Person("Menna Mahmoud");
echo "Person Name: " . $person->getName() ;
echo"<br>,<br>";
$student = new Student("Mai tarek", "Computer Science");
echo $student->getInfo() ;
?>