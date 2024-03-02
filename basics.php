<?php
class MyIterator implements Iterator{
    private $items = [];
    private $pointer = 0;

    public function __construct($items){
        $this->items = array_values($items);
    }

    public function current()
    {
        return $this->items[$this->pointer];
    }
    public function key()
    {
        return $this->pointer;
    }
    public function next()
    {
        $this->pointer++;
    }
    public function rewind()
    {
        $this->pointer = 0;
    }
    public function valid()
    {
        return $this->pointer < count($this->items);
    }
}

function myNumber(iterable $numbers)
{
    foreach($numbers as $number){
        echo $number;
    }
}

$num = new MyIterator(['5','6','7','8']);
myNumber($num);
?>