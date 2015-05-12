<?php
header("Content-Type:text/html; charset=utf-8");

//题目：
//--有红、白、黑三种颜色球，红球+白球=25(个)，白球+黑球=31(个)，黑球+红球=28(个)，求这三种颜色球各多少个？

//思路：既然是循环解题，就要考虑循环三要素：1.循环长度（执行次数） 2.循环变量（自增或自减） 3.循环退出条件

//--1.确定最大循环长度
//	//最大循环长度为31，因为三种颜色的球两两相加的和最大为31（白+黑）
//	$len = 31;

//--2.确定循环变量为黑球或白球，不论是黑球还是白球最大数都不会大于 $len（31），这里确定循环变量为黑球
//	$hei=1;		//黑球至少有一个   
//	$hei<$len;	//黑球少于31个 

//--3.确定循环退出条件，也就是：红球+白球=25(个)，白球+黑球=31(个)，黑球+红球=28(个)时退出循环
//	for( $hei=1; $hei<$len; $hei++ ){
//		if( $hong+$bai==25 && $hong+$hei==28 && $bai+$hei==31 ){
//			echo "红球：$hong,黑球：$hei,白球：$bai <br />";
//			//退出循环
//		}
//	}

//--4.走到第3步并不能求出三种球的数量
//-----原因：循环中只有黑球（$hei）自己在变，白球（$bai）和 红球（$red）都是静止的，没有参与循环。
//-----所以要使白球（$bai）和 红球（$red）随着黑球数量的变化（$hei++）而变化，使三种球同时同时参与循环。
//-----于是，根据三种球的求和关系反推出白球（$bai）和 红球（$red）在循环中的变化公式：
//-----$bai = 31-$hei; $hong = 25-$bai;
//-----所以，最终的程序为：

$len = 31;
for( $hei=1; $hei<$len; $hei++ ){
	$bai = 31 - $hei; 
	$hong = 25 - $bai;
	if( $hong+$bai==25 && $hong+$hei==28 && $bai+$hei==31 ){
		echo '红球'.$hong.'个-- 黑球'.$hei.'个--白球'.$bai.'个';
		//退出循环
	}
}
?>