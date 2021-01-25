<?php

interface SegiEnam{
    public function hitung($sisi);
}

    
class luas implements SegiEnam{
    public function hitung($sisi){
        $phi=1.73205;
        $dua=2/3;
        $hasil = $dua * $phi*$sisi*$sisi;
        Echo "Luas Segi Enam adalah : ". $hasil;
    }
}
   


class keliling implements SegiEnam{
    public function hitung($sisi){  
        $hasil =6*$sisi;
        Echo "Keliling Segi Enam adalah : ". $hasil;
    }
    
}

    class hitung
    {
        public static function pilihan($pilihan){
        switch ($pilihan) {
            case 'luas':
                return new luas;
                break;
            case 'keliling':
                return new keliling;
                break;
            default:
                return FALSE;
        }
    }
}

$sisi=25;
hitung::pilihan('luas')->hitung($sisi);
echo '<br>';
hitung::pilihan('keliling')->hitung($sisi);

?>