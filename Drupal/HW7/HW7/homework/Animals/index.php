<?php
// Builder  Pattern
require_once 'ZooAnimals.php';

class Zoo {
    public $typesOfAnimals = [
        "Lion",'Tiger','Wilddog',
        'Duck','Elephant','Horse'
    ];

    public $AnimalsInZoo = [];
    const Capacity = 20;

    public function generateAnimals () {
        for ($i = 0; $i < self::Capacity; $i++) {
            $randomAnimal = mt_rand(0, 5);
            $concat = 'create' .$this->typesOfAnimals[$randomAnimal];
            $res = new $concat ();
            $this->zooAnimals[$randomAnimal][] = $res-> create();
        }
    }

    public function showAnimals()
    {
        echo '<h1>There are these animals in the Zoo: </h1>';
        for ($i = 0; $i < count($this->zooAnimals); $i++) {
            echo '<p>Zoo contains  ' .$this->typesOfAnimals[$i] .'s in :' .count($this->zooAnimals[$i]) .'</p>';
            foreach ($this->zooAnimals[$i] as $key) {
                echo $key->getName() ." hash is ".spl_object_hash($this); '<br>';
            }
            echo '<br>';
        }

    }
}
$zoo = new Zoo();
$zoo->generateAnimals();
$zoo->showAnimals();

?>