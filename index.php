<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css"/>
</head>
 <body>
	<div class="container">
	<div class="main">
		<form method="GET" action="proses.php" id="form">
		 <h2>DATA IDENTITAS</h2>
		 <hr/>
		 <label> Nama : </label>
		 <input type="text" name="fnama" id="fnama" />
		 
		 <label> Alamat : </label>
		 <input type="text" name="lalamat" id="lalamat" />
		 
		 <!-- kode program modul 6 mulai di baris ini -->
		 <p>
		 <label> Jenis Kelamin : </label>
		 <input type="radio" name="jkel" value="Laki-laki"/>Laki-laki
		 <input type="radio" name="jkel" value="Perempuan"/>Perempuan
		 </p>
		 
		 <p>
		 <label> Program Studi </label>
		 <select name="prodi">
			<option value="SI">SI</option>
			<option value="TI">TI</option>
			<option value="TK">TK</option>
			<option value="KA">KA</option>
			<option value="MI">MI</option>
		</select>
		</p>
		
		<p>
		<label>Hobi</label>
		  <input type = "checkbox"
			name = "cekhobi[]"
			value = "Menyanyi" />
		<label for = "chkSing">Menyanyi</label>
		<input type = "checkbox"
			name = "cekhobi[]"
			value = "olah raga" />
		<label for = "cekhobi">Olah Raga</label>
		</p>
		<!-- baris akhir modifikasi mod 6 -->
		
		<input type="submit" name="submit" id="submit" value="Save">
		
		<h4>Silahkan isi komentar anda dibawah ini</h4>
		<textarea name="komentar4" readonly="readonly">
		</textarea>
		
		<br />
		
		</form>
		 
		 
		 
		 
		