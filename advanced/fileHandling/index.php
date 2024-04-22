<?php
$myFile = fopen("files/webdictionary.txt","r") or die("Unable to open file!");
//echo fread($myFile,filesize("files/webdictionary.txt"));
//echo "<hr>"; 
while(!feof($myFile)){
    echo fgets($myFile)."<br>";
}
fclose($myFile);


$myFile2 = fopen("files/newFile.txt","w") or die("Unable to open file!");
fwrite($myFile2,"Here is some text");
fwrite($myFile2,"asdf\n");
fwrite($myFile2,"asdf");
fclose($myFile2);

echo "<hr>";

$myFile3 = fopen("files/newFile.txt","r") or die("Unable to open file!");
//echo fread($myFile3,filesize("files/newFile.txt"));
while(!feof($myFile3)){
    echo fgets($myFile3)."<br>";
}
fclose($myFile3);

echo "<hr>";

$txt = "lorem ipsum bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ";
$myFile2a = fopen("files/newFile.txt","w") or die("Unable to open file!");
fwrite($myFile2a,$txt);
fclose($myFile2a);

echo "<hr>";

$myFile2a = fopen("files/newFile.txt","r") or die("Unable to open file!");
echo fread($myFile2a,filesize("files/newFile.txt"));
fclose($myFile2a);
echo "<hr>";

echo "<hr>";

$myFile2a = fopen("files/newFile.txt","a") or die("Unable to open file!");
fwrite($myFile2a,"Hi my name is Pera");
fclose($myFile2a);

$myFile2aa = fopen("files/newFile.txt","r") or die("Unable to open file!");
echo fread($myFile2aa,filesize("files/newFile.txt"));
fclose($myFile2aa);

?>