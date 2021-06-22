<?php

# Define MySQL Settings

$conn = mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."")or die("can't connect");;
$db_selected=mysql_select_db("".MYSQL_DB."",$conn)or die("can't select db");;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Data Logs</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link href="stylegreen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outerwrapper">

<div id="head">
     <div id="topbar">
        <div id="identity">
	       <h1><a href='#'>Data Logs</a></h1>
>
	       
</div><!-- end of identity -->

 <div id="logo">
      
   </div><!-- end of logo -->
   <div id="navigation">
      <div id="navbar_link">
        

      </div><!-- end of navbar_link -->
      </div><!-- end of navigation -->
  </div><!-- end of head -->
       
   
  

  <div id="innerwrapper">
     <div id="content">
     			<form name="cleardata" method=post>
Click Here To Delete Logs
<input type="submit" name="cc" value="CLEARLOG">
</form>

<?
$cc=$_POST['cc'];
if($cc!=null)
{
$query="Delete from `iot18_405`";

$result=mysql_query($query);

}
?>	
		<table width='100%'>
		<tr><td style="width:70%;white-space:nowrap;vertical-align:top;">
		<table width='80%' style="vertical-align:top">
		

	<td colspan=4><a href="http://iotclouddata.com/iotlog/405/watertankmonitor.rar" download><font color="#046aef">Click here to download apk</font></a></td>

			<tr>
<th class="first">LogID</th>
								
			<th>DATA</th>
											
<th>Logdate</th>
				<th>LogTime</th>				
				
			</tr>
<?
$query="select * from iot18_405";

$result=mysql_query($query);


while($row=mysql_fetch_array($result))
{
?>
                    <tr class="odd">
                  <td  class="first"><?=$row["lid"]?></td>  
                  <td  class="first"><?=$row["data"]?></td> 
  
 		 					
<td><?=$row["ldate"]?></td>  
                  <td><?=$row["ltime"]?></td>
				       						
	
</tr>
<?
}
?>
</table>
</td>
<td>		
				<table width='40%' style="width:40%;white-space:nowrap;vertical-align:top;"><tr>
				<th class="first">Data Analytics</th></tr>
				<tr><td>
				<?	
	$query="select * from iot18_405";

$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
?>
<tr class="odd">
                  <td  class="first"><?=$row["anadata"]?></td>  
				  </tr>

<?				  
}
?>

</td></tr></table>
</td></tr></table>

      	
     </div><!-- end of content -->	
    
  </div><!-- end innerwrapper -->
  
   

<div id="footer">
	
</div><!-- end of footer -->
</div><!-- end of outerwrapper -->
</body>
</html>