<?php

class Duck {

  public function quack() {
         echo "Quack \n";
  }

  public function fly() {
         echo "I'm flying \n";
  }
}

class Turkey {

  public function gobble() {
         echo "Gobble gobble \n";
  }

  public function fly() {
  echo "I'm flying a short distance \n";
  }
}

function duck_interaction($duck) {
       $duck->quack();
       $duck->fly();
}

class TurkeyAdapter {
    protected $turkey;

    public function __construct(Turkey $turkey)
    {
       $this->turkey = $turkey;
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
              $this->turkey->fly();
          }
    }
    public function quack()
    {
        $this->turkey->gobble();
    }

}


$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);