<?php
ini_set("max_execution_time", 0); set_time_limit(0);
if (isset($_POST["url"])){
	$url=$_POST["url"];
	$baseurl=$_POST["url"];
}else{
	$url="";
	$baseurl="";
}
include('simple_html_dom.php');
include('config.php');
$sql ="CREATE TABLE IF NOT EXISTS `link` (
  `url` varchar(400) NOT NULL,
  `depth` int(11) NOT NULL,
  `id_site` int(11) NOT NULL,
  PRIMARY KEY (`url`)
)";

$sql2 ="CREATE TABLE IF NOT EXISTS `image` (
  `url` varchar(400) NOT NULL,
  `alt` varchar(400) NOT NULL,
  `id_site` int(11) NOT NULL,
  PRIMARY KEY (`url`)
)";

$sql3 ="CREATE TABLE IF NOT EXISTS `script` (
  `url` varchar(400) NOT NULL,
  `id_site` int(11) NOT NULL,
  PRIMARY KEY (`url`)
)";

$sql4 ="CREATE TABLE IF NOT EXISTS `style` (
  `url` varchar(400) NOT NULL,
  `id_site` int(11) NOT NULL,
  PRIMARY KEY (`url`)
)";
if (!mysql_query($sql,$con)){die('Error, check database information: ' . mysql_error());}else{}
if (!mysql_query($sql2,$con)){die('Error, check database information: ' . mysql_error());}else{}
if (!mysql_query($sql3,$con)){die('Error, check database information: ' . mysql_error());}else{}
if (!mysql_query($sql4,$con)){die('Error, check database information: ' . mysql_error());}else{}
$sql ="DELETE FROM `link`";
if (!mysql_query($sql,$con)){die('Error, check database information: ' . mysql_error());}else{}
$sql ="DELETE FROM `script`";
if (!mysql_query($sql,$con)){die('Error, check database information: ' . mysql_error());}else{}
$sql ="DELETE FROM `style`";
if (!mysql_query($sql,$con)){die('Error, check database information: ' . mysql_error());}else{}
$sql ="DELETE FROM `image`";
if (!mysql_query($sql,$con)){die('Error, check database information: ' . mysql_error());}else{}

$id_site = "1";
/*$sql ="SELECT MAX(id_site) FROM `link`";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)) {
		$id_site=$row['MAX(id_site)']+1;
	}*/

$depth="0";
if (isset($_POST["maxrec"])){
	$maxrec=$_POST["maxrec"];
}else{
	$maxrec="0";	
}
if (isset($_POST["separator"])){
	$separator=$_POST["separator"];
}else{
	$separator="";	
}

if (isset($_POST["prefix"])){
	$prefix=$_POST["prefix"];
}else{
	$prefix="";	
}
?>
<?php
function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Website Scrape Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-last.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
<script type="text/javascript" src="js/table2CSV.js"></script>
<script>
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
		
		$("#myTable2").tablesorter(); 
		
		$("#myTable3").tablesorter(); 
		
		$("#myTable4").tablesorter(); 
    } 
); 

</script>
<script>
function show()
{
$('#myTable').table2CSV();
}
function show2()
{
$('#myTable').table2CSV();
}
function show3()
{
$('#myTable').table2CSV();
}
function show3()
{
$('#myTable').table2CSV();
}
</script>
<style>
table {
table-layout:fixed;
width:100%;
border:1px solid #CCC;
word-wrap:break-word;
background:#ccc;
}
td {
background: #FFF;
}
.high{
	background-color:#FF6 !important;	
}
th{
	cursor:pointer;	
}


