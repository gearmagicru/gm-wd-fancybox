<?php
/**
 * Этот файл является частью виджета веб-приложения GearMagic.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'gm.wd.fancybox',
    'category'    => 'lightbox',
    'name'        => 'Fancybox lightbox',
    'description' => 'Fancybox lightbox',
    'namespace'   => 'Gm\Widget\Fancybox',
    'path'        => '/gm/gm.wd.fancybox',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => ['article:onRender'],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM MS'],
        ['app', 'code' => 'GM CMS'],
        ['app', 'code' => 'GM CRM']
    ]
];
