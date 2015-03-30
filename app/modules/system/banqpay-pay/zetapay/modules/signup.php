<?
if ($_POST['signup']){
	$posterr = 0;

	if($useturingnumber){
		if( $_SESSION['noautomationcode'] != $_POST['thecode'] ){
			errform('The Turing Number code does not match', 'thecode'); // #err
		}
	}
	// Check if it exists
	if ($_POST['email']){
        $rs = $zetadb->Execute("SELECT id FROM ".TBL_SYSTEM_USERS." WHERE email='".addslashes($_POST['email'])."'");
		$r = $rs->FetchNextObject();
		if ($r){
			errform('The email already exists. Please signup with another email address.', 'email'); // #err
		}
	}
	$newpass = $_POST['new_password'];
	$newpass2 = $_POST['new_password2'];
	if( $newpass != $newpass2 ){
		errform('the password must match what you re-type'); // #err
	}

	if(!$allow_same_ip){
		if(!isset($_GET["ipaddress"]) || ($_GET["ipaddress"] == "")) {
			$ipaddress = $_SERVER['REMOTE_ADDR'];
			$local = 1;
		} else {
			$ipaddress = $_GET["ipaddress"];
			$local = 0;
		}
		if($ipaddress){
			$rs = $zetadb->Execute("SELECT ipaddress FROM ".TBL_SYSTEM_SIGNUPS." WHERE ipaddress='$ipaddress'");
            $qr = $rs->FetchNextObject();
			if ($qr) {
				errform('A user has already signed up from the same IP as you.', 'email'); // #err
			} else {
				$rs = $zetadb->Execute("SELECT ipaddress FROM ".TBL_SYSTEM_USERS." WHERE (ipaddress='$ipaddress' OR lastip='$ipaddress')");
                $qr = $rs->FetchNextObject();
				if ($qr) {
					errform('A user has already signed up from the same IP as you.', 'email'); // #err
				}
			}
		}
	}

	// Check email
	if (!email_check($_POST['email']) ){
		errform('You have entered an invalid email address', 'email'); // #err
	}

	// Check if email exists
	if (!$allow_same_email && !$posterr){
		$rs = $zetadb->Execute("SELECT id FROM ".TBL_SYSTEM_USERS." WHERE email='".addslashes($_POST['email'])."'");
        $r = $rs->FetchNextObject();
		if ($r){
			errform('The email address you supplied is already registered in the database.', 'email'); // #err
		}
	}
}

