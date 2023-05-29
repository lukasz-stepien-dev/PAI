<?php

class Mammal
{
    private $eyesColor;

    /**
     * @param mixed $eyesColor
     */
    public function setEyesColor($eyesColor): void
    {
        $this->eyesColor = $eyesColor;
    }

    /**
     * @return mixed
     */
    public function getEyesColor()
    {
        return $this->eyesColor;
    }
}

class Dog extends Mammal
{
    private $rasa;

    /**
     * @param mixed $rasa
     */
    public function setRasa($rasa): void
    {
        $this->rasa = $rasa;
    }

    /**
     * @return mixed
     */
    public function getRasa()
    {
        return $this->rasa;
    }
}

$dog = new Dog();
$dog->setEyesColor(eyesColor: "brown");
$dog->setRasa(rasa: "Szpic pomorski");
echo "Mój pies".PHP_EOL;
echo "Rasa: ".$dog->getRasa().PHP_EOL;
echo "Kolor oczu: ".$dog->getEyesColor();
