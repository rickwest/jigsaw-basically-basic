<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-basically-basic.netlify.com
    'baseUrl' => '',
    'production' => false,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ]
    ],

    // Number of collection items to show per page
    'perPage' => 5,

    // Your email address
    'email' => '',

    // The name of the site.
    'siteName' => 'Jigsaw Basically Basic',

    // Description of the site
    'siteDescription' => '',

    // Your name
    'siteAuthor' => '',

    // Site logo
    'logo' => '/assets/images/logo.png',

    // Social media links/icons that are used in the menu, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => '#',
            'icon' => 'fab fa-twitter',
            'label' => 'Twitter',
        ],
        'linkedin' => [
            'link' => '#',
            'icon' => 'fab fa-linkedin',
            'label' => 'LinkedIn',
        ],
        'github' => [
            'link' => '#',
            'icon' => 'fab fa-github',
            'label' => 'Github',
        ],
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]
    ],

    'readingTime' => function($post) {
        $mins = round(str_word_count(strip_tags($post)) / 200);
        return $mins . ' min read';
    }
];
