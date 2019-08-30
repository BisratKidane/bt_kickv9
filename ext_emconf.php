<?php

/**
 * Extension Manager/Repository config file for ext "bootstrap_kick_starter".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bootstrap kick starter',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Bisratk\\BootstrapKickStarter\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Bisrat Kidane',
    'author_email' => 'bisrat.kidane@gmail.com',
    'author_company' => 'BisratK',
    'version' => '1.0.0',
];
