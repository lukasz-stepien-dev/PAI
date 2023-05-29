<?php

class Product
{
    private $netto;
    private $vat = 23;
    public function __construct(private string $name, private int|float $brutto)
    {
        /*
         * PHP 8 automatycznie tworzy i zdefiniuje właściowości:
         * $this->$name = $name
         * $this->$brutto = $brutto
         */
        $this->netto = $this->setNetto();
    }
    public function printProduct()
    {
        printf(
            "Produkt: %s".PHP_EOL."Cena netto: %.2f PLN".PHP_EOL.
            "Podatek: %.2f %%".PHP_EOL."Ceno brutto: %.2f PLN",
            $this->name,
            $this->netto,
            $this->vat,
            $this->brutto
        );
    }

    /**
     * @param null $netto
     */
    private function setNetto(null $netto): void
    {
        $this->netto = $netto;
    }
}

$fruit = new Product(name: "Pear", brutto: 4.85);
echo $fruit->printProduct();