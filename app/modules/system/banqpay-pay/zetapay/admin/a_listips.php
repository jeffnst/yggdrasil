<?
	$n1 = $n2 = 0;
	if ( preg_match("/delete/i", $_POST['change3']) ){
		$qr1 = mysql_query("SELECT * FROM zetapay_blocked_ip");
		$max = 0;
		while ($d = mysql_fetch_object($qr1)){
			$key = $_POST["delete{$d->id}"];
			if($key){
				if($d->ip == $key){
					$id=$d->id;
					@mysql_query("DELETE FROM zetapay_blocked_ip WHERE id=$id");
					echo "{$d->ip} was deleted<bR>";
					$uC++;
				}
			}
		}
	}
	if ($_POST['change3']){
		$qr1 = mysql_query("SELECT * FROM zetapay_blocked_ip");
		$max = 0;
		while ($a = mysql_fetch_object($qr1)){
			$x[$a->id] = 1;
			if ($a->id > $max) $max = $a->id;
			if (preg_match("/update/i", $_POST['change3'])){
				$query = "UPDATE zetapay_blocked_ip SET ip='".addslashes($_POST["ip$a->id"])."' WHERE id=$a->id";
				mysql_query($query) or die( mysql_error()."<br>$query<br>" );
			}
		}
		for ($i = 0; $i <= $max; $i++){
			if (!$x[$i]) break;
			$sel_id = $i;
		}
	}
	if (preg_match("/add/i", $_POST['change8']) && $_POST['ip_new'] != ''){
		$query = "INSERT INTO zetapay_blocked_ip SET ip='".addslashes($_POST["ip_new"])."'";
		mysql_query($query) or die( mysql_error()."<BR>$query<br>");
	}
?>
<!------///////////////--->
<div class="titlebar" style="width:50%;height:20px;padding-left:10px;padding-top:5px;color: white;"><b>
Blocked IPs
</b></div>
<!------///////////////--->
<TABLE width=100% cellspacing=0>
<tr>
	<td style="padding-left:10px;">&nbsp;</td>
	<TD>
		<TABLE class=design width=90% cellspacing=0>
		<FORM name=form1 method=post>
<?
//		mysql_query("DELETE FROM zetapay_blocked_ip WHERE ip='';");
		$qr1 = mysql_query("SELECT * FROM zetapay_blocked_ip ORDER BY id ASC");
		$qr2 = mysql_query("SELECT * FROM zetapay_blocked_ip ORDER BY id ASC");
		$itotal = 0;
		for ($i = mysql_num_rows($qr2) - 1; $i >= 0; $i--){
//			if (mysql_result($qr2, $i, 'ip')){
				$itotal++;
//			}
		}
		$i = 1;
		while ($a = mysql_fetch_object($qr1)){
			if ($hdr){
				$ip = $hdr." - ".$a->ip;
			}else{
				$ip = $a->ip;
			}
			$kname = $a->ip;
?>
<TR>
	<TD width=15><input type=checkbox name="delete<?=$a->id?>" value="<?=$kname?>">
	<TD width=15><?=$i?></TD> 
	<TD><input type=text name=ip<?=$a->id?> size=50 value="<?=htmlspecialchars($a->ip)?>"></TD>
		<input type="hidden" name="parent<?=$a->id?>" value="<?=$a->parent?>">
		<input type="hidden" name="akey<?=$a->id?>" value="<?=$a->akey?>">
<?
			$i++;
		}
?>
	<input type="hidden" name="itotal" value="<?=$itotal?>">
<TR><TH colspan=4><P align=center><input type=submit name=change3 value="Update">
	<input type=submit name=change3 value="Delete selected" <?=$del_confirm?>></TH></TR>
	<INPUT type=hidden name=up>
	<INPUT type=hidden name=down>
	<input type="hidden" name="nextid" value="<?if(!$itotal){$nextid=0;}else{$nextid=$itotal;}echo $nextid;?>">
	<input type="hidden" name="suid" value="<?=$suid;?>">
<TR>
	<TD width=15>&nbsp;</TD>
	<TD><?=$i?></TD>
	<TD><input type=text name=ip_new size=30></TD>
	</TD></TR>
<TR><TH colspan=4><input type=submit name=change8 value="Add new IP"></TH></TR>
</FORM>
</TABLE>
</td></tr>
</table>
</CENTER>