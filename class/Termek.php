<?php
require_once('Marka.php');
class Termek extends Marka
{
	public $cikkszam;
	public $megnevezes;
	public $ar;
	public $marka;
	public $kiszereles;
	

	
	
	function __construct($cikkszam,$megnevezes,$ar,$marka,$kiszereles,$minosegKategoria ,$hozzavalok) {
		$this->cikkszam = $cikkszam;
		$this->megnevezes = $megnevezes;			
		$this->ar = $ar;			
		$this->marka = $marka;			
		$this->kiszereles = $kiszereles;			
		$this->minosegKategoria = $minosegKategoria;			
		$this->hozzavalok = $hozzavalok;			
	
	}
	
	public function getCikkszam()
	{
		return $this->cikkszam;
	}
	
	public function setCikkszam($value)
	{
		$this->cikkszam = $value;
	}
	
	public function getMegnevezes()
	{
		return $this->megnevezes;
	}
	
	public function setMegnevezes($value)
	{
		$this->megnevezes = $value;
	}
	
	public function getAr()
	{
		return $this->ar;
	}
	
	public function setAr($value)
	{
		$this->ar = $value;
	}
	public function getMarka()
	{
		return $this->marka;
	}
	
	public function setMarka($value)
	{
		$this->marka = $value;
	}
	
	public function getKiszereles()
	{
		return $this->kiszereles;
	}
	
	public function setKiszereles($value)
	{
		$this->kiszereles = $value;
	}
}
?>