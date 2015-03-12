<?php

class Animal {
	protected $name;
	protected $gender;
	protected $health;


	public function __construct($name,$gender,$health)
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->health = $health;
	}
	public function getname()
	{
		return $this->name;
	}

	public function getgender()
	{
		return $this->gender;
	}

	public function gethealth()
	{
		return $this->health;
	}

	public function changehealth($healthpoints)
	{
		$this->health += $healthpoints;

		return $this->health;
	}

	public function specialmove()
	{
		return "walk";
	}
}

?>