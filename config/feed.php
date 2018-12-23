<?php

return [
    'feeds' => [
        'main' => [
            'url' => '/rss',
            'title' => 'johanleroux.me',
            'items' => \App\Post::class . '@getFeedItems',
        ],
    ],
];
