<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.card-header {background : orange}
		.warning {color: red}
	</style>
</head>
<body>

<?php
$error_nama = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tmplahir = "";
$error_tgllahir = "";
$error_akta = "";
$error_agama = "";
$error_kwn = "";
$error_kebkhusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_desa = "";
$error_kec = "";
$error_pos = "";
$error_lintang = "";
$error_bujur = "";
$error_tmptinggal = "";
$error_transportasi = "";
$error_kks = "";
$error_anakke = "";
$error_penerimakps = "";
$error_nokps = "";

$nama = "";
$jk = "";
$nisn = "";
$nik = "";
$tmplahir = "";
$tgllahir = "";
$akta = "";
$agama = "";
$kwn = "";
$kebkhusus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$desa = "";
$kec = "";
$pos = "";
$lintang = "";
$bujur = "";
$tmptinggal = "";
$transportasi = "";
$kks = "";
$anakke = "";
$penerimakps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama))
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["jk"]))
	{
		$error_jk = "Jenis Kelamin tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["jk"]);
	}
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn))
		{
			$error_nisn = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik))
		{
			$error_nik = 'NIK hanya boleh angka';
		}
	}
	if (empty($_POST["tmplahir"]))
	{
		$error_tmplahir = "Tempat lahir tidak boleh kosong";
	}
	else
	{
		$tmplahir = cek_input($_POST["tmplahir"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $tmplahir))
		{
			$error_tmplahir = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["tgllahir"]))
	{
		$error_tgllahir = "Tanggal lahir tidak boleh kosong";
	}
	else
	{
		$tgllahir = cek_input($_POST["tgllahir"]);
		if (!is_numeric($tgllahir))
		{
			$error_tgllahir = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["akta"]))
	{
		$error_akta = "No registrasi akta lahir tidak boleh kosong";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);
		if (!is_numeric($akta))
		{
			$error_akta = 'No registrasi akta lahir hanya boleh angka';
		}
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
	}
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
	}
	if (empty($_POST["kebkhusus"]))
	{
		$error_kebkhusus = "Berkebutuhan khusus tidak boleh kosong";
	}
	else
	{
		$kebkhusus = cek_input($_POST["kebkhusus"]);
	}
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat jalan tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
		if (!is_numeric($rt))
		{
			$error_rt = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
		if (!is_numeric($rw))
		{
			$error_rw = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Dusun tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["desa"]))
	{
		$error_desa = "Desa tidak boleh kosong";
	}
	else
	{
		$desa = cek_input($_POST["desa"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $desa))
		{
			$error_desa = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["kec"]))
	{
		$error_kec = "Kecamatan tidak boleh kosong";
	}
	else
	{
		$kec = cek_input($_POST["kec"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $kec))
		{
			$error_kec = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["pos"]))
	{
		$error_pos = "Kode pos tidak boleh kosong";
	}
	else
	{
		$pos = cek_input($_POST["pos"]);
		if (!is_numeric($pos))
		{
			$error_pos = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}
	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}
	if (empty($_POST["tmptinggal"]))
	{
		$error_tmptinggal = "Tempat tinggal tidak boleh kosong";
	}
	else
	{
		$tmptinggal = cek_input($_POST["tmptinggal"]);
	}
	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "Transportasi tidak boleh kosong";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
	}
	if (empty($_POST["anakke"]))
	{
		$error_anakke = "Anak ke tidak boleh kosong";
	}
	else
	{
		$anakke = cek_input($_POST["anakke"]);
		if (!is_numeric($anakke))
		{
			$error_anakke = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["penerimakps"]))
	{
		$error_penerimakps = "Inputan tidak boleh kosong";
	}
	else
	{
		$penerimakps = cek_input($_POST["penerimakps"]);
	}
}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">Formulir Pendaftaran Peserta Didik Baru</div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<div class="form-group row">
					<label for="nama" class=col-sm-3 col-form-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="nama lengkap" value="<?php echo $nama; ?>">
						<span class="warning"><?php echo $error_nama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="jk" class=col-sm-3 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-9">
						<input type="text" name="jk" class="form-control <?php echo ($error_jk !="" ? "is-invalid" : ""); ?>" id="jk" placeholder="P/L" value="<?php echo $jk; ?>">
						<span class="warning"><?php echo $error_jk; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nisn" class=col-sm-3 col-form-label">NISN</label>
					<div class="col-sm-9">
						<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>">
						<span class="warning"><?php echo $error_nisn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class=col-sm-3 col-form-label">NIK</label>
					<div class="col-sm-9">
						<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>">
						<span class="warning"><?php echo $error_nik; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tmplahir" class=col-sm-3 col-form-label">Tempat Lahir</label>
					<div class="col-sm-9">
						<input type="tmplahir" name="tmplahir" class="form-control <?php echo ($error_tmplahir !="" ? "is-invalid" : ""); ?>" id="tmplahir" placeholder="nama kota" value="<?php echo $tmplahir; ?>">
						<span class="warning"><?php echo $error_tmplahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tgllahir" class=col-sm-3 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="dd-mm-yyyy" value="<?php echo $tgllahir; ?>">
						<span class="warning"><?php echo $error_tgllahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="akta" class=col-sm-3 col-form-label">No Registrasi Akta Lahir</label>
					<div class="col-sm-9">
						<input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="no registrasi akta lahir" value="<?php echo $akta; ?>">
						<span class="warning"><?php echo $error_akta; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="agama" class=col-sm-3 col-form-label">Agama</label>
					<div class="col-sm-9">
						<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="agama" value="<?php echo $agama; ?>">
						<span class="warning"><?php echo $error_agama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kwn" class=col-sm-3 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-9">
						<input type="text" name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="kewarganegaraan" value="<?php echo $kwn; ?>">
						<span class="warning"><?php echo $error_kwn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kebkhusus" class=col-sm-3 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-9">
						<input type="text" name="kebkhusus" class="form-control <?php echo ($error_kebkhusus !="" ? "is-invalid" : ""); ?>" id="kebkhusus" placeholder="berkebutuhan khusus" value="<?php echo $kebkhusus; ?>">
						<span class="warning"><?php echo $error_kebkhusus; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class=col-sm-3 col-form-label">Alamat Jalan</label>
					<div class="col-sm-9">
						<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="alamat jalan" value="<?php echo $alamat; ?>">
						<span class="warning"><?php echo $error_alamat; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rt" class=col-sm-3 col-form-label">RT</label>
					<div class="col-sm-9">
						<input type="text" name="RT" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>">
						<span class="warning"><?php echo $error_rt; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rw" class=col-sm-3 col-form-label">RW</label>
					<div class="col-sm-9">
						<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>">
						<span class="warning"><?php echo $error_rw; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="dusun" class=col-sm-3 col-form-label">Dusun</label>
					<div class="col-sm-9">
						<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="dusun" value="<?php echo $dusun; ?>">
						<span class="warning"><?php echo $error_dusun; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="desa" class=col-sm-3 col-form-label">Desa</label>
					<div class="col-sm-9">
						<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="desa" value="<?php echo $desa; ?>">
						<span class="warning"><?php echo $error_desa; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kec" class=col-sm-3 col-form-label">Kecamatan</label>
					<div class="col-sm-9">
						<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" id="kec" placeholder="kecamatan" value="<?php echo $kec; ?>">
						<span class="warning"><?php echo $error_kec; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="pos" class=col-sm-3 col-form-label">Kode Pos</label>
					<div class="col-sm-9">
						<input type="text" name="pos" class="form-control <?php echo ($error_pos !="" ? "is-invalid" : ""); ?>" id="pos" placeholder="kode pos" value="<?php echo $pos; ?>">
						<span class="warning"><?php echo $error_pos; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="lintang" class=col-sm-3 col-form-label">Lintang</label>
					<div class="col-sm-9">
						<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>">
						<span class="warning"><?php echo $error_lintang; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bujur" class=col-sm-3 col-form-label">Bujur</label>
					<div class="col-sm-9">
						<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>">
						<span class="warning"><?php echo $error_bujur; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tmptinggal" class=col-sm-3 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-9">
						<input type="text" name="tmptinggal" class="form-control <?php echo ($error_tmptinggal !="" ? "is-invalid" : ""); ?>" id="tmptinggal" placeholder="tempat tinggal" value="<?php echo $tmptinggal; ?>">
						<span class="warning"><?php echo $error_tmptinggal; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="transportasi" class=col-sm-3 col-form-label">Transportasi</label>
					<div class="col-sm-9">
						<input type="text" name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" placeholder="transportasi" value="<?php echo $transportasi; ?>">
						<span class="warning"><?php echo $error_transportasi; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kks" class=col-sm-3 col-form-label">No KKS</label>
					<div class="col-sm-9">
						<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="no kks" value="<?php echo $kks; ?>">
						<span class="warning"><?php echo $error_kks ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="anakke" class=col-sm-3 col-form-label">Anak Ke-</label>
					<div class="col-sm-9">
						<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : ""); ?>" id="anakke" placeholder="anak ke-" value="<?php echo $anakke; ?>">
						<span class="warning"><?php echo $error_anakke; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="penerimakps" class=col-sm-3 col-form-label">Penerima KPS</label>
					<div class="col-sm-9">
						<input type="text" name="penerimakps" class="form-control <?php echo ($error_penerimakps !="" ? "is-invalid" : ""); ?>" id="penerimakps" placeholder="ya/tidak" value="<?php echo $penerimakps; ?>">
						<span class="warning"><?php echo $error_penerimakps; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokps" class=col-sm-3 col-form-label">No KPS</label>
					<div class="col-sm-9">
						<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="no kps" value="<?php echo $nokps; ?>">
						<span class="warning"><?php echo $error_nokps; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-10">
		<form action="reportexcel.php" method="post" align="center">
		<button type="submit" class="btn btn-primary">Export Excel</button>
		</form>
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-10">
		<form action="reportpdf.php" method="post" align="center">
		<button type="submit" class="btn btn-primary">Export PDF</button>
		</form>
	</div>
</div>

</body>
</html>