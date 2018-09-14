<html>
<head><title>Sistem Raport Sederhana</title></head>
<body>
    <FORM ACTION="progas.php" METHOD="POST">
        <center>
    <h2>Sistem Raport Sederhana</h2>
    <table border="0" width="75%">
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td>
                    <input type="text"name ="Nama" size=30/>
                </td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <input type="number"name="NIS" size=50/>
                </td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td>
                    <textarea name="alamat"  cols="30" rows="10"></textarea>
                </td>  
                <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">
                    <label>laki-laki</label>
                    <input type="radio" name="jenis_kelamin" value="perempuan">
                    <label>perempuan</label>
                </td>
            </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                    <select name="Agama">
                            <option value="islan">islam</option>
                            <option value="budha">budha</option>
                            <option value="kristen">kristen</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>
                    <input type="text" name="asal_sekolah" size=40/>
                </td>
            </tr>
            <tr>
                <td>Nama Orangtua/wali</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama orangtua/wali" size=40/>
                </td>
            </tr>
            <tr>
                <td>mata pelajaran yang disukai</td>
                <td>:</td>
                <td>
        <input type="checkbox" name="Matematika" value="Matematika">Matematika
        <input type="checkbox" name="Ilmu Pengetahuan Alam" value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam
        <input type="checkbox" name="Ilmu Pengetahuan Sosial" value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial<br>
        <input type="checkbox" name="Pendidikan Agana Islam" value="Pendidikan Agana Islam">Pendidikan Agana Islam
        <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">Bahasa Indonesia
                </td>
            </tr>
            <tr>
                <td>Total Nilai Ijazah SD</td>
                <td>:</td>
                <td>
        <input type="text" name="total nilai ijazah sd" zise=30/>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="Email" name"email">
                </td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>
                    <input type="submit" value="input data" name="input">
                </td>
            </tr>
        </table>
    </FORM>
</body>
</html>