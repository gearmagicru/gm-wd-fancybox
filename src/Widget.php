<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\Fancybox;

use Gm;
use Gm\View\ClientScript;
use Gm\View\WidgetResourceTrait;

/**
 * Виджет лайтбокса "Fancybox" от Fancyapps.
 * 
 * @link http://fancybox.net
 * @link https://fancyapps.com/fancybox/
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\Fancybox
 * @since 1.0
 */
class Widget extends \Gm\View\BaseWidget
{
    use WidgetResourceTrait;

    /**
     * {@inheritdoc}
     */
    protected array $defaultSettings = [
        'padding'    => 10,
        'margin'     => 20,
        'opacity'    => false,
        'cyclic'     => false,
        'scrolling'  => 'auto',
        'width'      => 560,
        'height'     => 340,
        'autoScale'  => true,
        'showCloseButton'    => true,
        'autoDimensions'     => true,
        'centerOnScroll'     => false,
        'hideOnOverlayClick' => true,
        'hideOnContentClick' => false,
        'overlayShow'        =>  true,
        'overlayOpacity'     => 0.3,
        'overlayColor'       => '#666',
        'titleShow'          => true,
        'titlePosition'      => 'outside',
        'transitionIn'       => 'fade',
        'transitionOut'      => 'fade',
        'speedIn'            => 300,
        'speedOut'           => 300,
        'changeFade'         => 'fast',
        'easingIn'           => 'swing',
        'easingOut'          => 'swing' ,
        'showCloseButton'    => true,
        'showNavArrows'      => true,
        'enableEscapeButton' => true
    ];

    /**
     * Сервисы CDN подключения jQuery.
     * 
     * @var array
     */
    public array $cdnJs = [
        'yandex'     => 'https://yastatic.net/jquery/1.4.4/jquery.min.js',
        'google'     => 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js',
        'cloudflare' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js',
        'jquery'     => 'http://code.jquery.com/jquery-1.4.4.min.js'
    ];

    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        $self = $this;

        // событие перед выводом материала в шаблон (виджет gm.wd.article)
        $this->on('article:onRender', function ($article) use ($self) {
            $self->initScript();
        });
    }

    /**
     * Добавляет пакет скриптов клиенту для подключения лайтбокса.
     * 
     * @return void
     */
    public function initScript(): void
    {
        $url = $this->getAssetsUrl();
        /** @var \Gm\View\ClientScript $script */
        $script = Gm::$app->clientScript;
        /** @var Config $settings  */
        $settings = $this->getSettings();

        // jQuery
        if ($settings->useJQuery) { 
            $cdnJs = $this->cdnJs[$settings->cdn] ?? '';
            $script->registerJsFile(
                $cdnJs === '' || $cdnJs === 'local' ? $url . '/js/jquery.min.js' : $cdnJs,
                'jquery.min.js'
            );
        }
        // jQuery Easing
        if ($settings->useJQueryEasing) { 
            $script->registerJsFile($url . '/js/jquery.easing-1.3.js', 'jquery.easing.min.js');
        }
        // jQuery MouseWheel
        if ($settings->useJQueryMouseWheel) { 
            $script->registerJsFile($url . '/js/jquery.mousewheel-3.0.4.js', 'jquery.mousewheel.min.js');
        }
        // Fancybox
        $script
            ->appendPackage('fancybox', [
                'position' => ClientScript::POS_END,
                'js'       => ['jquery.fancybox.js'  => [$url . '/dist/jquery.fancybox-1.3.7.js']],
                'css'      => ['jquery.fancybox.css' => [$url . '/dist/css/jquery.fancybox-1.3.7.css']]
            ])
            ->registerPackage('fancybox')
            ->registerJs($this->getScript(), ClientScript::POS_END, 'fancybox');
    }

    /**
     * Возвращает скрипт параметров настроек виджета.
     * 
     * @return string
     */
    public function getScriptOptions(): string
    {
        $params = $this->getAllSettingWithoutDefaults();
        // исключение
        unset($params['cdn'], $params['useJQuery'], $params['useJQueryEasing'], $params['useJQueryMouseWheel']);
        return $this->formatScriptParams($params);
    }

    /**
     * Возвращает скрипт подключения.
     *
     * @return string
     */
    protected function getScript(): string
    {
        $options  = $this->getScriptOptions();
        return "$(document).ready(function() { "
             . "$('article img[data-ligthbox=\"1\"]').each(function () { "
             . "let s = $(this).attr('style'); "
             . "$(this).removeAttr('style'); "
             . "$(this).replaceWith('<a href=\"' + $(this).attr('data-src') + '\"' + (s ? 'style=\"' + s + '\"' : '') + ' data-ligthbox=\"1\">' + this.outerHTML + '</div>'); "
             . "});"
             . '$(\'article a[data-ligthbox="1"]\').fancybox({' . $options . '}); '
             . "});";
    }
}