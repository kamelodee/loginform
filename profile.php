<?php
if (isset($_POST['reg_user'])) {
    require "includes/dbh.php";
$id=$_SESSION['userid'];
$result3 = mysql_query("SELECT * FROM users where userid='$id'");
while($row3 = mysql_fetch_array($result3))
{ 
$userName=$row3['userName'];
$userEmail=$row3['userEmail'];

}}
?>

<table style={color:#fff} width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">FullName:</div></td>
    <td width="165" valign="top"><?php echo $userName ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $userEmail ?></td>
  </tr>
  
</table>
<p align="center"><a href="index.php"></a></p>

