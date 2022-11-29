	<?php
			
			$server = "localhost";
			$user = "root";
			$password = "";
			$dbname = "wedkarstwo";
			
			//nawiązanie połączenia 
			$conn = mysqli_connect($server, $user, $password);
			
			//sprawdzenie połączenia 
			if (!$conn) {
			die ("connection failed" .mysqli_error());
			}
			echo "<br>Poprawnie nawiązano połączenie";
			
			//pobranie danych z formularza
			$numer = $_POST ['numer'];
			echo $numer;
			$data = $_POST ['data'];
			echo $data;
			$text = $_POST ['tekst'];
			echo $text;
			
			//wstawienie danych do bazy 
			$conn = mysqli_connect($server,$user,$password,$dbname);
			$sql = "INSERT INTO zawody_wedkarskie (id,Lowisko_id,data_zawodow,sedzia) VALUES ('0','$numer','$data','$text')";
			
			//sprawdzenie dodania rekordu
			if(mysqli_query($conn,$sql)) {
				echo "dodano rekord";
			}
			else {
			echo "Error: " .$sql. "<br>" .mysqli_error($conn);
			}
			mysqli_close($conn);
			
			
			?>