<?php

namespace myProject;

class Catalog
{
	private $transport = [];

	public function addTranspotr(Avto $avto)
	{
		if (in_array($avto, $this->transport, true)) {
			return;
		}
		$this->transport[] = $avto;
	}

	public function showTransport()
	{
		foreach ($this->transport as $transport) {
			print_r($transport->info());
		}
	}

}