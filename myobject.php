<?php 
    require_once("todoItem.php");

    //presiction:
    // task1 will show as incomplete, due in X days, and not overdue.
    // task2 will show as complete and not overdue.

    $task1 = new ToDoItem("Finish Assignment", "Complete OOP homework", "2025-07-13", false, "High");
    $task2 = new ToDoItem("fixing website", "fixing personal website add on", "2025-07-15", true, "Medium");

    echo $task1->getSummary() . "\n";
    echo "Days left: " . $task1->daysLeft() . "\n";
    echo "Is Overdue: " . ($task1->isOverdue() ? "Yes" : "No") . "\n\n";


    echo $task2->getSummary() . "\n";
    echo "Days left: " . $task2->daysLeft() . "\n";
    echo "Is Overdue: " . ($task2->isOverdue() ? "Yes" : "No") . "\n";

    $task1->markComplete();
    echo "\nAfter marking complete:\n";
    echo $task1->getSummary();
?>