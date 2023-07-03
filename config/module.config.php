<?php
namespace AutocompleteTerms\Module\Config;

$config = [
    'service_manager' => [
        'allow_override' => true,
        'factories' => [
            'AutocompleteTerms\Autocomplete\Terms' => 'AutocompleteTerms\Autocomplete\TermsFactory',
        ],
        'aliases' => [
            'terms' => 'AutocompleteTerms\Autocomplete\Terms',
        ],
    ],
];

return $config;
