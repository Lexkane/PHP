<?php
#Animals constructors
const random_names = [
    'Winfrey','Mozes','Kalson',
    'Marcus','Lucas','Doey',
    'Kilan','Bob','Vinc',
    'Alan','Mark','Romeo',
    'Smokey','Bren','Buffy',
    'Burt','Butler','Button','Calvin'];

require_once "RootClass.php";

class Wilddog extends ZooAnimal {

    function __construct()
    {
        $this->animalName = 'Wilddog ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createWilddog extends createAnAnimal {
    public function create() {
        return new Wilddog ();
    }
}

class Tiger extends ZooAnimal {

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

class Horse extends ZooAnimal {

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

class Duck extends ZooAnimal {

    function __construct()
    {
        $this->animalName = 'Duck ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createDuck extends createAnAnimal {
    public function create() {
        return new Duck ();
    }
}

class Elephant extends ZooAnimal {

    function __construct()
    {
        $this->animalName = 'Elephant ' .random_names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createElephant extends createAnAnimal {
    public function create() {
        return new Elephant ();
    }
}

class Lion extends ZooAnimal {

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