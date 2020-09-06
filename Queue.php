<?php


class Queue
{
    public $firstNode;
    public $lastNode;
    public $front;
    public $back;
    public $count;
    public $limit;


    public function __construct($limit){
        $this->front = $this->firstNode;
        $this->back = $this->lastNode;
        $this->limit = $limit;
        $this->count = 0;
    }
    public function isEmpty(){
        if ($this->count < $this->limit){
            echo 'Ronggg';
        } else {
            echo 'full';
        }
    }
    public function enqueue(){
        if ($this->count < $this->limit){

        }
    }
}