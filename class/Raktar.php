<?php

class Raktar 
{
	public $megnevezes;
	public $cim;
	public $kapacitas;
	public $raktarkeszlet = [];
	public $dolgozok;
	
	function __construct($megnevezes,$cim,$kapacitas, $raktarkeszlet ,$dolgozok) 
	{
			$this->megnevezes = $megnevezes;
			$this->cim = $cim;
			$this->kapacitas = $kapacitas;
			$this->raktarkeszlet = $raktarkeszlet;
			$this->dolgozok = $dolgozok;
	}
	
	public function getMegnevezes()
	{
		return $this->megnevezes;
	}
	
	public function setMegnevezes($value)
	{
		$this->megnevezes = $value;
	}
	
	public function getCim()
	{
		return $this->cim;
	}
	
	public function setCim($value)
	{
		$this->cim = $value;
	}
	
	public function getKapacitas()
	{
		return $this->kapacitas;
	}
	
	public function setKapacitas($value)
	{
		$this->kapacitas = $value;
	}
	
	public function setUjTermek($value)
	{
		$tomb = $this->raktarkeszlet;
			$tomb = array_push($this->raktarkeszlet, $value);
			echo"<pre>";
			$hozzaad = $this->kapacitas - 1;
			var_dump($hozzaad);
			var_dump($tomb);
			echo"</pre>";
	}
	
	public function setVan($value)
	{
		if($this->raktarkeszlet == $value)
		{
			print_r($this->megnevezes);
		}
		else
		{
			echo"sajnos nincs ilyen termék egyik boltba se";
		}
	}
}
?>