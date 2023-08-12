<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 
    foreach($setting as $p){ 
    ?>
<title>
    <?= $title; ?>
</title>
<link rel="icon" href="<?php echo base_url ($p->image); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/aset/cetak.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/aset/cetak_barang.css">
<link rel="stylesheet" type="text/css" media="print" href="<?php echo base_url() ?>assets/aset/media_print.css">
<style>
      h1 {
         text-align: center;
         font-family: Arial, Helvetica, sans-serif;
         font-weight: bold;
      }

      #laporan {
         font-family: Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
         font-size: 13px;
      }

      #laporan td,
      #laporan th {
         border: 1px solid #ddd;
         padding: 5px;
      }

      #laporan tr:nth-child(even) {
         background-color: #f2f2f2;
      }

      #laporan th {
         padding-top: 12px;
         padding-bottom: 12px;
         text-align: center;
         background-color: #4CAF50;
         color: white;
      }
      .kode{
         color: skyblue;
      }
   </style>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
<!-- <body onLoad="window.print();"> -->
<div class="page-landscape">

   <div class="nobreak">
   <table border="0" cellpadding="0" cellspacing="0" width="100%" class="table-header">
       <tbody><tr>
           <td width="120px" rowspan="6"><img src="<?php echo base_url ($p->image); ?>" width="70px"></td>
          <td colspan="4" align="center">
              <label class="headtitlekop" style="font-size: 15pt;"><?php echo $p->nama_app ?><br>
              <div style="font-size : 15pt;"><?php echo $p->nama_dinas ?></div>
             <div style="font-size : 13pt;"><?php echo $p->alamat ?></div></label>
             <label class="header_address">Kode Pos : <j class="kode"><?php echo $p->kode_pos ?></j>, Email : <j class="kode"><?php echo $p->email ?></j></label>
            </td>
            <!-- <td width="120px">
              <label style="margin-left: 70px;"><u>SALINAN</u></label><br><br>
              <table border="1" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td width="90px">K.1<br><br>NOMOR SERI</td>
                </tr>
              </tbody></table>
            </td> -->
       </tr>
   </tbody>
</table>
      <table width="100%" border="0">
         <tbody><tr>
            <td colspan="2">
               <hr class="hrKop">
            </td>
         </tr>
         <tr>
            <td colspan="2" class="judul">
               <br>
               <u>DATA SURVEI</u>
            </td>
         </tr>
      </tbody>
   </table>
<br>
<br>

      <table class="tabel-common" width="100%" id="laporan">
         <tbody>
         <tr>
            <th>No.</th>
            <th class="text-center">Pertanyaan</th>
            <th class="text-center">Option 1</th>
            <th class="text-center">Option 2</th>
            <th class="text-center">Option 3</th>
            <th class="text-center">Option 4</th>
         </tr>
         <?php
         $no = 1;
         foreach ($print as $p): ?>
         <tr>
            <td align="center"><?php echo $no++ ?></td>
            <td><?php echo $p->pertanyaan ?></td>
            <td class="text-center"><?php echo $p->A ?></td>
            <td class="text-center"><?php echo $p->B ?></td>
            <td class="text-center"><?php echo $p->C ?></td>
            <td class="text-center"><?php echo $p->D?></td>
         </tr>

      <?php endforeach; ?>
      </tbody>
   </table>
   </div>
   <br>
   <span>
   Catatan : <br>
      1. Apabila terdapat kesalahan data silakan hubungi operator. 
   </span>
   <br>
   <table class="tabelFooter" width="100%" border="0">
      <tbody><tr>
         <td width="19%" valign="top">
         </td>
         <td width="26%">
         </td>
         <td width="30%"> 
           <table width="100%">
               <tbody><tr>
                  <td align="center">
                     <br>
                     <br>
                     <span id=""></span>
                  </td>
               </tr>
               <tr>
                  <td align="center" valign="bottom" nowrap="nowrap" height="81"> <span id=""></span></td>
               </tr>
            </tbody></table>
         </td>
         <td width="25%">
         <br>
         <table width="100%">
               <tbody><tr>
                  <td align="left">
                  <span id="" style="display:none"></span>
                  <span>Tomohon, <?php echo date('d M Y'); ?></span>
                     <br>

                     <span><?php echo $this->session->userdata('level');?>,</span><br>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="bottom" nowrap="nowrap" height="81">
                     <span><u><?php echo $this->session->userdata('nama');?></u></span><br>
                  </td>
               </tr>
            </tbody>
         </table>

         
         </td>
      </tr>
   </tbody>
</table>
</div>
<!-- <script type="text/javascript">
   window.print();
</script> -->
<?php }; ?>
</body>
</html>