<?php 
error_reporting(0);
//mengambil nama form untuk memasukan domain yang ingin di coba
$string = htmlspecialchars($_GET['domain']);

$headers = array( 
                 "Cache-Control: no-cache", 
                ); 
    // persiapkan curl
    $ch = curl_init();

    // set url 
    curl_setopt($ch, CURLOPT_URL, "" . $string);

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl1, CURLOPT_HTTPHEADER, $headers);

    // $output mengluarkan kode di atas
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    if($output) {
    echo '<br/><font color="green">Checking ("</font><font color="black"></font><font color="green">") | Curl Berhasil Di Jalankan</font> </font><font color="black">'.$output.'</font><font color="red"> <br>';
}
else {
echo '<br/><font color="red">Checking ("</font><font color="black">'.$output .'</font><font color="red">") | Curl Tidak Berhasil Di Jalankan</font>';
}

//Copy Right AutoXploCode

?>
