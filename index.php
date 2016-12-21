<?php
//RSS源地址列表数组
$feed = array("http://www.paipk.com/feed.php");

for($i=0;$i<sizeof($feed);$i++){//分解开始
    $buff = "";
    $rss_str="";
//打开rss地址，并读取，读取失败则中止
   $fp = @fopen($feed[$i],"r") or die("can not open RSS"); 
while (!feof($fp)) {
	$buff .= fgets($fp,4096);
}
    //关闭文件打开    
    fclose($fp);
}

	echo $buff;
?>