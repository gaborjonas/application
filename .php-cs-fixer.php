<?php

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$config = new PhpCsFixer\Config();
return $config
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS2.0' => true,
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__)
    );
