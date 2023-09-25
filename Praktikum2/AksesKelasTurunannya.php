<?php
class Mahasiswa {
    protected $nama = "iqbal rizqi maulana";
    
    public function getNama() {
        return $this->nama;
    }
}

class Anak extends Mahasiswa
{
    public function show_name(){
        return $this->getNama();
    }
}

$anak1 = new Anak();
echo $anak1->show_name();
?>