<?php
require_once __DIR__.'/src/PHPTelebot.php';
error_reporting(0);
function serang(){

$bot = new PHPTelebot('5431399217:AAHJcif2pprADthLLI6B_lzqc5AUWFWH34w', '@skyot_bot');

// Simple answer
$bot->cmd('/key1', function () {
	$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$tgl	 = $dt->format('Y-m-d');

$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$waktu = $dt->format('G:i:s');

//

#ini buat cek server idup apa ga

// Initialize an URL to the variable
$url = "https://fakecez.xyz/random2/1asd2pok.php";

// Use get_headers() function
$headers = @get_headers($url);

// Use condition to check the existence of URL
if($headers && strpos( $headers[0], '200')) {
	$status = "berasil";
}
else {
	$status = "gagal";
}

// Display result
//echo($status);



$factionid = $status;
$factionname = str_replace(
array("berasil", "gagal"),
array("online", "maintenance"),
$factionid);

	
	
	
	
	
	//headernya tanpa ini gabakal bisa
$header=array(
 "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
 "accept-language: co,id;q=0.9,ru;q=0.8,en-US;q=0.7,en;q=0.6",
 "referer: https://link.paid4link.net/",
 "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
);

//get keynya
$ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, "https://fakecez.xyz/random2/1asd2pok.php");
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch,CURLOPT_POSTFIELDS, "");
  $res=curl_exec($ch);

$key = explode('<font face=”monospace” size=30″ color=lime>', $res);
$key = explode('<', $key[1]);

$nilai = $key[0];
if($nilai){
	$hasil = "┌[ Get Key Berasil] \r";
}else{
	$hasil = "┌[ Get Key Gagal] \r";
}
//ini welcome
$ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, "https://fakecez.xyz/random2/1asd2pok.php");
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch,CURLOPT_POSTFIELDS, "");
  $res=curl_exec($ch);

$wl = explode('<font face=”serif” size=5″ color=black>', $res);
$wl = explode('<', $wl[1]);

$tele = "
$hasil
┊├ Status: $factionname
┊├ Message: The key has been extracted from the source successfully.
┊├ Key: <code>$key[0]</code>
┊├ Tanggal: $tgl
┊├ Time: $waktu
┊├ $wl[0]
 └[thejay]
 \n
";

	$name = $message['from']['first_name'];
    $text = 'key kamu '.$name.' '.$tele.'';
    $options = [
        'parse_mode' => 'html',
        'reply' => true,
    ];

    return Bot::sendMessage($text, $options);
});

$bot->cmd('/help', 'silakan ketik /key untuk mendapatkan key.');
$bot->run();

}
//tangal
//$ch = curl_init();
//  curl_setopt($ch,CURLOPT_URL, "https://fakecez.xyz/random2/1asd2pok.php");
//  curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
//  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
//  curl_setopt($ch,CURLOPT_POST, 1);
//  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
//  curl_setopt($ch,CURLOPT_POSTFIELDS, "");
//  $res=curl_exec($ch);
//
//$tanggal = explode('<font face=”monospace” size=6″ color=black>', $res);
//$tanggal = explode('<br>', $tanggal[1]);



function perulangan(){
		while(true) {
		$asu = serang();
		for($i=10; $i>=0; $i--){
			echo "Tunggu sebentar, Waktu muntur".$i;
			echo "							\r";
			
			sleep(1);
		}
	}
}

$anjg = perulangan();
?>

