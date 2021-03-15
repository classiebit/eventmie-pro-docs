<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Documentation Routes
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of the LaRecipe docs basic route
    | where you can specify the url of your documentations, the location
    | of your docs and the landing page when a user visits /docs route.
    |
    |
    */

    'docs'        => [
        'route'   => '/docs',
        'path'    => '/resources/docs',
        'landing' => 'introduction',
        'middleware' => ['web'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Versions
    |--------------------------------------------------------------------------
    |
    | Here you may specify and set the versions and the default (latest) one
    | of your documentation's versions where you can redirect the user to.
    | Just make sure that the default version is in the published list.
    |
    |
    */

    'versions'      => [
        'default'   => '1.5',
        'published' => [
            '1.6',
            '1.5',
            '1.4',
            '1.3',
            '1.2',
            '1.1',
            '1.0',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Settings
    |--------------------------------------------------------------------------
    |
    | These options configure the additional behaviors of your documentation
    | where you can limit the access to only authenticated users in your
    | system. It is false initially so that guests can view your docs.
    | Middleware can be defined if auth is set to false. For example, if you want all users to be able to access your docs,
    | use web middleware. If you want just auth users, use auth middleware. Or, make your own middleware
    | to handle who can see your docs (don't forget to use gates for more granular control!).
    |
    |
    */

    'settings'       => [
        'auth'       => false,
        'ga_id'      => env('APP_ENV') == 'production' ? 'UA-148180654-1' : '',
        'middleware' => [
            'web',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | Obviously rendering markdown at the back-end is costly especially if
    | the rendered files are massive. Thankfully, caching is considered
    | as a good option to speed up your app when having high traffic.
    |
    | Caching period unit: minutes
    |
    */

    'cache'       => [
        'enabled' => false,
        'period'  => 5
    ],

    /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    |
    | Here you can add configure the search functionality of your docs.
    | You can choose the default engine of your search from the list
    | However, you can also enable/disable the search's visibility
    |
    | Supported Search Engines: 'algolia', 'internal'
    |
    */

    'search'            => [
        'enabled'       => true,
        'default'       => 'internal',
        'engines'       => [
            'internal'  => [
                'index' => ['h1', 'h2', 'h3']
            ],
            'algolia'   => [
                'key'   => '',
                'index' => ''
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Appearance
    |--------------------------------------------------------------------------
    |
    | Here you can add configure the appearance of your docs. For example,
    | you can set the primary and secondary colors that will give your
    | documentation a unique look. You can set the fav of your docs.
    |
    |
    */

    'ui'                 => [
        'code_theme'     => 'dark', // or: light
        'fav'            => 'eventmie-pro-logo.png',     // eg: fav.png
        'fa_v4_shims'    => true, // Add FontAwesome v4 shims prevent BC break
        'show_side_bar'  => true,
        'colors'         => [
            'primary'    => '#1b89ef',
            'secondary'  => '#ec398b'
        ],

        'theme_order'    => null // ['LaRecipeDarkTheme', 'customTheme']
    ],

    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    |
    | These options configure the SEO settings of your docs. You can set the
    | author, the description and the keywords. Also, LaRecipe by default
    | sets the canonical link to the viewed page's link automatically.
    |
    |
    */

    'seo'                 => [
        'author'          => 'classiebit',
        'description'     => 'Self-hosted event planning and management multi-organization script.',
        'keywords'        => '',
        'og'              => [
            'title'       => 'Eventmie Pro - Docs',
            'type'        => 'article',
            'url'         => 'https://eventmie-pro-docs.classiebit.com',
            'image'       => 'https://eventmie-pro-docs.classiebit.com/images/eventmie-pro-logo.png',
            'description' => 'Self-hosted event planning and management multi-organization script.',
        ]
    ],

   /*
   |--------------------------------------------------------------------------
   | Forum
   |--------------------------------------------------------------------------
   |
   | Giving a chance to your users to post their questions or feedback
   | directly on your docs, is pretty nice way to engage them more.
   | However, you can also enable/disable the forum's visibility.
   |
   | Supported Services: 'disqus'
   |
   */

  'forum'                   => [
        'enabled'           => false,
        'default'           => 'disqus',
        'services'          => [
            'disqus'        => [
                'site_name' => '', // yoursite.disqus.com
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Components and Packages
    |--------------------------------------------------------------------------
    |
    | Once you create a new asset or theme, its directory will be
    | published under `larecipe-components` folder. However, If
    | you want a different location, feel free to change it.
    |
    |
    */

    'packages' => [
        'path' => 'larecipe-components',
    ]
];
