<?php

declare(strict_types=1);

$categories = [
    'fruits' => [
        'type' => 'category',
        'items' => [
            'apple' => [
                'count' => 5,
                'price' => 0.15,
            ],
            'pear' => [
                'count' => 5,
                'price' => 0.15,
            ],
        ],
    ],
    'vegetables' => [
        'type' => 'category',
        'items' => [
            'carrot' => [
                'count' => 100,
                'price' => 0.01,
            ],
            'tomato' => [
                'count' => 45,
                'price' => 0.5,
            ],
        ],
    ],
    'seafood' => [
        'type' => 'category',
        'items' => [
            'seabass' => [
                'count' => 15,
                'price' => 5.5,
            ],
        ],
    ],
    'alcohol' => [
        'type' => 'category',
        'items' => [
            'beer_bottle' => [
                'count' => 22,
                'price' => 1.3,
            ],
            'wine_bottle' => [
                'count' => 4,
                'price' => 8,
            ],
        ],
    ],
    'milk' => [
        'type' => 'category',
        'items' => [
            'cheese' => [
                'count' => 1,
                'price' => 4.5,
            ],
            'yoghurt' => [
                'count' => 13,
                'price' => 0.99,
            ],
        ],
    ],
    'bread' => [
        'type' => 'category',
        'items' => [
            'brown_bread' => [
                'count' => 11,
                'price' => 2.1,
            ],
            'white_bread' => [
                'count' => 110,
                'price' => 1.3,
            ],
        ],
    ],
];

class DataProcessor
{
    public function __construct(private array $data)
    {
    }

    public function process(string $format, string $output): void
    {
        // encode data to $format (JSON or XML)
        // output it to $output (file or terminal)
    }
}

$dataProcessor = new DataProcessor($categories);
$dataProcessor->process('json', 'file');
$dataProcessor->process('xml', 'terminal');

/*
Klas?? DataProcessor suteikia mums galimyb?? u??koduoti duomenis tam tikru formatu (JSON arba XML) ir i??vesti juos ?? fail??
arba terminal??. Tai yra daroma kvie??iant metod?? 'process'.

1.1 ??gyvendinkite 'process' metodo logik?? klas??je DataProcessor

1.2 Perkelkite metodo 'process' encodinimo ir i??vesties logik?? ?? atskiras klases, kurios b??t?? susietos interfeisais.
Gal??t?? b??ti ??ie interfeisai:
- DataEncoderInterface
    - JsonEncoder
    - XmlEncoder
- DataOutputHandlerInterface
    - TerminalOutputHander
    - FileOutputHandler

Daugiau apie XML format??: https://www.w3schools.com/xml/xml_whatis.asp
*/