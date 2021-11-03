<?php
abstract class karyawan
{
    private $nama;
    private $gender;
    private $tempatLahir;
    private $tanggalLahir;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setTempatLahir($tempatLahir)
    {
        $this->tempatLahir = $tempatLahir;
    }

    public function setTanggalLahir($tanggalLahir)
    {
        $this->tanggalLahir = $tanggalLahir;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getTempatLahir()
    {
        return $this->tempatLahir;
    }

    public function getTanggalLahir()
    {
        return $this->tanggalLahir;
    }
    abstract public function setStatus();
}

?>
