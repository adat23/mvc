<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'blackjack', '_controller' => 'App\\Controller\\BlackJackController::blackJack'], null, null, null, true, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\BlackJackController::doc'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\CardGameController::session'], null, ['GET' => 0], null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete_post', '_controller' => 'App\\Controller\\CardGameController::sessionDelete'], null, ['POST' => 0], null, false, false, null]],
        '/session/deleteflash' => [[['_route' => 'session_delete_flash', '_controller' => 'App\\Controller\\CardGameController::sessionDeleteFlash'], null, ['GET' => 0], null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardGameController::deck'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffle'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck/joker' => [[['_route' => 'joker', '_controller' => 'App\\Controller\\CardGameController::addJoker'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\CardGameController::draw'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'apideck', '_controller' => 'App\\Controller\\CardGameJson::apiDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'apishuffle', '_controller' => 'App\\Controller\\CardGameJson::apiShuffle'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'apidraw', '_controller' => 'App\\Controller\\CardGameJson::apiDraw'], null, ['GET' => 0], null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/lucky/hi' => [[['_route' => 'app_lucky_hiworld', '_controller' => 'App\\Controller\\LuckyController::hiWorld'], null, null, null, false, false, null]],
        '/api/lucky/number' => [[['_route' => 'app_lucky_jsonnumber', '_controller' => 'App\\Controller\\LuckyController::jsonNumber'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\LuckyControllerJson::jsonQuote'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky_number', '_controller' => 'App\\Controller\\LuckyControllerTwig::number'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\LuckyControllerTwig::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\LuckyControllerTwig::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\LuckyControllerTwig::report'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\LuckyControllerTwig::jsonApi'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/card/deck/draw/(\\d+)(*:223)'
                .'|/api/deck/draw/(\\d+)(*:251)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'draw_many', '_controller' => 'App\\Controller\\CardGameController::drawMany'], ['num'], null, null, false, true, null]],
        251 => [
            [['_route' => 'apidrawmany', '_controller' => 'App\\Controller\\CardGameJson::apiDrawMany'], ['num'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
