<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/spotify' => [[['_route' => 'spotify', '_controller' => 'App\\Controller\\SpotifyController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/deezer/artist/([^/]++)(*:65)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [
            [['_route' => 'deezer_artist_albums', '_controller' => 'App\\Controller\\DeezerController::showArtistAlbums'], ['artistId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
