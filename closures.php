<?php

$input = array(1, 2, 3, 4, 5);
//$output = array_filter($input, function ($v) { return $v > 2; }); print_r($output); //will return array value if true

/*closures take the scope with them. So if a function was in another function when you assign a name to that function
and use if in another place it will no about it's scope.*/

// break through!
// if you can assign a function as a variable you can pass it as a variable! like callbacks, if short we can use them
// inline

// use simply allows us to pass args from the parent scope.

//closures cannot edit the parent scopes variables
// closures life can be longer than the parent function, if returned for example

//this blows my mind

class Example
{
    private $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function setSearch($search)
    {
        $this->search = $search;
    }

    public function getReplacer($replacement)
    {
        return function ($text) use ($replacement) {
            return str_replace($this->search, $replacement, $text);
        };
    }
}

echo "<h2>Closures</h2>";

$example = new Example ('Hulk'); //sets search for being replaced

//the magic
$replacer = $example->getReplacer('Ironman'); //we assign the return of the function to a var which is the closure
echo $replacer ('I am Hulk.'); // goodbye world. We are not passing the argument to the closure which returns the str_replace function!
echo "<hr>";

//more magic
$example->setSearch('Hello'); //sets search which is the item to that will be replaced
echo $replacer ('Hello Hulk.'); // hello goodbye