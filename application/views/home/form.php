<!-- View Untuk Form Inputan laporan baru -->
<div id="konten">
	<p>Buat laporan/komentar </p>
	<br><hr><br>

	<form action="<?= base_url();?>CRUD/add" method="POST" onSubmit="validasi()" 
	enctype="multipart/form-data" name="data">
	<?= "<font color='red'><i>$error </i><br></font>"; ?>
	<textarea placeholder="laporan/komentar anda..." class="textarea" name="isi"></textarea>
	<select name="aspek">
		<option value=NULL>Pilih aspek pelaporan/komentar</option>
		<option value="dosen">Dosen</option>
		<option value="staff">Staff</option>
		<option value="mahasiswa">Mahasiswa</option>
		<option value="infrastruktur">Infrastruktur</option>
		<option value="pengajaran">Pengajaran</option>
	</select>
	<br>
	<input type="file" name="lampiran">
	<div class="jarak">
		<input type="submit" name="kirim" value="Buat LAPOR!">
	</div>
	<hr>
</form>
</div>
<script src=" <?= base_url(); ?>asset/js/validasi.js"></script>
