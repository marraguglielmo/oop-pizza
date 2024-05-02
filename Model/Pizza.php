<?php
class Pizza
{
    public $nome;
    public $prezzo;
    public $ingredienti;
    public $sconto;
    public $finalPrice;

    public function __construct(string $_nome, float $_prezzo, array $_ingredienti, int $_sconto = 0)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->ingredienti = $_ingredienti;
        $this->sconto = $_sconto;
        $this->finalPrice = $this->getFinalPrice();
    }

    public function getFullInfo()
    {
        // metto echo invece di return
        echo "$this->nome, &euro;$this->prezzo";
    }

    private function getFinalPrice()
    {
        // calcolo il prezzo finale in base allo sconto e lo restituisco
        // return 
    }
}
