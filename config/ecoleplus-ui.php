<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Theme Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify default theme settings for your UI components.
    |
    */
    'theme' => [
        'primary' => [
            'background' => 'bg-blue-600',
            'hover' => 'hover:bg-blue-700',
            'text' => 'text-white',
        ],
        'secondary' => [
            'background' => 'bg-gray-600',
            'hover' => 'hover:bg-gray-700',
            'text' => 'text-white',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Icons Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the default icon set and classes.
    |
    */
    'icons' => [
        'style' => 'heroicon',
        'class' => 'w-5 h-5',
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Classes
    |--------------------------------------------------------------------------
    |
    | Default classes for components. Each component has its own prefix.
    |
    */
    'components' => [
        'button' => [
            'base' => 'eplus-btn inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150',
            'primary' => 'eplus-btn-primary',
            'secondary' => 'eplus-btn-secondary',
        ],
        'input' => [
            'base' => 'eplus-input border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm',
            'error' => 'eplus-input-error',
        ],
        'card' => [
            'base' => 'eplus-card bg-white rounded-lg shadow-sm',
            'header' => 'eplus-card-header',
            'body' => 'eplus-card-body',
            'footer' => 'eplus-card-footer',
        ],
    ],
]; 