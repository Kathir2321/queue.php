<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Queue {
        private $queueArray;
    
        public function __construct() {
            $this->queueArray = array();
        }
    
        public function enqueue($item) {
            array_push($this->queueArray, $item);
        }
    
        public function dequeue() {
            if (!$this->isEmpty()) {
                return array_shift($this->queueArray);
            } else {
                return null; 
            }
        }
        public function peek() {
            if (!$this->isEmpty()) {
                return $this->queueArray[0];
            } else {
                return null; 
            }
        }
        public function isEmpty() {
            return empty($this->queueArray);
        }
    
        public function size() {
            return count($this->queueArray);
        }
    }
    $queue = new Queue();
    $queue->enqueue(888);
    $queue->enqueue(777);
    $queue->enqueue(666);
    
    echo "Queue size: " . $queue->size() . "\n","<br>";
    echo "Front item: " . $queue->peek() . "\n";
    while (!$queue->isEmpty()) {
        echo "Dequeued: " . $queue->dequeue() . "\n","<br>";
    }
    echo "Queue size after dequeue: " . $queue->size() . "\n";
    ?>
</body>
</html>