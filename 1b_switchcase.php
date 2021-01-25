<?php
class SegiEnam{
    
    public $phi;

    public function __construct($phi=1.73205){
        $this->phi = $phi;
    }

    public function luasSegiEnam($sisi){
        Echo "Luas Segi Enam adalah : ". 2/3*$this->phi*$sisi*$sisi;
    }

    public function kelilingSegiEnam($sisi){
        Echo "Keliling Segi Enam adalah : ". 6*$sisi;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function hitung($pilihan, $sisi)
    {
        switch ($pilihan) {
            case 'luas':
                $this->luasSegiEnam($sisi);
                break;
            case 'keliling':
                $this->kelilingSegiEnam($sisi);
                break;
            default:
            $this->noChoice($sisi);
        }
    }
}

$sisi=25;
$pilihan = new SegiEnam;
$pilihan->hitung('keliling',$sisi);

?>