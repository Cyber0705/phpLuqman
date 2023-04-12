<html>
    <head>
        <title>Formulir Pendaftaran Arek UIN</title>
    </head>

    <body>
        <div id="Heading">
            <h1>Formulir Pendaftaran Mahasiswa</h1>
        </div>
        <fieldset>
            <legend>Isilah daftar pendaftaran mahasiswa dibawah ini :</legend>
            
            <div id="formulir">
                <form>
                    <table>
                        <tr id="nama">
                            <td>
                                <label>Nama Calon Mahasiswa :</label>
                            </td>
                            <td></td>
                            <td>
                                <input type="text" name="nama">
                            </td>
                        </tr>
                        <tr id="ttl">
                            <td>
                                <label>Tempat/Tanggal Lahir : </label>
                            </td>
                            <td>
                                <input type="text" name="tempat">
                                <input type="date" name="tgl">
                            </td>
                        </tr>
                        <tr id="agama">
                            <td>
                                <label>Agama :</label>
                            </td>
                            <td>
                                <select name="agama">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                    <option value="konghuchu">Konghuchu</option>
                                </select><br>
                            </td>
                        </tr>
                        <tr id="alamat">
                            <td>
                                <label>Alamat :</label>
                            </td>
                            <td>
                                <textarea></textarea>
                            </td><br>
                        </tr>
                        <tr id="notelp">
                            <td>
                                <label>No. Telp :</label>
                            </td>
                            <td>
                                <input type="number" name="notelp"><br>
                            </td>
                        </tr>
                        <tr id="jk">
                            <td>
                                <label>Jenis Kelamin :</label>
                            </td>
                            <td>
                                <input type="radio" name="jk" value="laki">Laki-Laki
                                <input type="radio" name="jk" value="perempuan">Perempuan<br>
                            </td>
                        </tr>
                        <tr id="hobi">
                            <td>
                                <label>Hobi : </label>
                            </td>
                            <td>
                                <input type="checkbox" name="hobi_1" value="belajar koding">Belajar koding
                                <input type="checkbox" name="hobi_2" value="main bola">Main bola
                                <input type="checkbox" name="hobi_3" value="main game">Main Game
                            </td>
                        </tr>
                        <tr id="foto">
                            <td>
                                <label>Pas Foto :</label>
                            </td>
                            <td>
                                <input type="file" nama="file">
                            </td>
                        </tr>
                    </table>
                    <input type="submit">
                </form>
            </div>
        </fieldset>
        <?php
            $db = new mysqli("localhost","root","","registrasi");
            $result = $db->query("SELECT * FROM data_siswa")
        ?> 
        <h1>Data Pendaftaran Mahasiswa</h1>  
        <div id="tabel">
            <table border="1" cellpadding="15" cellspacing="0">
                <tr bgcolor="yellow">
                    <th valign="middle" rowspan="2">Nama</th>
                    <th align="center" colspan="2">Lahir</th>
                    <th valign="middle" rowspan="2">No. Telp</th>
                    <th valign="middle" rowspan="2">Agama</th>
                    <th valign="middle" rowspan="2">Hobi</th>
                </tr>
                <tr bgcolor="yellow">
                    <th>Tempat</th>
                    <th>Tanggal</th>
                </tr>
                <?php
                foreach($result as $row){?>
                <tr>
                    <td><?=$row["Nama"]; ?></td>
                    <td><?php echo $row["Tempat"]; ?></td>
                    <td><?php echo $row["Tgl_Lahir"]; ?></td>
                    <td><?=$row["NoTelp"]; ?></td>
                    <td><?=$row["Agama"]; ?></td>
                    <td><?php echo $row["Hobi"]?></td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </body>
</html>