<?php

function gen()
{
    var_dump(111);
    $ret = (yield 'yield1');


    var_dump($ret);

    var_dump(222222222);

    $ret = (yield 'yield2');

    var_dump(3333333333);

    var_dump($ret);


}
    
$gen = gen();
var_dump($gen->current());

var_dump($gen->send('ret1'));
exit;

var_dump($gen->send('ret2'));


