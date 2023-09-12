<?php
namespace AutocompleteTerms\Module\Config;

$config = [
    'vufind' => [
        'plugin_managers' => [
            'autocomplete' => [
                'factories' => [
                    'AutocompleteTerms\Autocomplete\Terms' => 'AutocompleteTerms\Autocomplete\TermsFactory',
                ],
                'aliases' => [
                    'terms' => 'AutocompleteTerms\Autocomplete\Terms',
                    'Terms' => 'AutocompleteTerms\Autocomplete\Terms',
                ],
            ],
        ],
    ],
];

return $config;
