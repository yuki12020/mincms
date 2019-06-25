<?php
//db接続用のファイル
include dirname(__FILE__) ."./../conf/db_connect.php";
?>
<?php
class index{
	
	public function perl(){
	global $db;
	$sql .="select * from perl";
	$sql .=" where true ";		
	#クエリの実行
	$info = $db->query($sql);	
	#データベースのデータを全て取得fetchAll(PDO::FETCH_ASSOC);
	#データベースのデータを1行取得fetchColumn();
	$results = $info->fetchAll(PDO::FETCH_ASSOC);	
	return $results;
	}

	public function select_detail($id){
	global $db; //includeの＄ｄｂ変数取得
	$sql="select * from perl where id=".$id;
	$info= $db->query($sql);
	$results= $info->fetchAll(PDO::FETCH_ASSOC);
	return $results;		
	}	
	
	
}
?>