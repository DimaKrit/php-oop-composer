<?php

namespace myProject;

abstract class Avto
{
	private $marka;
	private $year;
	private $model;
	private $vin;

	abstract public function info();

	/**
	 * @return mixed
	 */
	public function getMarka()
	{
		return $this->marka;
	}

	/**
	 * @param mixed $marka
	 */
	public function setMarka($marka)
	{
		$this->marka = $marka;
	}

	/**
	 * @return mixed
	 */
	public function getYear()
	{
		return $this->year;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear($year)
	{
		$this->year = $year;
	}

	/**
	 * @return mixed
	 */
	public function getModel()
	{
		return $this->model;
	}

	/**
	 * @param mixed $model
	 */
	public function setModel($model)
	{
		$this->model = $model;
	}

	/**
	 * @return mixed
	 */
	public function getVin()
	{
		return $this->vin;
	}

	/**
	 * @param mixed $vin
	 */
	public function setVin($vin)
	{
		$this->vin = $vin;
	}


}