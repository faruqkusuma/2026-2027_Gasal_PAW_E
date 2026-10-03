<?php
$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];

foreach ($matkul as $mata_kuliah) {
	switch ($mata_kuliah) {
		case 'PTI':
			echo "saya suka $mata_kuliah <br>";
			break;
		case 'ALPRO':
			echo "saya suka $mata_kuliah <br>";
			break;
		case 'DPW':
			echo "saya suka $mata_kuliah <br>";
			break;
		case 'STRUKDAT':
			echo "saya suka $mata_kuliah <br>";
			break;
		case 'JARKOM':
			echo "saya suka $mata_kuliah <br>";
			break;
		case 'PAW':
			echo "saya suka $mata_kuliah <br>";
			break;
		default:
			echo "saya tidak mengambil mata kuliah $mata_kuliah <br>";
			break;
	}
}
?>
