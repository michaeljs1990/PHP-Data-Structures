<?php namespace Linkedlist;

class Link{

	private $date;

	private $next;

	function __construct($data, $next)
	{
		$this->data = $data;
		$this->next = $next;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getNext()
	{
		return $this->next;
	}
}

class LinkCollection{

	private $head;

	private $tail;

	private $cursor;

	private $size;

	function __construct()
	{
		$this->head = null;
		$this->cursor = $this->tail = $this->head;
	}

	public function addBefore($element)
	{
		$this->head = new Link($element, $this->head);
		$this->size++;
	}

	public function addAfter($element)
	{
		if($this->size == 0){
			$this->addBefore($element);
		}else{
			//$this->head->next;
		}
	}

	public function isCurrent(){
		return $this->cursor != null;
	}

	public function start()
	{
		$this->cursor = $this->head;
	}

	public function advance()
	{
		$this->cursor = $this->cursor->getNext();
	}

	public function getCurrent()
	{
		return $this->cursor->getData();
	}

	public function size(){}

	public function removeCurrent(){}

	public function __clone(){}
}

$x = new LinkCollection();
$x->addBefore(4);
$x->addBefore(5);
$x->addBefore(6);
$x->addBefore(7);

for($x->start(); $x->isCurrent(); $x->advance())
	echo $x->getCurrent();