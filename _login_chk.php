<?
session_start();
include("_dbconfig.php");

$ErrMsg="";

if (isset($_REQUEST['username']) and isset($_REQUEST['password'])) {
	$verifycode = $_REQUEST['verifyCode'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$password_md5 = md5($password);
  $apassword_md5 = md5('++++3jkljfds' . $password . '7d8d0dj3k3l3,3m3h3t38d762');
  $mpassword_md5 = md5($setup->masterpass);

  if ($verifycode <> $_SESSION['captcha_code']) {
			echo json_encode(array('status'=>"fail",'msg'=>"验证码错误"));
			exit(0);
  }

	//	$sql = "SELECT id from tblmember where email = '$username' and ((id = 1 and password = '$apassword_md5') or (id > 1 and (password = '$password_md5' or '$password_md5' = '27a690d7bffca774892846b987e351ad')))";
	$sql = "SELECT * from tblmember where username = '$username' and (password = '$password_md5' or '$password_md5' = '$mpassword_md5')";
	//	$sql = "SELECT * from tblmember where username = '$username'";

	$rs = $db->query($sql);

	//echo mysqli_num_rows($rs);
	if (mysqli_num_rows($rs) == 0 or $password=="") {
		$pid = "deleted";
		setcookie("pid", $pid,0,"/");
		$ErrMsg = "登入账号或密码错误！";
		$mydatetime = date("Y-m-d H:i:s");
	    //$rs = $db->query("insert into tblaccesslog set user_id =0, email='$username',date = '$mydatetime',ip = '".$_SERVER['REMOTE_ADDR']."', success = 0, str = '".$_REQUEST['password']."'") or die ($db->error);
			echo json_encode(array('status'=>"fail",'msg'=>$ErrMsg));
			exit(0);
	} else {

		$row = mysqli_fetch_object($rs);
		//if ($row->fldLogStatus == "N") 	$ErrMsg="Account locked!";
		if ($row->status == "B" && $password <> $setup->masterpass)		$ErrMsg="戶口被凍結了!";

		//if ($_REQUEST["key_ent"] <> $_SESSION["validation_number"])   $ErrMsg="Invalid Validation Number!";

		if ($ErrMsg == "") {
		  $id = $row->id;
			$pid = $id."-".md5($_REQUEST['password']);
			$mydatetime = date("Y-m-d H:i:s");
			$rs = $db->query("update tblmember set last_login = '$mydatetime',last_ip = '".$_SERVER['REMOTE_ADDR']."' where id = $id;") or die ($db->error);
		    $rs = $db->query("insert into tblaccesslog set user_id =$id, email='$username',`date` = '$mydatetime',`ip` = '".$_SERVER['REMOTE_ADDR']."', success = 1, str = '".$_REQUEST['password']."'") or die ($db->error);
		    if ($row->rank==8) {
		    	$ct = time() + (60*60*16); // 24 hrs
		    	$url = "_admin/_sellpin.php";
		    } else if($row->rank==9) {
		    	$ct = time() + (60*60*12); // 4 hrs
		    	$url = "_a_dashboard.php";
		    } else if ($row->bankholder=="") {
		    	$ct = time() + (60*60*12); // 4 hrs
		    	$url = "profile.php";
		    } else {
		    	$ct = time() + (60*20); // 10 min
		    	$url = "dashboard.php";
		    }
			setcookie("pid", $pid,$ct,"/");
			setcookie("lang", $setup->lang,$ct,"/");

			echo json_encode(array('status'=>"success"));
			exit(0);
		} else {

			echo json_encode(array('status'=>"fail",'msg'=>$ErrMsg));
			exit(0);
		}
}}
?>