</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="span12" style="margin:0 auto;float: none;">
<h1>Scrape WebSite Generator</h1>
<form action="" method="post">
URL (eg: <strong>http://www.example.com</strong>, remember <strong>no</strong> final <strong>/</strong>): <input style="padding:5px;width:300px;" type="text" name="url" value="<?php print $url; ?>"><br />
<br />

Separator (eg: <strong>.post-text p</strong>): <input style="padding:5px;width:300px;" type="text" name="separator" value="<?php print $separator; ?>"><br />
<br />

Prefix (eg: <strong>www.</strong> use only if site use www. ): <input style="padding:5px;width:300px;" type="text" name="prefix" value="<?php print $prefix; ?>"><br />
<br />

Max level recursion (0=only home page, 1=home page link): <input style="padding:5px;width:50px;" type="number" name="maxrec" value="<?php print $maxrec; ?>">
<br />
<br />
<input style="" type="submit" value="Generate Information" class="btn btn-primary">
</form>
<?php
if ($url!=""){
	scrap($url,$id_site,$baseurl,$depth,$maxrec,$prefix);
	?>
<br>
<br>
Click on the table header to sort.<br>
Yellow cell can be an error, please check.
<br>
<br>

<table id="myTable" class="tablesorter table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>URL</th>
      <th>Headers</th>
      <th>Title</th>
      <th>Description</th>
      <th>H1</th>
      <th>H2</th>
      <th>H3</th>
      <?php if ($separator!="") {
      print "<th>Separator</th>";
	  } ?>
     <!-- <th>Image src</th>
      <th>Image alt</th>
      <th>Script</th>
      <th>Style</th>-->
    </tr>
  </thead>
  <tbody>
  
  <?php
	$sql ="SELECT * FROM `link` WHERE `id_site`='$id_site';";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	while($row = mysql_fetch_array($result)) {
		$html = file_get_html($row['url']);	
		if (!$html) {
		}else{
		print "<tr><td>".$row['url']."</td>";
		$header = (get_headers($row['url']));
		print "<td>". $header[0] ."</td>";
		
		$title = @array_shift($html->find('title'))->innertext;
		echo "<td";
		if ($title==""){print " class='high' ";}
		print ">".$title."</td>";
		$descr = @array_shift($html->find("meta[name='description']"))->content;
		echo "<td";
		if ($descr==""){print " class='high' ";}
		print ">".$descr."</td>";
		
		echo "<td>";
		foreach($html->find('h1') as $e){
			print $e->innertext."<br /><br />";
		}
		echo "</td>";
		
		echo "<td>";
		foreach($html->find('h2') as $e){
			print $e->innertext."<br /><br />";
		}
		echo "</td>";
		
		echo "<td>";
		foreach($html->find('h3') as $e){
			print $e->innertext."<br /><br />";
		}
		echo "</td>";
		
		if ($separator!="") {
			echo "<td>";
			foreach($html->find($separator) as $e){
				print $e->innertext."<br /><br />";
			}
			echo "</td>"; 
		}
		
		//echo "<td>";
		foreach($html->find('img') as $e){
			//print $e->src."<br />";
			$continue2 = controllink($e->src,$url,$baseurl,$prefix);
			$sql ="INSERT IGNORE INTO `image` SET `url` = '".$continue2."',`alt` = '".mysqli_real_escape_string($e->alt)."', `id_site`='$id_site';";
			if (!mysql_query($sql,$con))
			{
			 die('Error: ' . mysql_error());
			}else{
			 //print 'Success'  ;  
			}
		}
		//echo "</td>";
		
		//echo "<td>";
		foreach($html->find('img') as $e){
			//print $e->alt."<br />";
		}
		//echo "</td>";
		
		//echo "<td>";
		foreach($html->find('script') as $e){
			//print $e->src."<br /><br />";
			$continue2 = controllink($e->src,$url,$baseurl,$prefix);
			$sql ="INSERT IGNORE INTO `script` SET `url` = '".mysqli_real_escape_string($continue2)."', `id_site`='$id_site';";
			if (!mysql_query($sql,$con))
			{
			 die('Error: ' . mysql_error());
			}else{
			 //print 'Success'  ;  
			}
		}
		//echo "</td>";
		
		//echo "<td>";
		foreach($html->find('<link') as $e){
			//print $e->href."<br /><br />";
			$continue2 = controllink($e->href,$url,$baseurl,$prefix);
			$sql ="INSERT IGNORE INTO `style` SET `url` = '".mysqli_real_escape_string($continue2)."', `id_site`='$id_site';";
			if (!mysql_query($sql,$con))
			{
			 die('Error: ' . mysql_error());
			}else{
			 //print 'Success'  ;  
			}
		}
		//echo "</td>";
		echo "</tr>";
		}
	}
	?>
	</tbody>
</table>
<input value="Export as CSV" type="button" class="btn btn-info" onclick="show()">



<h1>Style</h1>
<table id="myTable2" class="tablesorter table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>URL</th>
      <th>Headers</th>
      <th>Filesize</th>
    </tr>
  </thead>
  <tbody>
  
<?php  
  $sql ="SELECT * FROM `style` WHERE `id_site`='$id_site';";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	while($row = mysql_fetch_array($result)) {
		$ext = strtolower(pathinfo($row['url'], PATHINFO_EXTENSION));
		if ($row['url']!="" && $ext=="css"){
			$html = file_get_html($row['url']);	
			print "<tr><td>".$row['url']."</td>";
			$header = (get_headers($row['url']));
			print "<td>". $header[0] ."</td>";
			print "<td>". $header[8] ."</td>";
			print "</tr>";
		}
	}
  
  ?>
  </tbody>
</table>
<input value="Export as CSV" type="button" class="btn btn-info" onclick="show2()">



<h1>Script</h1>
<table id="myTable3" class="tablesorter table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>URL</th>
      <th>Headers</th>
      <th>Filesize</th>
    </tr>
  </thead>
  <tbody>
  
<?php  
  $sql ="SELECT * FROM `script` WHERE `id_site`='$id_site';";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	while($row = mysql_fetch_array($result)) {
		if ($row['url']!="" && $row['url']!=$url){
			$html = file_get_html($row['url']);	
			print "<tr><td>".$row['url']."</td>";
			$header = (get_headers($row['url']));
			print "<td>". $header[0] ."</td>";
			print "<td>". @$header[8] ."</td>";
			print "</tr>";
		}
	}
  
  ?>
  </tbody>
</table>
<input value="Export as CSV" type="button" class="btn btn-info" onclick="show3()">



<h1>Image</h1>
<table id="myTable4" class="tablesorter table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>URL</th>
      <th>Headers</th>
      <th>Alt</th>
      <th>Filesize</th>
    </tr>
  </thead>
  <tbody>
  
<?php  
  $sql ="SELECT * FROM `image` WHERE `id_site`='$id_site';";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	while($row = mysql_fetch_array($result)) {
		if ($row['url']!=""){
			$html = file_get_html($row['url']);	
			print "<tr><td>".$row['url']."</td>";
			$header = (get_headers($row['url']));
			print "<td>". $header[0] ."</td>";
			echo "<td";
			if ($row['alt']==""){print " class='high' ";}
			print ">".$row['alt']."</td>";
			print "<td>". $header[8] ."</td>";
			print "</tr>";
		}
	}
  
  ?>
  </tbody>
</table>
<input value="Export as CSV" type="button" class="btn btn-info" onclick="show4()">
	<?php
}

function controllink($check,$url,$baseurl,$prefix){
	if (((substr($check,0,7))!="http://") && ((substr($check,0,2))!="//") && ((substr($check,0,8))!="https://")){//controllo se non ha l'url, so che è un link interno
		$check = str_replace("http://www.", "", $check);
		$check = str_replace("http://", "", $check);
		$check = str_replace("www.", "", $check);
		$url = str_replace("http://www.", "", $url);
		$url = str_replace("http://", "", $url);
		$url = str_replace("www.", "", $url);
		//if (strpos("#",$check)){
		if(preg_match('/#/',$check)){
			return "";	
		}else{
			return $baseurl.$check;
		}
	}else{
		$check = str_replace("http://www.", "", $check);
		$check = str_replace("http://", "", $check);
		$check = str_replace("www.", "", $check);
		$url = str_replace("http://www.", "", $url);
		$url = str_replace("http://", "", $url);
		$url = str_replace("www.", "", $url);
		//print $url . $check . "<br>";
		if (stristr($check,$url)){	
			if(!preg_match('/#/',$check)){
				return "http://".$prefix.$check;
			}
		}else{
			return "";	
		}
	}
}

function scrap($url,$id_site,$baseurl,$depth,$maxrec,$prefix){
	$html = file_get_html($url);	
	$i=0;
	foreach($html->find('a') as $e){
		$check[$i] = $e->href;
		$i++;
	}

	foreach( $check as $check){
		$continue = controllink($check,$url,$baseurl,$prefix);
			if ($continue!=""){//se il link è interno e da seguire
				//print "<br>".$continue;
				include('config.php');
				$sql ="INSERT IGNORE INTO `link` SET `url` = '".mysqli_real_escape_string($continue)."', `depth` ='$depth', `id_site`='$id_site';";
				if (!mysql_query($sql,$con))
				  {
				  die('Error: ' . mysql_error());
				  }else{
					//print 'Success'  ;  
				  }
			}
	}
	$depth++;//finito primo ciclo
	
	if ($depth<=$maxrec){
		$sql ="SELECT * FROM `link` WHERE `depth` ='".($depth-1)."' AND `id_site`='$id_site';";
		$result = mysql_query($sql);
		$num_rows = mysql_num_rows($result);
		while($row = mysql_fetch_array($result)) {
			//print '<br>Scraping: ' . $row['url'] ;  
			scrap($row['url'],$id_site,$baseurl,$depth,$maxrec,$prefix);
		}
	}
}
?>
</div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>