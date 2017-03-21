<?php
/**
 * 连接数据库
 * @return resource
 */
// require_once '../configs/configs.php';
function connect(){
	global $link;
	$link=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
	if (!$link) {
   		die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
	}
	// echo 'Success... ' . mysqli_get_host_info($link) . "\n";
	// print_r($link);
	mysqli_set_charset($link,DB_CHARSET);
	return $link;
}
// connect();
// if(!connect()) {
// 	echo "error";
// }
/**
 * 完成记录插入的操作
 * @param string $table
 * @param array $array
 * @return number
 */
function insert($table,$array){
	$link=connect();
	global $link;
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert {$table}($keys) values({$vals})";
	mysqli_query($link,$sql);
	return mysqli_insert_id($link);
}
//update life_admin set username='king' where id=1
/**
 * 记录的更新操作
 * @param string $table
 * @param array $array
 * @param string $where
 * @return number
 */
function update($table,$array,$where=null){
	$link=connect();
	foreach($array as $key=>$val){
		if($str==null){
			$sep="";
		}else{
			$sep=",";
		}
		$str.=$sep.$key."='".$val."'";
	}
	$sql="update {$table} set {$str} ".($where==null?null:" where ".$where);
	$result=mysqli_query($link,$sql);
	//var_dump($result);
	//var_dump(mysql_affected_rows());exit;
	if($result){
		return mysqli_affected_rows($link);
	}else{
		return false;
	}
}

/**
 *	删除记录
 * @param string $table
 * @param string $where
 * @return number
 */
function delete($table,$where=null){
	$where=$where==null?null:" where ".$where;
	$sql="delete from {$table} {$where}";
	$link=connect();
	mysqli_query($link,$sql);
	return mysqli_affected_rows($link);
}

/**
 *得到指定一条记录
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchOne($sql,$result_type=MYSQL_ASSOC){
	// $sql = "select * from life_admin";
	$link=connect();
	$result=mysqli_query($link,$sql);
	// print_r($result);
	$row=mysqli_fetch_array($result,$result_type);
	return $row;
	// print_r($result);
}
// fetchOne("select * from life_admin where username='{\finger}' and password='{e7efda40b1c94805070cd9bf9638ae27}'",$result_type);

/**
 * 得到结果集中所有记录 ...
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchAll($sql,$result_type=MYSQL_ASSOC){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while(@$row=mysqli_fetch_array($result,$result_type)){
		$rows[]=$row;
	}
	return $rows;
}

/**
 * 得到结果集中的记录条数
 * @param unknown_type $sql
 * @return number
 */
function getResultNum($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	return mysqli_num_rows($result);
}

/**
 * 得到上一步插入记录的ID号
 * @return number
 */
function getInsertId(){
	
	return mysqli_insert_id(connect());
}



?>