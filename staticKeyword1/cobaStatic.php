<?php 

// class CobaStatic{
// 	public static $angka = 1;

// 	public static function getHello(){
// 		return "Hello ".self::$angka++." kali";
// 	}
// }

// echo CobaStatic::$angka;
// echo "<br>";
// echo CobaStatic::getHello();
// echo "<hr>";
// echo CobaStatic::getHello();
 

class CobaStatic{
	public static $angka = 1;

	public function hello(){
		return "Hello ".self::$angka++." kali <br>";
	}
}

$obj = new CobaStatic();
$obj2 = new CobaStatic();
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();
echo "<hr>";
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();

 ?>