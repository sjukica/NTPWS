<?php

class Kocka
{
    public $duljina;
    public $visina;
    public $sirina;

    public function volumen()
    {
        $volumen = $this->duljina * $this->visina * $this->sirina;
        return $volumen;
    }
}

$kocka1 = new Kocka;
$kocka2 = new Kocka;

$kocka1->sirina = 1110;
$kocka1->visina = 12;
$kocka1->duljina = 13;

$kocka2->sirina = 120;
$kocka2->visina = 12;
$kocka2->duljina = 13;

function usporedba(Kocka $kocka1, Kocka $kocka2)
{
    if ($kocka1->volumen() > $kocka2->volumen()) {
        echo "vratio sam 1";
        return $kocka1;

    } else {
        echo "vratio sam 2";
        return $kocka2;

    }
}

usporedba($kocka1, $kocka2);

?>