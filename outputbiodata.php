<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
 $Nama=$_POST['nama'];
 $Panggilan=$_POST['Panggilan'];
 $npm=$_POST['npm'];
 $prodi=$_POST['prodi'];
 $tempat=$_POST['tempat'];
 $Tgl=$_POST['Tgl'];
 $Bln=$_POST['Bln'];
 $Thn=$_POST['Thn'];
 $gndr=$_POST['gndr'];
 $alamat=$_POST['alamat'];
 $Hobi=$_POST['Hobi']
 
 ?>
 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
  <tr>
      <td> Nama Panggilan </td>
      <td> <?php echo $Panggilan ?> </td>
      </tr>
      <tr>
  <td>NPM</td>
     <td> <?php echo $npm ?> </td>
  </tr>
  <tr>
  <td>Tempat Tanggal Lahir</td>
     <td> <?php echo $tempat ?>, <?php echo $Tgl ?> - <?php echo $Bln ?> - <?php echo $Thn ?> </td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $gndr ?> </td>
  </tr>
  <tr>
     <td>Program Studi</td>
     <td> <?php echo $prodi ?> </td>
  </tr>
  <tr>
     <td>Alamat Lengkap</td>
     <td> <?php echo $alamat ?> </td>
  </tr>
  <tr>
     <td>Hobi</td>
     <td> <?php echo $Hobi ?> </td>
  </tr>
 </table>
 </body>
</html>