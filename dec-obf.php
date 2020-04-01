<?php

echo "###################################################\n";
echo "#                Coded By Micin                   #\n";
echo "#              Manusia Biasa Team                 #\n";
echo "###################################################\n";
echo "1.  gzinflate > base64_decode\n";
echo "2.  gzinflate > str_rot13 > base64_decode\n";
echo "3.  gzinflate > base64_decode > str_rot13\n";
echo "4.  gzinflate > base64_decode > base64_decode > str_rot13\n";
echo "5.  gzuncompress > base64_decode\n";
echo "6.  gzuncompress > str_rot13 > base64_decode\n";
echo "7.  gzuncompress > base64_decode > str_rot13\n";
echo "8.  base64_decode\n";
echo "9.  str_rot13 > gzinflate > base64_decode\n";
echo "10. gzinflate > base64_decode > strrev > str_rot13\n";
echo "11. gzinflate > base64_decode > strrev\n";
echo "12. gzinflate > base64_decode > str_rot13\n";
echo "13. gzinflate > base64_decode > str_rot13 > strrev\n";
echo "14. base64_decode > gzuncompress > base64_decode\n";
echo "15. gzinflate > base64_decode > rawurldecode\n";
echo "16. str_rot13 > gzinflate > str_rot13 > base64_decode\n";
echo "Pilih : ";
$cho = trim(fgets(STDIN));
if ($cho == '1') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode($namafile));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '2') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(str_rot13(base64_decode($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '3') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(str_rot13($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '4') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(base64_decode(str_rot13($namafile))));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '5') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzuncompress(base64_decode($namafile));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '6') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzuncompress(str_rot13(base64_decode($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '7') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzuncompress(base64_decode(str_rot13($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '8') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = base64_decode($namafile);
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '9') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = str_rot13(gzinflate(base64_decode($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '10') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(strrev(str_rot13($namafile))));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '11') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(strrev($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '12') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(str_rot13($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '13') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(str_rot13(strrev($namafile))));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '14') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = base64_decode(gzuncompress(base64_decode($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '15') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = gzinflate(base64_decode(rawurldecode($namafile)));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} if ($cho == '16') {
	echo "File : ";
	$dir = trim(fgets(STDIN));
	$namafile = file_get_contents($dir);
	$data = str_rot13(gzinflate(str_rot13(base64_decode($namafile))));
	echo "Save dengan nama default? [y/n] : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "y") {
		$file = fopen("".$cho.".txt", "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved!!!\n";
	} else {
		echo "Nama : ";
		$name = trim(fgets(STDIN));
		$file = fopen($name, "w");
		fwrite($file, $data);
		fclose($file);
		echo "Saved ".$name."!!!\n";
	}
} else {
	exit();
}

?>