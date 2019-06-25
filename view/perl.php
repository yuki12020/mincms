db出力確認
<?php 
//classの呼び出し
include_once "./../class/indexClass.php";
?>
<br><hr>
<?php
$obj=new index();
$select_querry = $obj->perl();
//var_dump($select_querry);
echo "<br>";
foreach($select_querry as $key =>$value){
	$smt.="<a href="."./details.php/?id=".
	htmlspecialchars($value["id"],ENT_QUOTES,'UTF-8').">".$value["keyword"]."</a><br>";
	$smt.= "id:".$value["id"]."<br>";
	$smt.= "件数:".$value["kensu"]."<br>";
	$smt.= "name:".$value["keyword"]."<br>";
	$smt.= "<hr>";	
}
echo $smt;
?>