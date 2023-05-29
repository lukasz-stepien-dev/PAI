<?php
class Engine
{
    private $horsepower;
    private $torque;
    private $fuel;

    /**
     * @param mixed $horsepower
     */
    public function setHorsepower($horsepower): void
    {
        $this->horsepower = $horsepower;
    }

    /**
     * @return mixed
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }
}
class Car
{
    private $engine;
    public function __construct(
        private string $brand,
        private string $model,
        int|float $horsepower
    )
    {
        $this->engine = new Engine();
        $this->engine->setHorsepower($horsepower);
    }

    public function printCar()
    {
        echo "Parametry samochodu:".PHP_EOL;
        echo "Marka: ".$this->brand.PHP_EOL;
        echo "Model: ".$this->model.PHP_EOL;
        echo "Moc silnika: ".$this->engine->getHorsepower()." KM";
    }
}

$car = new Car(brand: "Syrena", model: "S-31", horsepower: 45);
$car->printCar();