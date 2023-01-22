<html>

<head>
    <title>Laporan Bulanan</title>
</head>

<body>
    <center>
        <img src="<?php echo base_url() . "assets/"; ?>img/kop.png">
    </center>

    <?php $tanggal = date('d-F-Y'); ?>

    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
      }

      tr:nth-child(even) {
          background-color: #dddddd;
      }
  </style>

  <p class="laporan">Tangerang , <?php echo $tanggal ?></p>
  <p class="slip-gaji">DATA LAPORAN BULANAN</p>
  <div class="container">
    <div class="row">
        <table class="tabel">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>

            </tr>
            <?php
            $no = 0;
            foreach ($laporan_bulan  as $row) :

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
                $total_penghasilan = ($gaji_pokok + $uang_transport + $uang_makan + $uang_rajin + $lembur + $bpjs_jht + $bpjs_jkk + $bpjs_jkm);
        // 
                $cuti           = $row->cuti;
                $potongan_bpjs_jht  = $row->potongan_bpjs_jht;
                $potongan_bpjs_kantor = $row->potongan_bpjs_kantor;


                ?>
                <tr>

                    <td><?php echo $kode_pegawai?></td>
                    <td><?php echo $nama?></td>
                    <td><?php echo $jabatan?></td>
                    <td>Rp.<?php echo number_format($total_penghasilan);?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


</body>


<script>
    window.print();
</script>

</html>