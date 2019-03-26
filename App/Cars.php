<?php

namespace myProject;

class Cars extends Avto
{
	private $equipment;

	/**
	 * @return mixed
	 */
	public function getEquipment()
	{
		return $this->equipment;
	}

	/**
	 * @param mixed $equipment
	 */
	public function setEquipment($equipment)
	{
		$this->equipment = $equipment;
	}

	public function info()
	{
		return [
			'Model' => $this->getModel(),
			'Marka' => $this->getMarka(),
			'Year' => $this->getYear(),
			'Vin' => $this->getVin(),
			'Equipment' => $this->getEquipment(),
		];
	}
}
