<?php
include 'koneksi.php';
if(isset($_POST['submit'])) {
//ambil 1 ID terbesar di kolom id_daftar, lalu ambil 5 
// karakter aja dari sebelah kanan
$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_daftar, 5)) AS id FROM tb_datadiri");
$d = mysqli_fetch_object($getMaxId);
$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
//proses insert
$insert = mysqli_query($conn, "INSERT INTO tb_datadiri VALUES
(
'".$generateId."', 
'".$_POST['jenis_pendaftaran']."',
'".$_POST['tanggal_masuk']."',
'".$_POST['NIS']."',
'".$_POST['nomor_ujian']."',
'".$_POST['pernah_paud']."',
'".$_POST['pernah_tk']."',
'".$_POST['no_skhun']."',
'".$_POST['no_ijazah']."',
'".$_POST['hobi']."',
'".$_POST['citacita']."',
'".$_POST['nama']."',
'".$_POST['jenis_kelamin']."',
'".$_POST['nisn']."',
'".$_POST['nik']."',
'".$_POST['tempat_lahir']."',
'".$_POST['tgl_lahir']."',
'".$_POST['agama']."',
'".$_POST['kebutuhan_khusus']."',
'".$_POST['alamat_jln']."',
'".$_POST['rt']."',
'".$_POST['rw']."',
'".$_POST['dusun']."',
'".$_POST['kelurahan_desa']."',
'".$_POST['kecamatan']."',
'".$_POST['kode_pos']."',
'".$_POST['tinggal']."',
'".$_POST['transportasi']."',
'".$_POST['no_hp']."',
'".$_POST['no_telp']."',
'".$_POST['email']."',
'".$_POST['kps_pkh_kip']."',
'".$_POST['no_kps_pkh_kip']."',
'".$_POST['kewarganegaraan']."',
'".$_POST['ay_nama']."',
'".$_POST['ay_tahun']."',
'".$_POST['ay_pendidikan']."',
'".$_POST['ay_pekerjaan']."',
'".$_POST['ay_penghasilan']."',
'".$_POST['ay_berkebutuhan']."',
'".$_POST['ib_nama']."',
'".$_POST['ib_tahun']."',
'".$_POST['ib_pendidikan']."',
'".$_POST['ib_pekerjaan']."',
'".$_POST['ib_penghasilan']."',
'".$_POST['ib_berkebutuhan']."'
)");

if($insert){
echo
'<script>window.location="sukses.php?id='.$generateId.'"</script>';
} else{
echo 'huft '.mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>FORMULIR PESERTA DIDIK</title>
</head>

<body>
    <!--bagian box formulir-->
    <section class="box-formulir">
        <h2>Pendaftaran Siswa Baru TADIKA MESRA</h2>
        <!--bagian form-->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tanggal Registrasi</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_reg" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <!--bagian registrasi peserta didik baru-->
            <h3>Registrasi Peserta Didik</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Jenis Pendaftaran</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jenis_pendaftaran">
                                <option value="">--Pilih--</option>
                                <option value="Siswa Baru">Siswa
                                    Baru</option>
                                <option value="Pindahan">Pindahan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk Sekolah</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal_masuk" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="NIS" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Peserta Ujian</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nomor_ujian" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Apakah Pernah PAUD</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="pernah_paud" class="input-control" value="Ya"> Ya
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="pernah_paud" class="input-control" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>Apakah Pernah TK</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="pernah_tk" class="input-control" value="Ya"> Ya &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="pernah_tk" class="input-control" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>No. Seri SKHUN Sebelumnya</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_skhun" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>No. Seri Ijazah Sebelumnya</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_ijazah" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="hobi">
                                <option value="">--Pilih--</option>
                                <option value="Olah Raga">Olah
                                    Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Cita-Cita</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="citacita">
                                <option value="">--Pilih--</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <!--bagian data diri peserta didik baru-->
            <h3>Data Diri Peserta Didik</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Laki-Laki"> Laki-Laki
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:&nbsp;</td>
                        <td>
                            <input type="text" name="nisn" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nik" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="kebutuhan_khusus">
                                <option value="">--Pilih--</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra(A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Laras (E)">Laras (E)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Jalan</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat_jln" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>RT</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="rt" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>RW</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="rw" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Dusun</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="dusun" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Kelurahan/Desa</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="kelurahan_desa" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="kecamatan" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="kode_pos" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Tinggal</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="tinggal">
                                <option value="">--Pilih--</option>
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Moda Transportasi</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="transportasi">
                                <option value="">--Pilih--</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum/Angkot/Pete-Pete">Kendaraan Umum/Angkot/Pete-Pete</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca
                                </option>
                                <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_hp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_telp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Email Pribadi</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Penerima KPS/PKH/KIP</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="kps_pkh_kip" class="input-control" value="Ya"> Ya
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="kps_pkh_kip" class="input-control" value="Tidak"> Tidak
                        </td>
                    </tr>
                    <tr>
                        <td>No. KPS/PKH/KIP</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_kps_pkh_kip" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="kewarganegaraan" class="input-control">
                        </td>
                    </tr>
                    </tr>
                </table>
            </div>

            <!-- bagian data orang tua peserta didik baru -->
            <h3>Data Orang Tua Peserta Didik</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap Ayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ay_nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir Ayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ay_tahun" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ayah</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ay_pendidikan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak sekolah">Tidak sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ay_pekerjaan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ay_penghasilan">
                                <option value="">--Pilih--</option>
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000-999.999">500.000-999.999</option>
                                <option value="1 juta-1.999.999">1 juta-1.999.999</option>
                                <option value="2 juta-4.999.999">2 juta-4.999.999</option>
                                <option value="5 juta-20 juta">5 juta-20 juta</option>
                                <option value="lebih dari 20 juta">lebih dari 20 juta</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ay_berkebutuhan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra(A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Laras (E)">Laras (E)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Nama Lengkap Ibu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ib_nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir Ibu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ib_tahun" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ibu</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ib_pendidikan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak sekolah">Tidak sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ib_pekerjaan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ibu</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ib_penghasilan">
                                <option value="">--Pilih--</option>
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000-999.999">500.000-999.999</option>
                                <option value="1 juta-1.999.999">1 juta-1.999.999</option>
                                <option value="2 juta-4.999.999">2 juta-4.999.999</option>
                                <option value="5 juta-20 juta">5 juta-20 juta</option>
                                <option value="lebih dari 20 juta">lebih dari 20 juta</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="ib_berkebutuhan">
                                <option value="">--Pilih--</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Netra (A)">Netra(A)</option>
                                <option value="Rungu (B)">Rungu (B)</option>
                                <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                                <option value="Grahita Sedang">Grahita Sedang (C1)</option>
                                <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                <option value="Laras (E)">Laras (E)</option>
                                <option value="Wicara (F)">Wicara (F)</option>
                                <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                                <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                                <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                                <option value="Narkoba (N)">Narkoba (N)</option>
                                <option value="Indigo (O)">Indigo (O)</option>
                                <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                                <option value="Autis (Q)">Autis (Q)</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar">
                        </td>
                    </tr>
                </table>
            </div>

        </form>
    </section>
</body>

</html>