<?php namespace Collection;

class Collection{

	private $data;

	private $size;

	private $currentIndex;

	function __construct()
	{
		$this->data = array();
		$this->size = 0;
		$this->currentIndex = 0;
	}

	public function addAfter($data)
	{
		$this->currentIndex = ($this->size == 0) ? 0 : $this->currentIndex + 1;
		
		$this->data[$this->currentIndex] = $data;
		$this->size++;
	}

	public function addBefore($data)
	{
		if($this->size == 0){
			$this->addAfter($data);
		}else{
			for($x = count($this->data); $x > $this->currentIndex; $x--)
				$this->data[$x]  = $this->data[$x -1];

			$this->data[$this->currentIndex] = $data;
			$this->size++;
		}
	}

	public function addAll(array $data)
	{
		foreach($data as $x)
			$this->addAfter($x);
	}

	public function advance()
	{
		if($this->isCurrent())
			$this->currentIndex++;
	}

	public function concatenation(Collection $c)
	{
		for($x = 0; $x < count($c->data); $x++)
			$this->addAfter($c->data[$x]);
	}

	public function getCurrent()
	{
		if($this->isCurrent())
			return $this->data[$this->currentIndex];
	}

	public function isCurrent()
	{
		return $this->currentIndex < $this->size; 
	}

	public function removeCurrent()
	{
		if($this->isCurrent()){
				for($x = $this->currentIndex; $x < count($this->data) - 1; $x++)
					$this->data[$x]  = $this->data[$x + 1];

				unset($this->data[--$this->size]);
		}
	}

	public function size()
	{
		return $this->size;
	}

	public function start()
	{
		$this->currentIndex = 0;
	}

	public function __clone()
	{
		$this->data;
		$this->size;
		$this->currentIndex;
	}
}


$x = new Collection();
$x->addAll(array(3,5,9));

$y = new Collection();
$y->addAll(array(1,2,3));

$x->concatenation($y);

$c = clone $x;

for($c->start(); $c->isCurrent(); $c->advance()){
	echo $c->getCurrent();
}