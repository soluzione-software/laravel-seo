<?php

return [
    'table' => 'seo_data',

    'title' => [
        /*
         * string
         */
        'prefix' => '',

        /*
         * string
         */
        'suffix' => '',
    ],

    'defaults' => [
        /*
         * string|null
         */
        'title' => null,

        /*
         * string|null
         */
        'description' => null,
    ],

    'meta' => [
        'defaults' => [
            /*
             * string|null
             */
            'title' => null,

            /*
             * string|null
             */
            'description' => null,

            /*
             * array<string>
             */
            'keywords' => [],
        ],
    ],

    'open_graph' => [
        'defaults' => [
            /*
             * string
             * options: website, article, book, profile, music.song, music.album, music.playlist, music.radio_station,
             * video.movie, video.episode, video.tv_show, video.other
             */
            'type' => 'website',

            /*
             * string|null
             * if null, config "seo.defaults.title" will be used
             */
            'title' => null,

            /*
             * string|null
             * if null, config "seo.defaults.description" will be used
             */
            'description' => null,

            /*
             * string[]
             */
            'images' => [],

            /*
             * string|null
             * if null, current url will be used
             */
            'url' => null,
        ],
    ],

    'twitter' => [
        'defaults' => [
            /*
             * string|null
             * if null, config "seo.defaults.title" will be used
             */
            'title' => null,

            /*
             * string|null
             * if null, config "seo.defaults.description" will be used
             */
            'description' => null,

            /*
             * string|null
             */
            'image' => null,

            /*
             * string|null
             */
            'image_alt' => null,
        ],
    ],
];
