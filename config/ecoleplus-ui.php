<?php

// config for Ecoleplus/EcoleplusUi
return [

    /*
    |--------------------------------------------------------------------------
    | Component Prefix
    |--------------------------------------------------------------------------
    |
    | This value will be used as the default prefix for all components.
    | For example, if set to 'ecp', components will be referenced as 'ecp-button'.
    |
    */
    'prefix' => 'ecp',

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | These values will be used as the default classes for component elements.
    | You can override these per component or per instance.
    |
    */
    'defaults' => [
        'button' => [
            'base' => 'inline-flex items-center justify-center border rounded-md font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 disabled:opacity-50 disabled:cursor-not-allowed',
            'primary' => 'border-transparent text-white bg-primary-600 hover:bg-primary-700 focus:ring-primary-500',
            'secondary' => 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-gray-500',
            'success' => 'border-transparent text-white bg-green-600 hover:bg-green-700 focus:ring-green-500',
            'danger' => 'border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500',
            'warning' => 'border-transparent text-gray-900 bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-500',
            'info' => 'border-transparent text-white bg-blue-500 hover:bg-blue-600 focus:ring-blue-500',
            'light' => 'border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 focus:ring-gray-500',
            'dark' => 'border-transparent text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-500',
            'link' => 'text-primary-600 hover:text-primary-700 underline hover:no-underline focus:ring-primary-500',
            'outline-primary' => 'border-2 border-primary-500 text-primary-600 bg-transparent hover:bg-primary-50 focus:ring-primary-500',
            'outline-secondary' => 'border-2 border-gray-500 text-gray-600 bg-transparent hover:bg-gray-50 focus:ring-gray-500',
            'outline-success' => 'border-2 border-green-500 text-green-600 bg-transparent hover:bg-green-50 focus:ring-green-500',
            'outline-danger' => 'border-2 border-red-500 text-red-600 bg-transparent hover:bg-red-50 focus:ring-red-500',
            'outline-warning' => 'border-2 border-yellow-400 text-yellow-600 bg-transparent hover:bg-yellow-50 focus:ring-yellow-500',
            'outline-info' => 'border-2 border-blue-500 text-blue-600 bg-transparent hover:bg-blue-50 focus:ring-blue-500',
            'outline-light' => 'border-2 border-gray-200 text-gray-600 bg-transparent hover:bg-gray-50 focus:ring-gray-500',
            'outline-dark' => 'border-2 border-gray-800 text-gray-800 bg-transparent hover:bg-gray-100 focus:ring-gray-500',
        ],
        'input' => [
            'base' => 'block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm',
            'error' => 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500',
            'disabled' => 'bg-gray-100 cursor-not-allowed',
            'label' => 'block text-sm font-medium text-gray-700 mb-1',
            'help' => 'mt-1 text-sm text-gray-500',
            'error-text' => 'mt-1 text-sm text-red-600',
            'prefix' => 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none',
            'suffix' => 'absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none',
            'wrapper' => 'relative rounded-md shadow-sm',
        ],
        'card' => [
            'base' => 'overflow-hidden',
        ],
        'card-section' => [
            'base' => 'last:border-b-0',
        ],
        'select' => [
            'base' => 'border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm',
        ],
        'checkbox' => [
            'base' => 'rounded border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500',
        ],
        'radio' => [
            'base' => 'border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Colors
    |--------------------------------------------------------------------------
    |
    | Default color palette for components that support color variations.
    |
    */
    'colors' => [
        'primary' => [
            50 => '#f0f9ff',
            100 => '#e0f2fe',
            200 => '#bae6fd',
            300 => '#7dd3fc',
            400 => '#38bdf8',
            500 => '#0ea5e9',
            600 => '#0284c7',
            700 => '#0369a1',
            800 => '#075985',
            900 => '#0c4a6e',
            950 => '#082f49',
        ],
    ],
];
