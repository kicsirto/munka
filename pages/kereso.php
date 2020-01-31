<?php
if(!isset($_POST['submit'] ))
{
?>
	<form action="index.php?p=van">
		  <input type="checkbox" name="termek1" value="szeletelt trappista sajt"> szeletelt trappista sajt<br>
		  <input type="checkbox" name="termek2" value="fehér kenyér"> fehér kenyér<br>
		  <input type="checkbox" name="termek3" value="2020-as naptár" >  2020-as naptár<br>
		  <input type="checkbox" name="termek4" value="Riska tej" >  Riska tej<br>
		  <button class="btn btn-primary" name="submit">Lekér</button>
	</form>
<?php
}
else
{	
	if($_POST['termek1'] == $raktar->raktarkeszlet)
	{
		echo $raktar['megnevezes'];
	}
	else
	{
		echo"nincs ilyen termék";
	}
	
	$raktar->setVan($_POST['termek1']);
}
?>