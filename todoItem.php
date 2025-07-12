<?php 
    class todoItem {
        public $title;
        public $description;
        public $dueDate;
        public $priority;
        public $iscompleted;

        public function __construct($title, $description, $dueDate, $priority, $iscompleted) {
            $this->title = $title;
            $this->description = $description;
            $this->dueDate = $dueDate;
            $this->priority = $priority;
            $this->iscompleted = $iscompleted;
        }
    }
?>