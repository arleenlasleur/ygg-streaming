<?php
$we = $_SERVER["PHP_SELF"];
$latest_filename = "";
$path = "*.jpg";
//$path = "../yggstream/*.jpg";
$latest_ctime = 0;
$files = glob($path);
foreach($files as $file){
   if(is_file($file) && filectime($file) > $latest_ctime){
      $latest_ctime = filectime($file);
      $latest_filename = $file;
   }
}
//$latest_filename = str_replace("../yggstream/","",$latest_filename);
if(isset($_GET["file"])){
   echo $latest_filename;
}else{
   $text = file_get_contents("index.txt");
   $text = str_replace("{{PHP_WE}}",$we,$text);;
   echo $text;
}
?>
