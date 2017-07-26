<?php
	 // $demo = array('php','andiroid','ios');
	 // $json = json_encode($demo);
	 // $arr = json_decode($json);
	//echo $json;
	//echo"<br>";
	//var_dump($json);
	//echo"<br>";
	//var_dump($arr);

	// class xin_chao()
	// {
	// 	function in_chao()
	// 	{
	// 		echo "Chao ban";
	// 	}
	// }
	// $obj = new xin_chao();//$obj: là 1 đối tượng; class xin_chao là lớp đối tượng 
	// $obj->in_chao();
	// var_dump($obj);
	// $a = (float)15;
	// $chuoi = "chao a";
	// $demo = explode('',$chuoi);
	// var_dump($demo);
	 // define('pi', 3.14);
	 // echo pi;
	 // $r = 10;
	 // echo"<br>";
	 // echo'dien tich hinh tron co ban kinh '.$r.' la '.($r*$r*pi);
	 // echo"<br>";
	 // echo 'cho vi hinh trong co ban kinh '.$r.' la '.( $r*2*pi);
	 $canh1 = 5;
	 $canh2 = 5;
	 $canh3 = 3;
	 $tong1 = $canh3 + $canh2;
	 $tong2 = $canh1 + $canh3;
	 $tong3 = $canh1 + $canh2;
	 if($canh1<$tong1&&$canh2<$tong2&&$canh3<$tong3)
	 {
	 	
	 	if($canh1==$canh2&&$canh2==$canh3)
	 	{
	 		echo "la tam giac deu";
	 	}
	 	elseif($canh1==$canh2||$canh1==$canh3||$canh2==$canh3)
	 	{
	 		echo"là tam giác cân";

	 	}
	 	elseif($canh1*$canh1=$canh2*$canh2+$canh3*$canh3&&$canh2*$canh2=$canh1*$canh1+$canh3*$canh3&&$canh3*$canh3=$canh2*$canh2+$canh1*$canh1)
	 	{
	 		echo"là tam giác vuông";
	 	}
	 	else
	 		echo "là hình tam giác";
	 	
	 }
	 
	 else
	 {
	 	echo "không phải hình tam giác ";
	 }


?>
