<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
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

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => '',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'Jigsaw Basically Basic',

    // Social media links/icons that are used in the footer, add as many as you like!
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
        'medium' => [
            'link' => '#',
            'icon' => 'fab fa-medium',
            'label' => 'Medium',
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
    // Details about the site owner/author
    'author' => [
        'name' => 'Rick',
        'image' => '',
        'twitter' => '',
    ],
];
