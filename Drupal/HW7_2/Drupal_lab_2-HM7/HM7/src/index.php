<?php
// Builder  Pattern
require_once 'Animals.php';

class Zoo {
    public $typesOfAnimals = [
        "Lion",
        'Tiger',
        'Wilddog',
        'Duck',
        'Elephant',
        'Horse'
        ];
    public $zooAnimals = [];
    const Capacity = 20;

    public function generate () {
        for ($i = 0; $i < self::Capacity; $i++) {
            $randomAnimal = mt_rand(0, 5);
            $concat = 'create' .$this->typesOfAnimals[$randomAnimal];
            $res = new $concat ();
            $this->zooAnimals[$randomAnimal][] = $res-> create();
        }
    }

    public function showAnimals()
    {
        echo '<h1>Zoo contains: </h1>';
        for ($i = 0; $i < count($this->zooAnimals); $i++) {
            echo '<p>There are ' .$this->typesOfAnimals[$i] .'s with amount:' .count($this->zooAnimals[$i]) .'</p>';
            foreach ($this->zooAnimals[$i] as $key) {
                echo $key->getName() . '<br>';
            }
            echo '<hr>';
        }

    }
}
$zoo = new Zoo();
$zoo->generate();
$zoo->showAnimals();


