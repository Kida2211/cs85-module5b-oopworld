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

        //summary display method
        public function getSummary() {
           return "Task: $this->title\nDescription: $this->description\nDue: $this->dueDate\nCompleted: " . ($this->iscompleted ? "Yes" : "No") . "\nPriority: $this->priority\n";
        }

        // Return calculated value (days left)
        public function daysLeft() {
            $today = date_create(date("Y-m-d"));
            $due = date_create($this->dueDate);
            $interval = date_diff($today, $due);
            return $interval->format("%a");
        }

        // Change property method
        public function markComplete() {
            $this->iscompleted = true;
        }
    }
?>