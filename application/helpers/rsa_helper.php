<?php

class RsaDep
{
    public $n;
    public $m;
    public $kunciE;
    public $kunciD;

    public function __construct($p, $q)
    {
        $this->n = $p * $q;
        $this->m = ($p - 1) * ($q - 1);
        $this->kunciE = $this->temukankunciE($this->m);
        $this->kunciD = $this->temukanKunciD($this->kunciE, $this->m);
        // echo "nilai p = " . $p . "<br/>";
        // echo "nilai q = " . $q . "<br/>";
        // echo "nilai n = " . $this->n . "<br/>";
        // echo "nilai m = " . $this->m . "<br/>";
        // echo "kunciE  = " . $this->kunciE . "<br/>";
        // echo "kunciD = " . $this->kunciD . "<br/>";
        // die;
    }


    public function enkripsi($kalimat)
    {
        $chipper = "";
        for ($i = 0; $i < strlen($kalimat); $i++) {
            $part = ord($kalimat[$i]);
            $part = pow($part, $this->kunciE);
            $part2 = $part % $this->n;
            $chipper .= "," . $part2;
        }
        return substr($chipper, 1);
    }

    public function dekripsi($chipper)
    {
        $root = explode(",", $chipper);
        $result = "";
        foreach ($root as $item) {
            $part = bcpow($item * 1, $this->kunciD);
            $part = bcmod($part, $this->n);
            $part = chr($part);
            $result .= $part;
        }
        return $result;
    }

    //function
    public function toAssci($kalimat)
    {
        $cek = str_split($kalimat);
        $assci = "";
        foreach ($cek as $item) {
            $part = ord($item);
            $assci .= "," . $part;
        }
        return substr($assci, 1);
    }
    //function
    public function temukankunciE($m)
    {
        $kuncisem = null;
        for ($i = 2; $i < $m; $i++) {
            if ($this->cekPrima($i)) {
                if ($this->relativeprima($i, $m)) {
                    $kuncisem = $i;
                    break;
                }
            }
        }
        return $kuncisem;
    }
    //function

    public function temukankunciD($kunciE, $m)
    {
        $k = 1;
        $d = null;
        $ulang = true;
        do {
            $d = 1 + ($k * $m);
            if ($d % $kunciE == 0) {
                $ulang = false;
            }
            $d = $d / $kunciE;
            $k++;
        } while ($ulang);
        return $d;
    }
    //function

    public function relativeprima($i, $m)
    {
        if ($m % $i != 0) {
            $item1 = $i;
            $item2 = $m % $i;
            while ($item1 % $item2 != 0) {
                $item3 = $item1 % $item2;
                $item1 = $item2;
                $item2 = $item3;
            }
            if ($item2 == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //function
    public function cekPrima($bilangan)
    {
        $arr = [];
        for ($i = 1; $i <= $bilangan; $i++) {
            if ($bilangan % $i == 0)
                $arr[] = $i;
        }
        if (count($arr) == 2) {
            return true;
        } else {
            return false;
        }
    }
}
