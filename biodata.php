<!DOCTYPE html>
<html>
<head>
  <title> Form Biodata </title>
 </head>
<form method = "POST" name="frmpost" action="outputbiodata.php">
<table align = "center" border="1" cellpadding="0" cellspacing="0">
    <tr align = "center"><td><h2> <b> My Biodata </b></h2></td></tr>
    <tr>
    <td>
        <table width="850" border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
            <td> Nama Lengkap</td>
            <td> : </td>
            <td><input name="nama" type="text" size="40" /></td>
    </tr>
    <tr>
        <td> Nama Panggilan </td>
        <td> : </td>
        <td><input name="Panggilan" type="text" size="40"/></td>
    </tr>
        <tr>
            <td> Tempat, Tanggal Lahir </td>
            <td> : </td>
            <td><input name="tempat" type="text" size="40">
            <select name=Tgl>
    <option name=Tgl>Tanggal
    <option name=Tgl>1
    <option name=Tgl>2
    <option name=Tgl>3
    <option name=Tgl>4
    <option name=Tgl>5
    <option name=Tgl>6
    <option name=Tgl>7
    <option name=Tgl>8
    <option name=Tgl>9
    <option name=Tgl>10
    <option name=Tgl>11
    <option name=Tgl>12
    <option name=Tgl>13
    <option name=Tgl>14
    <option name=Tgl>15
    <option name=Tgl>16
    <option name=Tgl>17
    <option name=Tgl>18
    <option name=Tgl>19
    <option name=Tgl>20
    <option name=Tgl>21
    <option name=Tgl>22
    <option name=Tgl>23
    <option name=Tgl>24
    <option name=Tgl>26
    <option name=Tgl>27
    <option name=Tgl>28
    <option name=Tgl>29
    <option name=Tgl>30
    <option name=Tgl>31
    </select>
    <select name=Bln>
    <option name=Bln>Bulan
    <option name=Bln>Januari
    <option name=Bln>Februari
    <option name=Bln>Maret
    <option name=Bln>April
    <option name=Bln>Mei
    <option name=Bln>Juni
    <option name=Bln>Juli
    <option name=Bln>Agustus
    <option name=Bln>September
    <option name=Bln>Oktober
    <option name=Bln>November
    <option name=Bln>Desember
    </select>
    <select name=Thn>
    <option name=Thn>Tahun
    <option name=Thn>2000
    <option name=Thn>2001
    <option name=Thn>2002
    <option name=Thn>2003
    <option name=Thn>2004
    <option name=Thn>2005
    <option name=Thn>2006
    </select>
            </td>
    </tr>
    <tr>       
            <td> NPM </td>
            <td> : </td>
            <td><input name="npm" type="text" size="40" /></td>
    </tr>
    <tr>
            <td> Jenis Kelamin </td>
            <td> : </td>
            <td>
                <input type="radio" name="gndr" Value="Laki-laki" ><label for="laki">Laki-Laki</label>
                <input type="radio" name="gndr" Value="Perempuan" ><label for="Perempuan">Perempuan</label>
            </td>
     </tr>
    <tr>
            <td> Program Studi </td>
            <td> : </td>
            <td>
                <input type="radio" name="prodi" Value="Sistem Informasi" ><label for="Sistem Informasi">Sistem Informasi</label>
                <input type="radio" name="prodi" Value="Teknik Informatika" ><label for="Teknik Informatika">Teknik Informatika</label>
                <input type="radio" name="prodi" Value="Sains Data" ><label for="Sains Data">Sains Data</label>
            </td>
    </tr>
    <tr>
            <td> Alamat Lengkap </td>
            <td> : </td>
            <td><input name="alamat" type="text" size="40" /></td>
    </tr>
    <tr>
            <td> Hobi </td>
            <td> : </td>
            <td><input name="Hobi" type="text" size="40" /></td>
    </tr>
    <tr>
            <td colspan="4" align="center"><input type="submit" name="btnsave" value="Simpan Data">
            <input type="reset" name="reset" value="Hapus"></td>
    </tr>  
</table>
</td>
</tr>
</table>
</form>
</html>