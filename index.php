<?php
include_once 'Queue.php';
include_once 'Node.php';

$queue = new Queue(2);
echo $queue->isEmpty();
