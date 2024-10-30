<form action="/simpan" method="post">

<h2>Form Data Pengunjung</h2>
<table border="1">
    <tr>
        <td><label for="nama">Nama</label></td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td><label for="nama">Alamat</label></td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td><label for="nama">No Telepon</label></td>
        <td>:</td>
        <td><input type="text" name="tlp"></td>
    </tr>
    <tr>
        <td><label for="jk">Jenis Kelamin</label></td>
        <td>:</td>
        <td>
            <input type="radio" name= "jk" value="Laki-Laki">Laki-Laki</input>
            <input type="radio" name= "jk" value="Perempuan">Perempuan</input>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" name="submit">Submit</button>
        </td>
    </tr>
</table>
</form>