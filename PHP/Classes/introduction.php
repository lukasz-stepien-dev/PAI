<?php
class Person
{
    private $name;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Car
{
    private $brand;
    private $color;

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}

$contact = new Person();
$contact->setName(name: "Robert");
echo $contact->getName().PHP_EOL;

$myCar = new Car();
$myCar->setColor("Black");
$myCar->setBrand("Audi");
echo $myCar->getBrand().PHP_EOL;
echo $myCar->getColor().PHP_EOL;