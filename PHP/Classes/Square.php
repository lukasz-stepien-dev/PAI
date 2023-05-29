<?php
class Square
{
    private $area;
    private $circuit;
    public function __construct(int|float $side)
    {
        $this->area = $side * $side;
        $this->circuit = 4 * $side;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return mixed
     */
    public function getCircuit()
    {
        return $this->circuit;
    }
}
$side = 12.5;
$square = new Square(side: $side);
$area = $square->getArea();
$circuit = $square->getCircuit();
echo $square->getArea();
echo $square->getCircuit();
printf("Pole kwadratu o boku %.2f wynosi %.2f".PHP_EOL, $side, $area);
printf("Obwód kwadratu o boku %.2f wynosi %.2f".PHP_EOL, $side, $circuit);