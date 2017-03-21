<?php 
// require_once '../lib/upload.func.php';
// require_once '../lib/images.func.php';
// require_once '../lib/string.func.php';
require_once '../include.php';
header("content-type:text/html;charset=utf-8");

// echo uploadFile();
 // print_r(buildInfo()) ;
// print_r(uploadFile()) ;
// $path="./uploads";
// $uploadFiles=uploadFile();
// print_r($uploadFiles);
// if(is_array($uploadFiles)&&$uploadFiles){
// 	foreach($uploadFiles as $key=>$uploadFile){
// 		print_r($uploadFile);
// 		echo $path."/".$uploadFile['name'];
// 				 thumb($path."/".$uploadFile['name'],"../image_50/".$uploadFile['name'],50,50);
// 				 thumb($path."/".$uploadFile['name'],"../image_220/".$uploadFile['name'],220,220);
// 				 thumb($path."/".$uploadFile['name'],"../image_350/".$uploadFile['name'],350,350);
// 				 thumb($path."/".$uploadFile['name'],"../image_800/".$uploadFile['name'],800,800);
// 	}
// }
print_r(addPro());


function connect(){

加上

global $link;

function insert($table,$array){

加上

global $link;

以下使用 面向过程

mysqli_query($link, $sql);

return mysqli_insert_id($link);





