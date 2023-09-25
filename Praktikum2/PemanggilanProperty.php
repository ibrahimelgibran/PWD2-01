<?php   
class Mahasiswa {
    protected $nama = "iqbal rizqi maulana";

    public function paksa_nama(){
        return $this->nama;
    }

    public function lakukan_krs(){
        return "Lakukan pengisian KRS";
    }

    public function paksa_krsan(){
        return $this->lakukan_krs();
    }
}

$mhs1 = new Mahasiswa();
echo $mhs1->paksa_krsan();
echo $mhs1->paksa_nama();
?>