<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP HomeWork 3</title>
	<style>
		body {
			padding-left: 10px;
		}
	</style>
</head>
<body>

<?php

	//Task 1
	echo "Task 1:" . "<br />";
		function getKyb($a) {
			return $a ** 3;
		}

		echo getKyb(2);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 2
	echo "Task 2:" . "<br />";
		function getSumm($a, $b) {
			return $a + $b;
		}
		
		echo getSumm(3, 6);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 3
	echo "Task 3:" . "<br />";
		function getWeek($a) {
			if ($a >= 1 && $a <= 7) {
				switch ($a) {
					case 1:
						return "Понедельник";
					break;
					case 2:
						return "Вторник";
					break;
					case 3: 
						return "Среда";
					break;
					case 4:
						return "Четверг";
					break;
					case 5:
						return "Пятница";
					break;
					case 6:
						return "Суббота";
					break;
					case 7:
						return "Воскресенье";
					break;
				}
			} else {
				return "Укажите число от 1 до 7!";
			}
		}

		echo getWeek(5);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 4
	echo "Task 4:" . "<br />";
		function getNumm($a) {
			return is_int($a) && $a > 0 ? "True" : "False";
		}

		echo getNumm(-3);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 5
	echo "Task 5:" . "<br />";
		function getDigitsSum($a) {
			$sum = 0;
			$string = (string)$a;

			for ($i = 0; ; $i++) {
				if (empty($string[$i])) break;

				$sum += (int)$string[$i];
			}
			return $sum;
		}

		echo getDigitsSum(12345678);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 6
	echo "Task 6:" . "<br />";
		function yearSumm() {
			$b = 0;

			for ($i = 0; $i <= 2020; $i++) {
				if (getDigitsSum($i) == 13) $b++;
			}
			return $b;
		}

		echo yearSumm();
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 7
	echo "Task 7:" . "<br />";
		function isEven($a) {
			return is_int($a) && fmod($a, 2) == 0 && $a > 0 ? "True" : "False";
		}

		echo isEven(10);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 8
	echo "Task 8:" . "<br />";
		function translit($a) {
			$arrRus = ["а","б","в","г","д","е","ё","ж","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ц","ч","ш","щ","ь","ы","ъ","э","ю","я"," ", "!"];
			$arrEng = ["a","b","v","g","d","e","jo","zh","z","i","j","k","l","m","n","o","p","r","s","t","u","f","h","cz","ch","sh","sh","`","y","``","e`","yu","ya"," ", "!"];
			
			if (!is_string($a)) return "Введите строку в качестве параметра функции!";

			for ($i = 0; $i < strlen($a); $i++) {
				$string = mb_substr($a, $i, 1);

				for ($j = 0; $j < count($arrRus); $j++) {
					if ($string == $arrRus[$j]) echo $arrEng[$j];
				}
			}
		}

		translit("хорошего дня!");
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 9
	echo "Task 9:" . "<br />";
		function apple($a = 0, $b ,$c, $d) {
			$str = (string)$a;
			$strLength = strlen($str)-1;

			if ($a <= 20) {
				if ($a == 0) return $a . " " . $d;
				if ($a == 1) return $a . " " . $b;
				if ($a >= 2 && $a <= 4) return $a . " " . $c;
				if ($a >= 5 && $a <= 20) return $a . " " . $d;
			} else {
				if ($str[$strLength] == 1) return $a . ' ' . $b;
				if ($str[$strLength] >= 2 && $str[$strLength] <= 4) return $a . " " . $c;
				if ($str[$strLength] >= 5 && $str[$strLength] <= 20) return $a . " " . $d;
			}
		}

		echo apple(143, "яблоко", "яблока", "яблок");
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 10
	echo "Task 10:" . "<br />";
		function arr($i) {
			$arr = [1,2,3,4,5,6,7,8,9,10];

			if (!empty($arr[$i])) {
				echo $arr[$i] . " ";
				$i += 1;
				arr($i);
			}
		}

		arr(0);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 11
	echo "Task 11:" . "<br />";
		function summa9($a) {
			$sum = getDigitsSum($a);
			
			if ($sum > 9) {
				return summa9($sum);
			}

			return $sum;
		}

		echo summa9(123456789);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 12
	echo "Task 12:" . "<br />";
		function speed($s, $t) {
			return "Скорость автомобиля равна: " . ($s / $t) . "км/ч. Или " . round(($s / $t / 3.6), 1) . "м/с.";
		}

		echo speed(190, 2.5);
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 13
	echo "Task 13:" . "<br />";
		function strCheck($string1, $string2) {
			$string1Arr = mb_str_split($string1);
			$string1Arr = array_unique($string1Arr);
			$string2Arr = mb_str_split($string2);

			echo "<pre>" . print_r($string1Arr, true) . "</pre>";
			echo "<pre>" . print_r($string2Arr, true) . "</pre>";
			echo "<pre>" . print_r(count(array_diff($string2Arr, $string1Arr)) == 0 ? "True" : "False", true) . "</pre>";
		}

		strCheck("abc", "abcdefg");
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 15
	echo "Task 15:" . "<br />";
		function tableMultiply() {
			echo "<table border=\"1\">";

			for ($i = 2; $i <= 10; $i++) {
				echo "<tr>";
				for ($j = 2; $j <= 9; $j++) {
					echo "<td>$j * $i = " . ($i*$j) . "</td>";
				}
				echo "<tr>";
			}
			echo "<table>";
		}

		tableMultiply();
	echo "<hr />" . "<br />";
	//-------------------------------------------

	//Task 18
	echo "Task 18:" . "<br />";
		function stringSplit2br($string, $n) {
			$splitArr = str_split($string, $n);
			$newSplitArr = [];

			foreach($splitArr as $substr) {
				array_push($newSplitArr, ltrim($substr));
			}

			$splitArr = $newSplitArr;

			echo implode("<br>", $splitArr);
		}

		stringSplit2br("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 10);
	echo "<hr />" . "<br />";
	//-------------------------------------------

?>

</body>
</html>
