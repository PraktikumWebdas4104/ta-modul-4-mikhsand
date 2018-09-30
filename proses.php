<?php
error_reporting(0);
		
		if (isset($_POST['submit'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
				$user=array('user'=> 'ikhsan',
							'pass'=> 'qwerty11');

			if ($username==$user['user']&&$password==$user['pass']){
				echo "login berhasil <br>";
?>

<h2>Pilih Makanan :</h2>
		<form action=" " method="POST">
		<table>
			<tr>
				<td><input type="checkbox" name="makanan[]" value="Baso">Baso</td>
			</tr>

			<tr>
				<td><input type="checkbox" name="makanan[]" value="Jeruk">Lotek</td>
			</tr>
			
			<tr>
				<td><input type="checkbox" name="makanan[]" value="Acer">Kue</td>
			</tr>
			</table>

	<h2>Pilih Hobi :</h2>
			<table>
			<tr>
				<td><input type="checkbox" name="hobi[]" value="Renang">Renang</td>
			</tr>

			<tr>
				<td><input type="checkbox" name="hobi[]" value="Nari">Nari</td>
			</tr>
			
			<tr>
				<td><input type="checkbox" name="hobi[]" value="Bola">Main Bola</td>
			</tr>
			</table>

	<h2>Pilih Genre Film :</h2>
			<table>
				<tr>
					<td><input type="checkbox" name="film[]" value="Horror">Horror</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="film[]" value="Action">Action</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="film[]" value="Anime">Anime</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="film[]" value="Thriller">Thriller</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="film[]" value="Animasi">Animasi</td>
				</tr>
			</table>

	<h2>Pilih Tujuan Tempat Wisata :</h2>
			<table>
				<tr>
					<td><input type="checkbox" name="wisata[]" value="Bali">Bali</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung</td>
				</tr>

				<tr>
					<td><input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo</td>
				</tr>

				<tr>
					<td><input type="submit" name="kirim" value="submit"></td>
				</tr>
			</table>
		</form>

<?php
		}
		else{
			echo "username atau password salah";
		}
	}

	if (isset($_POST['kirim'])) {
			$makanan=$_POST['makanan'];
			$hobi=$_POST['hobi'];
			$genre=$_POST['film'];
			$wisata=$_POST['wisata'];
			
			echo "<b>Makanan :</b><br>";
			if (!empty($makanan)) {
				foreach ($makanan as $food) {
					echo "> ".$food."<br>";
				}
			}
			else{
				echo "<i>Anda Tidak Memilih Makanan</i><br>";
			}


			echo "<b>Hobi :</b><br>";
			if (!empty($hobi)) {
				foreach ($hobi as $hobby) {
					echo "> ".$hobby."<br>";
				}
			}
			else{
				echo "<i>Anda Tidak Memiliki Hobi</i><br>";
			}


			echo "<b>Genre Film :</b><br>";
			if (!empty($genre)) {
				foreach ($genre as $film) {
					echo "> ".$film."<br>";
				}
			}
			else{
				echo "<i>Anda Tidak Memiliki Film Favorit</i><br>";
			}


			echo "<b>Tujuan Wisata :</b><br>";
			if (!empty($wisata)) {
				foreach ($wisata as $tujuan) {
				echo "> ".$tujuan."<br>";
				}
			}
			else{
				echo "<i>Anda Tidak Memiliki Tujuan Travelling Favorit</i><br>";
			}
	}

?>
