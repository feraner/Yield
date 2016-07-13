<?php

    function printer() {
        while (true) {
             yield;
            echo '11111111111' . PHP_EOL;
        }
    }

    $printer = printer();
    $printer->send('Hello world0!');
    $printer->send('Hello world1!');
    $printer->send('Hello world2!');
    $printer->send('Hello world3!');
