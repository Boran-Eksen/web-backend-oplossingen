<?php

	class Lion extends Animal{

		protected $species;

		function __construct($name,$gender,$health,$species)
		{
		$this->name = $name;
		$this->gender = $gender;
		$this->health = $health;
		$this->species=$species;
		}

		function getspecies()
		{
			return $this->species;
		}

		function specialmove()
		{
			return "roar";
		}
	}
?>
