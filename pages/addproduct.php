<?php 
if(!isset($_POST['kuld'] ))
{
?>
	<div class="container">
		<div class="card text-center mt-4 mx-auto w-50 ">
			<form method="POST" action="index.php?p=add">
				Márka<br> <input type="text" name="marka" class="form-group"><br>
				Cikkszám<br> <input type="text" name="cikkszam" class="form-group"><br>
				Termék neve<br> <input type="text" name="nev" class="form-group"><br>
				Ár<br> <input type="text" name="ar" class="form-group"><br>
				 <input type="hidden" name="hozzavalok" value="pótolásra vár">
				Válassz ki egy raktárat:<br>
				<select name="raktar" class="form-group">
				  <option value="1">CBA Remíz/Üllői út 266.</option>
				  <option value="2">CBA/István út 23.</option>
				</select><br>
				<button class="btn btn-primary" name="kuld">Felvétel a raktárba</button>
			</form>
		</div>
	</div>
<?php
}
else
{
	$marka = $_POST['marka'];
	$cikkszam = $_POST['cikkszam'];
	$nev = $_POST['nev'];
	$ar = $_POST['ar'];
	$raktarok = $_POST['raktar'];
	
	if($_POST['raktar'] == 1)
	{
		$ujTermek = new Termek($cikkszam, $nev, $ar, $marka, '-', '-', $_POST['hozzavalok']);
		$raktar->setUjTermek($ujTermek);
		echo"<pre>";
			print_r($raktar->raktarkeszlet);
		echo"</pre>";
	}
	else if($_POST['raktar'] == 2)
	{
		$ujTermek = new Termek($cikkszam, $nev, $ar, $marka, '-', '-', $_POST['hozzavalok']);
		$raktar2->setUjTermek($ujTermek);
		echo"<pre>";
			var_dump($raktar2->raktarkeszlet);
		echo"</pre>";
	}	
	else
	{
		echo"Nincs ilyen raktár";
	}	
}
?>