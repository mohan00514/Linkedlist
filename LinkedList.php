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

    
   
}



//create an empty LinkedList
$myList = new LinkedList();

//Add three elements at the start of the list
$myList->pushFront(10);
echo "<br/>";
$myList->pushFront(20);
echo "<br/>";
$myList->pushFront(30);
echo "<br/>";
$myList->push_back(200);
echo "<br/>";


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