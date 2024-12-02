<?php

interface Observer {
  public function update($task);
}

class Moodle {
  private $observers = [];
  private $task;

  public function addObserver(Observer $observer) {
      $this->observers[] = $observer;
  }

  public function newTask($task) {
      $this->task = $task;
      $this->notifyObservers();
  }

  private function notifyObservers() {
      foreach ($this->observers as $observer) {
          $observer->update($this->task);
      }
  }
}

class Mentor implements Observer {
  public function update($task) {
      echo "Atenció! Tens una nova tasca: {$task}." .PHP_EOL;
  }
}

$moodle = new Moodle();
$ruben = new Mentor();
$moodle->addObserver($ruben);
$moodle->newTask('Nova tarea');