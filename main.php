<!DOCTYPE html>
<html> <?php

    require_once 'partTime.php';
    require_once 'fullTime.php';
    $pegawai = array();
    $nama_arr = array("manok", "mahran", "ryu" , "hyo", "tzu");
    $gender_arr =array("pria", "pria", "wanita", "wanita", "wanita");
    $tempatLahir_arr = array("Indonesia", "India", "Korea", "Indonesia","Indonesia");
    $tanggalLahir_arr = array("03-06-2001", "03-07-2001", "03-08-2001","13-06-2001","23-06-2001");
    $level_arr = array("junior", "amateur", "senior", "junior", "amateur");
    
    for( $i = 0 ; $i < 5 ; $i++){
        if ($i%2 == 0){
            $pegawai[$i] = new fullTime();
            $pegawai[$i]->setNama($nama_arr[$i]);
            $pegawai[$i]->setGender($gender_arr[$i]);
            $pegawai[$i]->setTempatLahir($tempatLahir_arr[$i]);
            $pegawai[$i]->setTanggalLahir($tanggalLahir_arr[$i]);
            $pegawai[$i]->setLevel($level_arr[$i]);
        } else {
            $pegawai[$i] = new partTime();
            $pegawai[$i]->setNama($nama_arr[$i]);
            $pegawai[$i]->setGender($gender_arr[$i]);
            $pegawai[$i]->setTempatLahir($tempatLahir_arr[$i]);
            $pegawai[$i]->setTanggalLahir($tanggalLahir_arr[$i]);
            $pegawai[$i]->setLevel($level_arr[$i]);
        }
        $pegawai[$i]->setStatus();
        $pegawai[$i]->hitungGaji();
       
    }

?> <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Praktikum Pemrograman Web</title>
    <link rel="stylesheet" href="settings.css">
    <style>
      table {
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        border-spacing: 5;
        width: 50%;
        border: 1px solid #ddd;
      }

      th,
      td {
        text-align: left;
        padding: 16px;
      }

      tr:nth-child(even) {
        background-color: #f9cb9c;
      }

      button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #acceac;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

      button:hover {
        background-color: #ffe599
      }

      button:active {
        background-color: #ffe599;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
      }

      .container {
        height: 200px;
        position: relative;
      }

      .verticalcenter {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }

      html {
        background-color: #a8b9bc
      }
    </style>
  </head>
  <body>
    <nav class="container">
      <div class="verticalcenter"> Nama : Mahran Radifan Zhafir <br> Nim : 105219001 <br>
        <form action="Main.php" method="post">
          <button class="button1" name="button" type="submit" value="All">All</button>
          <button class="button2" name="button" type="submit" value="full time">Full Time</button>
          <button class="button3" name="button" type="submit" value="part time">Part Time</button>
        </form>
      </div>
    </nav>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Level Karyawan</th>
        <th>Status</th>
        <th>Gaji Karyawan</th>
      </tr> <?php
            if( isset( $_POST['button'] ) ) {
            $input = $_POST["button"];
            for($i = 0; $i < 5; $i++) {
                if( $pegawai[$i]->getStatus() == $input || $input == "All" ) {?> <tr>
        <td> <?php echo $i+1 ?> </td>
        <td> <?php echo $pegawai[$i]->getNama() ?> </td>
        <td> <?php echo $pegawai[$i]->getTempatLahir()?> <br> <?php echo $pegawai[$i]->getTanggalLahir()?> </td>
        <td> <?php echo $pegawai[$i]->getGender() ?> </td>
        <td> <?php echo $pegawai[$i]->getStatus() ?> </td>
        <td> <?php echo $pegawai[$i]->getLevel() ?> </td>
        <td> <?php echo $pegawai[$i]->getHitungGaji() ?> </td>
      </tr> <?php
            }}} ?>
    </table>
  </body>
</html>