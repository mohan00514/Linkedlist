<?php 
Class Node{

    public $next;
    public $data;
    
}

Class LinkedList{

    public $head;
    
    public function __construct(){
        $this->head = null;
    }

    //display content of List

    public Function printList(){
        $temp = new Node();
        $temp =$this->head;
        if($temp != null){
            echo" list contains :  ";
            while($temp != null){
                echo $temp->data. " ";
                $temp = $temp->next;
            }
        } else{
        echo "list is empty";

        }

    }

    public function pushFront($newData) {
        $newNode = new Node();
        $newNode->data = $newData; 
        $newNode->next = $this->head;
        $this->head =$newNode;
    }

    //Add new element at the end of the list
  
    public function push_back($newElement) {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null; 
        if($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null) {
                $temp = $temp->next;
             }
           $temp->next = $newNode;
        }    
    }

    PUblic function Push_at($position,$newElement){
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;
        if ($position < 1){
            echo " position should be > 1";
        }else if($position == 1){
            $newNode->next= $this->head;
            $this->head = $newNode;

        }else{
            $temp = new Node();
            $temp =$this->head;
            for($i=1; $i< $position-1;$i++){
                if($temp != null){
                    $temp = $temp->next;
                }
            }
            if($temp != null){
               $newNode->next = $temp->next;
                $temp->next = $newNode;
            }else{
                echo " previous node is null";
            }

        }
    }
   
        function pop_front(){
            if ($this->head != null){
                $temp = $this->head;
                $this->head = $this->head->next;
                $temp = null; 
            }

        }

        function pop_last(){
            if($this->head != null){
                if($this->head->next == null){
                    $this->head = null;

                }else {
                    $temp = new Node();
                    $temp = $this->head;
                    while($temp->next->next != null){
                        $temp = $temp->next;
                    }    
                    $lastNode = $temp->next;
                    $temp->next = null; 
                    $lastNode = null;
                }
            }
        }
        
        function pop_at($position){
            if($position <1){
            echo "position should be <1";
            }
            else if($position ==1 && $this->head != null){
                $nodeDelete = new Node();
                $this->head = $this->head->next;
                $nodeDelete = null;
            }
            else{
                $temp = new Node;
                $temp = $this->head;
                for($i=1; $i < $position-1;$i++){
                    if($temp != null){
                    $temp = $temp->next;
                    }
                }
            }

            if($temp != null && $temp->next != null){
                $nodeDelete = $temp->next;
                $temp->next = $temp->next->next;
                $nodeDelete = null;
            }else {
                echo " \n The node is already null.";
            }
        }

}



//create an empty LinkedList
$myList = new LinkedList();

//Add three elements at the start of the list
$myList->pushFront(10);

$myList->pushFront(20);

$myList->pushFront(30);

$myList->push_back(200);
echo "<br/>";
$myList->Push_at(4,500);
$myList->printList();
echo "<br/>";
$myList->pop_front();
$myList->printList();
echo "<br/>";
$myList->pop_last();
$myList->printList();
echo "<br/>";
$myList->pop_at(2);

// display list
$myList->printList();



/*
// Add first Node
$first = new Node();
$first->data = 10; 
$first->next = null;
//linking with head node
$myList->head =$first;

//add second Node
$second = new Node();
$second->data =20;
$second->next = null;
//Linking with First Node
$first->next =$second;

//add third Node
$third = new Node();
$third->data =30;
$third->next =null;
// Linking with second Node;
$second->next = $third;

$myList->printList();

*/