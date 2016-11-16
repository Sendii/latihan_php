<?php
//file oop.php
//deklarasi class/object


class Mobil
{
	private $warna=null;
	private $merk=null;

	private $kilometer=0;

	private $satuan="km";

	private function getSatuanJarak()
	{
		return $this->satuan;
	}

	public function setSatuanJarak($satuan_jarak)
	{
		$this->satuan=$satuan_jarak;
	}

	public function setWarna($warna_baru)
	{
		$this->warna=$warna_baru;
	}

	public function getWarna()
	{
		return $this->warna;
	}
	public function maju($km)
	{
		$this->kilometer+=$km;
	}
	public function mundur($km)
	{
		$this->kilometer-=$km;
	}
	public function getJarak()
	{
		return $this->kilometer." ".$this->getSatuanJarak();
	}
}

$mobil1=new Mobil;

$mobil1->setSatuanJarak("m");
$mobil1->setWarna("hijau");
//echo $mobil1->getWarna();

$mobil1->setWarna("biru");
//echo $mobil1->getWarna();

echo $mobil1->getJarak();
$mobil1->maju(50);
echo $mobil1->getJarak();
$mobil1->maju(20);
echo $mobil1->getJarak();
$mobil1->mundur(30);
echo $mobil1->getJarak();

$mobil1->setSatuanJarak("m");
echo $mobil1->getJarak();
?>