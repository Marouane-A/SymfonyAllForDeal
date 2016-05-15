<?php $word = $_GET['mot'] ;
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("tec",$con);
$req="SELECT * FROM service where nomService like '%".$word."%'";
$data=mysql_query($req);
?>
<table>
<?php 
while ($row = mysql_fetch_array($data))
{
	

	echo $row['type'];

}
?>