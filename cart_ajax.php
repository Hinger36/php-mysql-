<?php  
/** 
 * 
 *
 */  
require_once 'include.php';  

  
//接受cart.php的数据  
if ($_POST) {  
    $id = $_POST['id'];  
    $num = $_POST['num'];  
    $retureInfo = array(  
        'status' => 0,  
        'info' => '修改商品数量失败'  
    );  
    $sql = "UPDATE `life_glist` SET num='{$num}' WHERE `id`={$id}";  
    mysqli_query($link,$sql);  
    $row = mysqli_affected_rows($link);  
    if ($row == 1) {  
        $retureInfo['status'] = 1;  
        $retureInfo['info'] = '修改商品数量成功';  
    }  
    echo json_encode($retureInfo);  
}  