<?php
$id=$_REQUEST['id'];
$ids = array(
"06"=>"587",//民視
"08"=>"13",//台視
"09"=>"574",//大愛
"13"=>"593",//公視
"14"=>"594",//公視台語台
"25"=>"339",//東森幼幼
"35"=>"577",//momo購物2台
"48"=>"576",//momo購物1台
"51"=>"590",//東森新聞
"52"=>"591",//中天新聞台
"53"=>"https://bear9501.github.io/workflows/ftvnews.m3u8",//民視新聞台
"55"=>"https://bear9501.github.io/workflows/55.m3u8",//TVBS新聞台
"56"=>"56.m3u8",//TVBS
"57"=>"583",//東森財經新聞
"59"=>"26",//viva購物1台
"86"=>"602",//信吉電視台
"89"=>"580",//三立iNEWS
"92"=>"527",//運通財經台
"102"=>"60",//華藏電視台
"108"=>"59",//新唐人亞太台
"109"=>"61",//正德電視台
"121"=>"27",//viva購物2台
"123"=>"57",//國會頻道1
"124"=>"58",//國會頻道2
"125"=>"578",//幸福空間居家台
"148"=>"586",//民視旅遊台
"149"=>"585",//民視綜藝台
"150"=>"575",//民視影劇台
"151"=>"581",//民視第一台
"152"=>"582",//民視台灣台
"154"=>"596",//中視新聞台
"155"=>"595",//台視新聞台
"159"=>"597",//華視新聞資訊
"222"=>"19",//寰宇新聞台
"297"=>"573",//大愛二台

);   

$url="https://raw.githubusercontent.com/Bear9501/workflows/main/tv1.php?url=$ids[$id]";                 
   // header("Location: https://bear9501.github.io/workflows/$ids[$id]"); //https://raw.githubusercontent.com/Bear9501/workflows/main/tv1.php?id=56

   // exit(); https://bear9501.github.io/workflows/56.m3u8  ,http://zuuvgpxm6kt6vt.movieyo.net:38753/live.m3u8?c=621
?>  
