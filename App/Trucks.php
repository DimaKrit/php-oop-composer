<?php

namespace myProject;

class Trucks extends Avto
{
	private $carrying;

	/**
	 * @return mixed
	 */
	public function getCarrying()
	{
		return $this->carrying;
	}

	/**
	 * @param mixed $carrying
	 */
	public function setCarrying($carrying)
	{
		$this->carrying = $carrying;
	}

	public function info()
	{
		return [
			'Model' => $this->getModel(),
			'Marka' => $this->getMarka(),
			'Year' => $this->getYear(),
			'Vin' => $this->getVin(),
			'Carrying' => $this->getCarrying(),
		];
	}

}