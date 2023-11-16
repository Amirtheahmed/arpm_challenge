<?php
class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';

    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->sHelloString;
    }

    public function __toString()
    {
        $properties = [];
        $reflection = new ReflectionClass($this);
        foreach ($reflection->getProperties() as $property) {
            $property->setAccessible(true); // Makes private properties accessible
            $properties[$property->getName()] = $property->getValue($this);
        }
        return print_r($properties, true);
    }
}

$foo = new Foo();
echo $foo;
