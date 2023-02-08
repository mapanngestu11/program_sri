<html>

<head>
    <title>Laporan Pegawai</title>
</head>

<body>
    <center>
        <img src="<?php echo base_url() . "assets/"; ?>img/kop.png">
    </center>

    <?php $tanggal = date('d-F-Y'); ?>

    <style>
        .laporan {
            text-align: right;
            padding-right: 30px;
        }

        .Slip-gaji {
            font-weight: bold;
            text-align: center;
            font-size: 20px;
        }

        .penghasilan {
            margin-left: 60px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: -5px;
        }

        .potongan {
            margin-left: 60px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: -5px;
        }

        .tabel {
            margin-left: 50px;
            font-size: 14px;
            padding: 10px;
        }
        .total_gaji{
           font-size: 14px;
           font-weight: bold;
           margin-bottom: -5px;   
           margin-left: 60px;
       }
   </style>
   <?php
   $no = 0;
   foreach ($pegawai  as $row) :

    $no++;
    $kode_pegawai = $row->kode_pegawai;
    $nama         = $row->nama;
    $jabatan      = $row->jabatan;
    $gaji_pokok   = $row->gaji_pokok;
    $uang_transport = $row->uang_transport;
    $uang_makan     = $row->uang_makan;
    $uang_rajin     = $row->uang_rajin;
    $lembur         = $row->lembur;
    $bpjs_jht       = $row->bpjs_jht;
    $bpjs_jkk       = $row->bpjs_jkk;
    $bpjs_jkm       = $row->bpjs_jkm;
    $bulan          = $row->bulan;
    $total_penghasilan = ($gaji_pokok + $uang_transport + $uang_makan + $uang_rajin + $lembur + $bpjs_jht + $bpjs_jkk + $bpjs_jkm);
        // 
    $cuti           = $row->cuti;
    $potongan_bpjs_jht  = $row->potongan_bpjs_jht;
    $potongan_bpjs_kantor = $row->potongan_bpjs_kantor;
    $total_potongan = ($cuti + $potongan_bpjs_jht + $potongan_bpjs_kantor);

    $total_gaji    = ($total_penghasilan - $total_potongan);


    if ($bulan == 1) {
     $bulan = "januari";
 }elseif($bulan == 2){
    $bulan = "februari";
}

?>
<p class="laporan">Tangerang , <?php echo $tanggal ?></p>
<p class="slip-gaji">DATA SLIP GAJI</p>
<div class="container">
    <div class="row">
        <table class="tabel">
            <tr>
                <td>Kode Pegawai</td>
                <td>:</td>
                <td><?php echo $kode_pegawai ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan ?></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?php echo $bulan ?></td>
            </tr>
        </table>
    </div>
</div>
<p class="penghasilan">Penghasilan</p>
<div class="container">
    <table class="tabel" width="100%">
        <tr>
            <td style="width: 2px;">1.</td>
            <td style="width: 50px;">Gaji Pokok</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($gaji_pokok); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">2.</td>
            <td style="width: 50px;">Uang Transport</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($uang_transport); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">3.</td>
            <td style="width: 50px;">Uang Makan</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($uang_makan); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">4.</td>
            <td style="width: 50px;">Uang Rajin</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($uang_rajin); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">5.</td>
            <td style="width: 50px;">Uang Lembur</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($lembur); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">6.</td>
            <td style="width: 50px;">BPJS JHT</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($bpjs_jht); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">7.</td>
            <td style="width: 50px;">BPJS JKK</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($bpjs_jkk); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">8.</td>
            <td style="width: 50px;">BPJS JKM</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($bpjs_jkm); ?></td>
        </tr>
        <tr>
            <td colspan="2">Total Penghasilan</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;" style="font-weight: bold;"><strong><?php echo  number_format($total_penghasilan); ?></strong></td>
        </tr>
    </table>
</div>
<br>
<p class="potongan">Potongan</p>
<div class="container">
    <table class="tabel" width="100%">
        <tr>
            <td style="width: 2px;">1.</td>
            <td style="width: 50px;">Uang Cuti</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($cuti); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">2.</td>
            <td style="width: 50px;">Pembayaran BPJS JHT</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($potongan_bpjs_jht); ?></td>
        </tr>
        <tr>
            <td style="width: 2px;">3.</td>
            <td style="width: 50px;">Pembayaran BPJS (Di Kantor)</td>
            <td style="width: 2px;">:</td>
            <td style="width: 20px;">Rp.<?php echo  number_format($potongan_bpjs_kantor); ?></td>
        </tr>
    </table>
</div>
<br>
<p class="total_gaji">Total Gaji</p>
<div class="container">
    <table class="tabel" width="100%">
      <tr>
        <td style="width: 50px;">Total Gaji</td>
        <td style="width: 2px;">:</td>
        <td style="width: 20px;"><strong>Rp.<?php echo  number_format($total_gaji); ?></strong></td>
    </tr>
</table>



<?php endforeach; ?>
</body>


<script>
    window.print();
</script>

</html>