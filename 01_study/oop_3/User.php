<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function selfIntroduction()
    {
        return "私の名前は" . $this->name . "です\n" .
               "私の年齢は" . $this->age . "です\n";
    }
}