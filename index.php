<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('moevbiz/k3-lipsum', [
    'pageMethods' => [
        'lipsum' => function () {
            return new joshtronic\LoremIpsum();
        }
    ]
]);
