<?php

require 'vendor/autoload.php';

use Underscore\Types\Arrays;
use Underscore\Parse;

function pre ($array){
    echo '<pre>';
    echo print_r($array);
    echo '</pre>';
}

$scores = ['5','8', '2','1','3'];
//echo Arrays::average(array(1, 2, 3)); // Returns 2
//print_r(Arrays::replaceValue(array('foo', 'foo', 'bar'), 'foo', 'bar')); // Will return ['bar, 'bar', 'bar']
//echo Parse::toJSON(array(1, 2, 3));

//$array = underscore(array('foo' => array('bar' => 'ter')));
//$array->get('foo.bar'); // Return 'ter'

//print_r(Arrays::sort(array(5, 3, 1, 2 ,4), null, 'desc')); // Returns array(5, 4, 3, 2, 1)
//
//print_r(Arrays::filter(array(1, 2, 3), function($value) {
//  return $value % 2 != 0; // Returns array(1, 3)
//}));

$chain = Arrays::from($scores)->filter(
                                function($value) {
                                    return $value % 2 != 0;
                                })
                                ->sort(null,'desc')
                                ->obtain();
pre($chain);
