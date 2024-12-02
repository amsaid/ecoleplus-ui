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
            'base' => 'inline-flex items-center justify-center border rounded-md font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 disabled:opacity-50 disabled:cursor-not-allowed dark:focus:ring-offset-gray-900',
            'primary' => 'border-transparent text-white bg-primary-600 hover:bg-primary-700 focus:ring-primary-500 dark:bg-primary-500 dark:hover:bg-primary-600',
            'secondary' => 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-gray-500 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600',
            'success' => 'border-transparent text-white bg-green-600 hover:bg-green-700 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600',
            'danger' => 'border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500 dark:bg-red-500 dark:hover:bg-red-600',
            'warning' => 'border-transparent text-gray-900 bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-500 dark:text-gray-100 dark:bg-yellow-500 dark:hover:bg-yellow-600',
            'info' => 'border-transparent text-white bg-blue-500 hover:bg-blue-600 focus:ring-blue-500 dark:bg-blue-400 dark:hover:bg-blue-500',
            'light' => 'border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 focus:ring-gray-500 dark:border-gray-600 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600',
            'dark' => 'border-transparent text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-500 dark:bg-gray-600 dark:hover:bg-gray-700',
            'link' => 'text-primary-600 hover:text-primary-700 underline hover:no-underline focus:ring-primary-500 dark:text-primary-400 dark:hover:text-primary-300',
            'outline-primary' => 'border-2 border-primary-500 text-primary-600 bg-transparent hover:bg-primary-50 focus:ring-primary-500 dark:text-primary-400 dark:border-primary-400 dark:hover:bg-primary-900',
            'outline-secondary' => 'border-2 border-gray-500 text-gray-600 bg-transparent hover:bg-gray-50 focus:ring-gray-500 dark:text-gray-400 dark:border-gray-400 dark:hover:bg-gray-800',
            'outline-success' => 'border-2 border-green-500 text-green-600 bg-transparent hover:bg-green-50 focus:ring-green-500 dark:text-green-400 dark:border-green-400 dark:hover:bg-green-900',
            'outline-danger' => 'border-2 border-red-500 text-red-600 bg-transparent hover:bg-red-50 focus:ring-red-500 dark:text-red-400 dark:border-red-400 dark:hover:bg-red-900',
            'outline-warning' => 'border-2 border-yellow-400 text-yellow-600 bg-transparent hover:bg-yellow-50 focus:ring-yellow-500 dark:text-yellow-300 dark:border-yellow-400 dark:hover:bg-yellow-900',
            'outline-info' => 'border-2 border-blue-500 text-blue-600 bg-transparent hover:bg-blue-50 focus:ring-blue-500 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-900',
            'outline-light' => 'border-2 border-gray-200 text-gray-600 bg-transparent hover:bg-gray-50 focus:ring-gray-500 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-800',
            'outline-dark' => 'border-2 border-gray-800 text-gray-800 bg-transparent hover:bg-gray-100 focus:ring-gray-500 dark:text-gray-300 dark:border-gray-300 dark:hover:bg-gray-700',
        ],
        'input' => [
            'base' => 'block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-400 dark:focus:ring-primary-400 dark:focus:border-primary-400',
            'error' => 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500 dark:border-red-600 dark:text-red-300 dark:placeholder-red-400 dark:focus:ring-red-400 dark:focus:border-red-400',
            'disabled' => 'bg-gray-100 cursor-not-allowed dark:bg-gray-800',
            'label' => 'block text-sm font-medium text-gray-700 mb-1 dark:text-gray-300',
            'help' => 'mt-1 text-sm text-gray-500 dark:text-gray-400',
            'error-text' => 'mt-1 text-sm text-red-600 dark:text-red-400',
            'prefix' => 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500 dark:text-gray-400',
            'suffix' => 'absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-500 dark:text-gray-400',
            'wrapper' => 'relative rounded-md shadow-sm',
        ],
        'card' => [
            'base' => 'overflow-hidden bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-sm rounded-lg',
        ],
        'card-section' => [
            'base' => 'last:border-b-0 p-4 border-b border-gray-200 dark:border-gray-700',
        ],
        'select' => [
            'base' => 'block w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-primary-400 dark:focus:border-primary-400',
            'error' => 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500 dark:border-red-600 dark:text-red-300 dark:focus:ring-red-400 dark:focus:border-red-400',
            'disabled' => 'bg-gray-100 cursor-not-allowed dark:bg-gray-800',
            'label' => 'block text-sm font-medium text-gray-700 mb-1 dark:text-gray-300',
            'help' => 'mt-1 text-sm text-gray-500 dark:text-gray-400',
            'error-text' => 'mt-1 text-sm text-red-600 dark:text-red-400',
            'prefix' => 'absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500 dark:text-gray-400',
            'suffix' => 'absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-500 dark:text-gray-400',
            'wrapper' => 'relative rounded-md shadow-sm',
        ],
        'checkbox' => [
            'base' => 'rounded border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:checked:bg-primary-500 dark:focus:ring-primary-400 dark:focus:ring-offset-gray-900',
        ],
        'radio' => [
            'base' => 'border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:checked:bg-primary-500 dark:focus:ring-primary-400 dark:focus:ring-offset-gray-900',
        ],
        'form' => [
            'base' => 'space-y-6',
            'group' => 'space-y-2',
            'label' => 'block text-sm font-medium text-gray-700 dark:text-gray-300',
            'help' => 'mt-1 text-sm text-gray-500 dark:text-gray-400',
            'error' => 'mt-1 text-sm text-red-600 dark:text-red-400',
            'actions' => 'flex items-center justify-end space-x-3 mt-6 pt-6 border-t border-gray-200 dark:border-gray-700',
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
