<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$word = $_GET['mot'] ;
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("tec",$con);
$req="SELECT * FROM service where nomService like '%".$word."%'";

$data=mysql_query($req);

?>
<table>
<?php 
while ($row = mysql_fetch_array($data))
{
$req2="SELECT name FROM classification__collection where id =".$row['type_id'];
$data2=mysql_query($req2);
while ($res2 = mysql_fetch_array($data2))
{
	//echo "   <header class='page-header'><h1>Les services disponibles</h1>
   // </header>";
	echo " <div name='Service' class='box-lg'>";
echo "<legend >Categorie:<label name='type'>".$res2['name']."</label><br></legend>";
}
echo "<label><b>Nom de service :</b></label><label name='nom'>".$row['nomService']."</label><br>";
echo "<label><b>Date d'ajout:</b></label><label name='dateAjout'>".$row['dateAjout']."</label><br>";
$req1="SELECT nom FROM zone where id =".$row['zone_id'];
$data1=mysql_query($req1);

while ($res = mysql_fetch_array($data1))
{
echo "<label><b>Gouvernerat:</b></label><label name='zone'>".$res['nom']."</label><br>";
}
echo" <label><b>Etat:</b></label><label name='etat'>".$row['etat']."</label><br>";

//echo  "<a class='btn btn-lg btn-ghost btn-black' href='modifier/" .$row['id']."'>Modifier</a>";
//echo "<a class='btn btn-lg btn-ghost btn-black' href='/supprimer/".$row['id']."'>Supprimer</a>";
echo "<a class='btn btn-lg btn-ghost btn-black' href='/afficher/".$row['id']."'>Consulter</a> <br><div></div><br>";
echo "</div>" ;


}
?>