<?php
 
$gips = "Лист гипсокартонный КНАУФ-ГКЛ m2";/*1*/
$cd = "Профиль потолочный CD 60/27 м.п.";	/*2*/
$ud = "Профиль направляющий UD 28/27 м.п.";/*3*/
$ccd = "Удлинитель профилей 60/110 шт.";/*4*/
$crab = "Соединитель одноуровневый (краб)шт.";/*5*/
$pod = "Подвес с зажимом шт.";/*6a*/
$prov = "Тяга подвеса шт.";/*6б*/	
$ln9 = "Шуруп 3.5x9 LN 9 шт.";/**/
$tn = "Шуруп 3.5x25 ТN25 шт.";/*7*/
$tdn = "Анкер TDN 6/40 шт.";/*8*/
$dub = "Дюбель пластиковый 6/40	шт.";/*9*/
$len = "Лента армирующая м.п.";/*10*/
$fug = "Шпаклевка Фугенфюллер кг.";	/*11*/		
$uho = "Подвес прямой для СD- профиля 125 мм";/*6в*/
$soed = "Соединитель  двухуровневый 60/60 шт";/*4_2*/
$vata = "Минеральная вата м2";/**/
$uw50 = "Профиль направляющий UW 50/40 м.п.";/**/
$cw50 = "Профиль стоечный CW 50/50 м.п";/**/
$up = "Лента уплотнительнная";
$cw75 = "Профиль стоечный CW 75/50 м.п";
$uw75 =	"Профиль направляющий UW 75/40 м.п.";
$cw100 = "Профиль стоечный CW 100/50 м.п";
$uw100 = "Профиль направляющий UW 100/40 м.п.";

$lang = @$_REQUEST["lang"];
$wight = @$_REQUEST["wight"];
$pl = $lang * $wight ;
$agips = 1 ;
$agips_4 = 2 ;
$acd = 2.9 ;
$acd_2 = 3.2 ;
$acd_3 = 2 ;
$accd = 0.2 ;
$accd_2 = 0.6 ;
$acrab = 1.7 ;
$asoed = 2.3 ;
$apod = 1.3 ;
$aprov = 1.3 ;
$aln9 = 1.4 ;
$atn = 17 ;
$atn_4 = 34 ;
$atdn = 1.3 ;
$adub = 0.8 ;
$alen = 1.2 ;
$afug = 0.35 ;
$auho = 1.3 ;
$acw50 = 2 ;
$avata = 1 ;
$acw75 = 2 ;
$acw100 = 2 ;



$wgips =$agips * $pl ;
$wgips_4 =$agips_4 * $pl ;
$wcd = $acd * $pl ;
$wcd_2 = $acd_2 * $pl ;
$wcd_3 = $acd_3 * $pl ;
$wccd = $accd * $pl ;
$wccd_2 = $accd_2 * $pl ;
$wcrab = $acrab * $pl ;
$wsoed = $asoed * $pl ;
$wpod = $apod * $pl ;
$wprov = $aprov * $pl ;
$wln9 = $aln9 * $pl ;
$wtn = $atn * $pl ;
$wtn_4 = $atn_4 * $pl ;
$wtdn = $atdn * $pl ;
$wdub = $adub * $pl ;
$wlen = $alen * $pl ;
$wfug = $afug * $pl ;
$wuho = $auho * $pl ;
$wcw50 = $acw50 * $pl ;
$wvata = $avata * $pl ;
$wcw75 = $acw75 * $pl ;
$wcw100 = $acw100 * $pl ;

$wud = ($lang + $wight)*2;
$wup = ($lang + $wight)*2;
$wuw50 = ($lang + $wight)*2;
$wuw75 = ($lang + $wight)*2;
$wuw100 = ($lang + $wight)*2;

$ygips = 1.81 * $wgips ;
$ygips_4 = 1.81 * $wgips_4 ;
$ycd = 0.78 * $wcd ;
$ycd_2 = 0.78 * $wcd_2 ;
$ycd_3 = 0.78 * $wcd_3 ;

$yccd = 0.18 * $wccd ;
$yccd_2 = 0.18 * $wccd_2 ;
$ycrab = 0.41 * $wcrab ;
$ysoed = 0.3 * $wsoed ;
$ypod = 0.35 * $wpod ;
$yprov = 0.07 * $wprov ;
$yln9 = 0.005 * $wln9 ;
$ytn = 0.005 * $wtn ;
$ytn_4 = 0.005 * $wtn_4 ;
$ytdn = 0.13 * $wtdn ;
$ydub = 0.015 * $wdub ;
$ylen = 0.045 * $wlen ;
$yfug = 0.6 * $wfug ;
$yuho = 0.2 * $wuho ; 
$yud = 0.5 * $wud ;
$yup = 0.8 * $wup ;
$ycw50 = 0.78 * $wcw50 ;
$yuw50 = 0.63 * $wcw50 ;
$yvata = $wvata * 1.08 ;
$ycw100 = 1 * $wcw100 ;
$yuw100 = 0.9 * $wcw100 ;
$ycw75 = 0.92 * $wcw75 ;
$yuw75 = 0.78 * $wcw75 ;


$sum_1 = $ygips + $ycd + $yccd + $ycrab + $ypod + $yprov + $yln9 + $ytn + $ytdn + $ydub + $ylen + $yfug + $yud ;
$sum_2 = $ygips + $ycd_2 + $yccd_2 + $ysoed + $ypod + $yprov + $yln9 + $ytn + $ytdn + $ydub + $ylen + $yfug + $yud ;
$sum_3 = $ygips + $ycd_3 + $yud + $yho + $yup + $yln9 + $ytn + $ydub + $ylen + $yfug + $yvata ;
$sum_4 = $ygips_4 + $ycw75 + $yuw75 + $yup + $yln9 + $ytn_4 + $ydub + $ylen + $yfug + $yvata ;

 ?>