if ($_POST['signup'] && !$posterr){
	$password = $_POST['new_password'];
    $password=md5($password); //encrypt the password
	if(!isset($_GET["ipaddress"]) || ($_GET["ipaddress"] == "")) {
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		$local = 1;
	} else {
		$ipaddress = $_GET["ipaddress"];
		$local = 0;
	}
	$rs = $zetadb->Execute("SELECT id FROM ".TBL_SYSTEM_USERS." WHERE id='".addslashes($_POST['r'])."'");
    $r = $rs->FetchNextObject();
	$referred = ($r ? $r : "NULL");

	$uid = substr( md5(time()), 8, 16 );

	$pincode = CreatePincode();
#	$password = CreatePassword();
	$zetadb->Execute("INSERT INTO ".TBL_SYSTEM_SIGNUPS." SET
					id='$uid',
					email='{$_POST['email']}',
					pin='$pincode',
					password='$password',
					expire=DATE_ADD(NOW(),INTERVAL 3 DAY),
					referredby=$referred,
					ipaddress='$ipaddress'");
	$info = $_POST['email']."%%".$pincode;
	wrapmail(	$_POST['email'], "Confirm E-mail for $sitename", $emailtop.gettemplate("email_signup", "$siteurl/zetapay/module/confirm.php?id=$uid",$info,$password).$emailbottom,$defaultmail);
  	prpage("html_signup");
} else {
	if($_GET['semail'])$_POST['email']=$_GET['semail'];
?>
<table width="100%" border="0" align="center" bgcolor="#FFFFFF">
<tr>
	<td>
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
		<tr>
			<td width=20> </td>
			<td width="100%" valign="top">
				<table width="100%" border="0" cellspacing="0" cellpadding="3">
				<tr>
					<td>
						<span class="text4">Create&nbsp;an&nbsp;account</span><br>
						<hr width="100%" size="1"></hr><br>
					</td>
				</tr>
				<tr>
					<td>
						<table width="100%" cellpadding=0 cellspacing=0 border=0 align=center>
						<tr valign=top>
							<td width="100%" align="left">
								<br>
								<CENTER>
								<table width="100%" border="0" align="center">
								<tr align="center" valign="top">
									<td>
										<table width="100%" border="0" cellpadding="0" cellspacing="2" class=design>
										<tr valign="top">
											<td><b>1</td>
											<td><div class=tiny style='font-face:verdana'>
												Fill out the form to the right and submit your information. All fields are required.
											</td>
										</tr>
										<tr>
											<td></td><td><hr></td>
										</tr>
<?
//										<tr valign="top">
//											<td><b>2</td>
//											<td><div class=tiny style='font-face:verdana'>
//												Wait for the confirmation email to be sent to you. Once you receive it, click the link
//												in the email to be transferred to the confirmation page. Enter the PIN code that we
//												assigned to you in the email.
//											</font></td>
//										</tr>
//										<tr>
//											<td></td><td><hr></td>
//										</tr>
?>
										<tr valign="top">
											<td><b>2</td>
											<td><div class=tiny style='font-face:verdana'>
												Use the login box at the top-left of the site to login to your account.
											</font></td>
										</tr>
										<tr>
											<td></td><td><hr></td>
										</tr>
<?                                        
//										<tr valign="top">
//											<td><b>4</td>
//											<td><div class=tiny style='font-face:verdana'>
//												Once logged in, change your	pincode to something you will remember but is secure.
//											</font></td>
//										</tr>
//
//										<tr>
//											<td></td><td><hr></td>
//										</tr>
?>
										<tr valign="top">
											<td><b>3</td>
											<td><div class=tiny style='font-face:verdana'>
												Use the navigation in the member's area to fund your account and to
												your transactions. It's that simple!
											</font></td>
										</tr>
										</table>
									</td>
									<td valign=top width=60%><center>
										<TABLE class=design cellspacing=0 width=85%>
										<FORM method=post>
										<TR><TH colspan=2>New Registration</TH></TR>
										<TR>
											<TD valign=top>
												Email:<BR>
												<span class=tiny>(<a href=index.php?read=privacy.htm&<?=$id?>>Privacy Policy</a>)</span>
											</TD>
											<TD><INPUT type=text name=email size=30 value="<?=htmlspecialchars($_POST['email'])?>"></TD></TR>
										<TR><TD>Password:</TD>
											<TD><INPUT type=password name=new_password size=16 maxLength=16 value="<?=$_POST['new_password']?>"></TD></TR>
										<TR><TD>Re-Type Password:</TD>
											<TD><INPUT type=password name=new_password2 size=16 maxLength=16 value="<?=$_POST['new_password2']?>"></TD></TR>
<?	if($useturingnumber){	?>
										<TR>
											<TD valign=top>
												Turing Number:<br>
											</TD>
											<Td coslpan=2>
												<INPUT type=text name=thecode size=10 maxLength=10 value="">
<?
						$sid	=	session_id();
						if(!$sid){
							session_start();
							$sid	=	session_id();
						}
						$noautomationcode = "";
						for($i=0; $i<5;$i++){
							$noautomationcode = $noautomationcode.rand(0,9);
						}
						//save it in session
						$_SESSION['noautomationcode'] = $noautomationcode;
				?>
												<img src='zetapay/humancheck/humancheck_showcode.php'>
											</td>
<?	}	?>
										<TR>
											<TH colspan=2 class=submit>
												<INPUT type="submit" name=signup class=button value='Sign up >>'>
											</TH>
											<?=($_COOKIE['fastrefer'] ? "<input type=hidden name=r value=\"".htmlspecialchars($_COOKIE['fastrefer'])."\">\n" : "")?>
											<?=$id_post?>
										</TR>
										</FORM>
										</TABLE>
									</td>
								</tr>
								</table>
								</CENTER>
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
<?
	}
?>