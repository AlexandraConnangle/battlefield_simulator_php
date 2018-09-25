<?php 

	class Personnage
	{
		protected $name;
		protected $avatar;
		protected $ptVie;
		protected $ptAttaque;
		protected $typeAttaque;

		public function getName()
		{
			return $this->name;
		}

		public function setName($name)
		{
			$name = (string) $name;
			$this->name = $name;
		}

		public function getAvatar()
		{
			return $this->avatar;
		}

		public function getPtVie()
		{
			return $this->ptVie;
		}

		public function setPtVie($ptVie)
		{
			$ptVie = (int) $ptVie;
			$this->ptVie = $ptVie;
		}

		public function getPtAttaque()
		{
			return $this->ptAttaque;
		}

		public function setPtAttaque($ptAttaque)
		{
			$ptAttaque = (int) $ptAttaque;
			$this->ptAttaque = $ptAttaque;
		}

		public function getTypeAttaque()
		{
			return $this->typeAttaque;
		}

		public function setTypeAttaque($typeAttaque)
		{
			$typeAttaque = (string) $typeAttaque;
			$this->typeAttaque = $typeAttaque;
		}
	}
?>