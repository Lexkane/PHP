<?php
const random_names = [
    'Winfrey',
    'Mozes',
    'Kalson',
    'Marcus',
    'Lucas',
    'Doey',
    'Kilan',
    'Bob',
    'Vinc',
    'Aiy',
    'Anton',
    'Adam',
    'Lisa',
    'Jaine',
    'Andrew',
    'Tina',
    'Lina',
    'Tanya',
    'Iren'
];

require_once "abstractClasses.php";

class Bear extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Bear ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createBear extends createAnAnimal {
    public function create() {
        return new Bear ();
    }
}

class Tiger extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Tiger ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createTiger extends createAnAnimal {
    public function create() {
        return new Tiger ();
    }
}

class Horse extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Horse ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createHorse extends createAnAnimal {
    public function create() {
        return new Horse ();
    }
}

class Hippo extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Hippo ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createHippo extends createAnAnimal {
    public function create() {
        return new Hippo ();
    }
}

class Giraffe extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Giraffe ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createGiraffe extends createAnAnimal {
    public function create() {
        return new Giraffe ();
    }
}

class Lion extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Lion ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createLion extends createAnAnimal {
    public function create() {
        return new Lion ();
    }
}