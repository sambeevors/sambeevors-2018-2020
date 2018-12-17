<?php

return [
    'production' => false,
    'baseUrl' => 'https://sambeevors.com',
    'site_name' => 'Sam Beevors',
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y/m/d}/{filename}',
            'sort' => ['-date'],
            'excerpt' => function ($text, $chars = 25) {
                $text = strip_tags($text);
                if (strlen($text) <= $chars) return $text;
                $text = $text . ' ';
                $text = substr($text, 0, $chars);
                $text = substr($text, 0, strrpos($text, ' '));
                $text = $text . '...';
                return $text;
            },
        ],
    ]
];
