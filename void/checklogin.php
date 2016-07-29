<?php
function checklogin($password) {
$db = mysqli_connect("localhost", "root", "naoko", "folio");
		
	if (!$db) {
		return 2;
	}
	
	$password = sha1($password);
	$result = mysqli_query($db,"SELECT * FROM pwd");
	if (!$result) {
		return FALSE;
	} else {
		$real = mysqli_fetch_assoc($result);
		if ($real['code'] == $password) {
		  return TRUE;
		}
	}
	return FALSE;
}
?>