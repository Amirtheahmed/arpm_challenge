<?php

class Foo
{
    /** @var string * */
    private $sHelloString = 'Hello world!';

    /** @var array * */
    public $aArray = [];

    public function printString(): void
    {
        echo $this->sHelloString;
    }

    public function countStrawberries(): int
    {
        $counts = array_count_values($this->aArray);
        return $counts['strawberry'] ?? 0;
    }
}

$foo = new Foo();
$foo->aArray = ['apple', 'strawberry', 'banana', 'strawberry', 'strawberry'];

echo "Strawberries count: " . $foo->countStrawberries();
