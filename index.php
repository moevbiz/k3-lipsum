<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bruno/lipsum', [
    'pageMethods' => [
        'lipsum' => function () {
            return new joshtronic\LoremIpsum();
        }
    ]
]);
