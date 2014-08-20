<?php

class cars
{
	public function go()
	{
		echo "gooo"
	}
}



class light extends cars
{
	public function courpuse()
	{
		echo "sedan"
	}

	public function weight()
	{
		echo "1500"
	}

	public function power()
	{
		echo "440"
	}
}


class bus extends cars
{
	public function courpuse()
	{
		echo "bus"
	}

	public function weight()
	{
		echo "10000"
	}

	public function power()
	{
		echo "320"
	}

class wan extends cars
{
	public function courpuse()
	{
		echo "wan"
	}

	public function weight()
	{
		echo "15000"
	}

	public function power()
	{
		echo "600"
	}

class bmw extends ligth
{
	public $color;

	public $door;

	public $maxspeed;
}

class lamborghini extends ligth
{
	public $color;

	public $door;

	public $maxspeed;
}

class pagani extends ligth
{
	public $color;

	public $door;

	public $maxspeed;
}

class ivan extends bus
{
	public $color;

	public $door;

	public $maxspeed;
}

class tata extends bus
{
	public $color;

	public $door;

	public $maxspeed;
}

class gazell extends bus
{
	public $color;

	public $door;

	public $maxspeed;
}

class iveco extends wan
{
	public $color;

	public $door;

	public $maxspeed;
}

class man extends wan
{
	public $color;

	public $door;

	public $maxspeed;
}

class volvo extends wan
{
	public $color;

	public $door;

	public $maxspeed;
}