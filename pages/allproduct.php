<?php
if(!isset($_POST['kivalaszt'] ))
{
?>
	<div class="container">
		<form method="POST" action="index.php?p=all">
			<select name="raktar">
			  <option value="1">CBA Remíz/Üllői út 266.</option>
			  <option value="2">CBA/István út 23.</option>
			</select>
			<button class="btn btn-primary" name="kivalaszt">Nézzük a raktár tartalmát</button>
		</form>
	</div>
<?php
}
else
{
	if($_POST['raktar'] == '1')
	{	
?>
		<table>
			<td>
				<pre>
					<?php
						print_r($raktar->raktarkeszlet);
					?>
				</pre>
			</td><br>
		</table>
<?php
}
	else if($_POST['raktar'] == '2')
	{
		?>
			<table>				
				<td>
					<pre>
						<?php
							print_r($raktar2->raktarkeszlet);
						?>
					</pre>
				</td><br>
			</table>
		<?php
	}
	else
	{		
		echo"Nincs iylen raktar";
	}
}
?>