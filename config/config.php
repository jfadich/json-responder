<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    | This option controls the namespaces to be used when automatically
    | resolving presenter or transformer for the given model.
    |
    */
    'namespaces'    => [
        'models'        => 'App',
        'transformers'  => 'App\\Transformers',
        'presenters'    => 'App\\Presenters'
    ],

    /*
    |--------------------------------------------------------------------------
    | Query Parameters
    |--------------------------------------------------------------------------
    |
    | This option controls the parameter names and default values.
    |
    | The 'count' parameter controls the response pagination.
    | Setting the value to 0 will disable pagination.
    |
    |
    | The 'includes' parameter sets the name to be used when
    | requesting relationship data.
    | The includes max sets the recursion limit on fractal.
    |
    */
    'parameters'    => [
        'count' => [
            'name'      => 'limit',
            'default'   => 25,
            'max'       => 1000
        ],
        'sort' => [
            'name'      => 'sort',
        ],

        'includes'      => [
            'name'      => 'with',
            'max'       => 5
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Base Classes
    |--------------------------------------------------------------------------
    |
    | These are the base transformer and presenter classes. Newly generated classes
    | will extend these values. Also if no presenter is found for a model,
    | this class will be used instead.
    |
    */
    'classes'       => [
        'transformer'   => jfadich\EloquentResources\Transformer::class,
        'presenter'     => jfadich\EloquentResources\Presenter::class,
        'model'         => jfadich\EloquentResources\TransformableModel::class
    ],

    'serializer'        => League\Fractal\Serializer\DataArraySerializer::class
];