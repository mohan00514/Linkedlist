<?php
class Node{
    
    private $nextNode;
    private $data;

    public function __construct($data) {
        $this->nextNode = 0;
        $this->data = $data;
    }
    
	/**
	 * @return mixed
	 */
	public function getNextNode() {
		return $this->nextNode;
	}
	
	/**
	 * @param mixed $next 
	 * @return self
	 */
	public function setNextNode($nextNode): self {
		$this->nextNode = $nextNode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * @param mixed $data 
	 * @return self
	 */
	public function setData($data): self {
		$this->data = $data;
		return $this;
	}
}

