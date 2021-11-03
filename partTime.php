<?php
require_once "karyawan.php";

class partTime extends karyawan
{
    private $level;
    private $status;
    private $gajiKaryawan;

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus()
    {
        $this->status = "part time";
    }
    public function hitungGaji()
    {
        switch ($this->level) {
            case "junior":
                $this->gajiKaryawan = 2000000;
                if (strcmp($this->status, "part time") == 0) {
                    $this->gajiKaryawan = $this->gajiKaryawan / 2;
                }
                break;
            case "amateur":
                $this->gajiKaryawan = 3500000;
                if (strcmp($this->status, "part time") == 0) {
                    $this->gajiKaryawan = $this->gajiKaryawan / 2;
                }
                break;
            case "senior":
                $this->gajiKaryawan = 5000000;
                if (strcmp($this->status, "part time") == 0) {
                    $this->gajiKaryawan = $this->gajiKaryawan / 2;
                }
                break;
        }
    }

    public function getHitungGaji(): int
    {
        return $this->gajiKaryawan;
    }
}

?>
