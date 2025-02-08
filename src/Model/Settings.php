<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\Fancybox\Model;

use Gm\Panel\Data\Model\WidgetSettingsModel;

/**
 * Модель настроек виджета.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\Fancybox\Model
 * @since 1.0
 */
class Settings extends WidgetSettingsModel
{
    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'cdn'                 => 'cdn', // подключить библиотеки через
            'useJQuery'           => 'useJQuery', // подключить библиотеку jQuery
            'useJQueryEasing'     => 'useJQueryEasing', // подключить библиотеку анимации jQuery Easing
            'useJQueryMouseWheel' => 'useJQueryMouseWheel', // подключить библиотеку работы колесика мыши jQuery MouseWheel
            'padding'             => 'padding', // пространство между обёрткой Fancybox и содержимым, пкс.
            'margin'              => 'margin', // пространство между видимой областью и Fancybox, пкс.
            'opacity'             => 'opacity', // изменить прозрачность содержимого для переходов elastic
            'showCloseButton'     => 'showCloseButton', // отображать кнопку закрытия
            'showNavArrows'       => 'showNavArrows', // отображать кнопки навигации
            'enableEscapeButton'  => 'enableEscapeButton', // применять кнопку Esc для закрытия FancyBox
            'cyclic'              => 'cyclic', // цикличность галереи с появлением кнопок «Далее» / «Назад»
            'autoScale'           => 'autoScale', // масштабировать изображение по области просмотра
            'centerOnScroll'      => 'centerOnScroll', // центрировать Fancybox при прокрутке страницы
            'hideOnOverlayClick'  => 'hideOnOverlayClick', // закрывать Fancybox при нажатии кнопкой на перекрытии (overlay)
            'hideOnContentClick'  => 'hideOnContentClick', // закрывать Fancybox при нажатии кнопкой на содержимом
            'changeSpeed'         => 'changeSpeed', // скорость изменения размера при смене элементов галереи
            'changeFade'          => 'changeFade', // скорость исчезновения контента при смене элементов галереи
            'easingIn'            => 'easingIn', // эффект при появлении изображения
            'easingOut'           => 'easingOut', // эффект при скрытии изображения
            'overlayShow'         => 'overlayShow', // Показать перекрытие
            'overlayOpacity'      => 'overlayOpacity', // прозрачность перекрытия 
            'overlayColor'        => 'overlayColor', // цвет перекрытия
            'transitionIn'        => 'transitionIn', // эффект перехода при появлении изображения
            'transitionOut'       => 'transitionOut', // эффект перехода при скрытии изображения
            'speedIn'             => 'speedIn', // скорость эффекта при появлении изображения
            'speedOut'            => 'speedOut', // скорость эффекта при скрытии изображения
            'titleShow'           => 'titleShow', // показывать заголовок
            'titlePosition'       => 'titlePosition', // положение заголовка
            'width'               => 'width', // ширина видимой области Fancybox
            'height'              => 'height', // высота видимой области Fancybox
            'autoDimensions'      => 'autoDimensions' // автоматически изменять размер изображения при его получении
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'cdn'                 => 'Connect libraries via',
            'padding'             => 'Space between Fancybox wrapper and content, px.',
            'margin'              => 'Space between viewport and Fancybox wrapper, px.',
            'opacity'             => 'When true, transparency of content is changed for elastic transitions',
            'showCloseButton'     => 'Toggle close button',
            'showNavArrows'       => 'Toggle navigation arrows',
            'enableEscapeButton'  => 'Toggle if pressing Esc button closes Fancybox',
            'cyclic'              => 'When true, galleries will be cyclic, allowing you to keep pressing next/back',
            'autoScale'           => 'If true, Fancybox is scaled to fit in viewport',
            'centerOnScroll'      => 'When true, Fancybox is centered while scrolling page',
            'hideOnOverlayClick'  => 'Toggle if clicking the overlay should close Fancybox',
            'hideOnContentClick'  => 'Toggle if clicking the content should close Fancybox',
            'changeSpeed'         => 'Speed of resizing when changing gallery items, ms.',
            'changeFade'          => 'Speed of the content fading while changing gallery items',
            'easingIn'            => 'Image appearance',
            'easingOut'           => 'Hiding an image',
            'overlayShow'         => 'Toggle overlay',
            'overlayOpacity'      => 'Opacity of the overlay',
            'overlayColor'        => 'Color of the overlay',
            'transitionIn'        => 'Transition effect when image appears',
            'transitionOut'       => 'Transition effect when hiding an image',
            'speedIn'             => 'Effect speed when image appears, ms.',
            'speedOut'            => 'Effect speed when hiding an image, ms.',
            'titleShow'           => 'Toggle title',
            'titlePosition'       => 'The position of title',
            'width'               => 'Width, px',
            'height'              => 'Height, px',
            'autoDimensions'      => 'Automatically resize an image when it is received'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function validationRules(): array
    {
        return [
            [
                ['padding', 'margin'], 
                'between',
                'min' => 0, 'max' => PHP_INT_MAX
            ],
            [
                ['changeSpeed', 'speedIn', 'speedOut'], 
                'between',
                'min' => 0, 'max' => PHP_INT_MAX
            ],
            [
                'overlayOpacity', 
                'between',
                'min' => 0, 'max' => 1
            ],
            [
                ['width', 'height'], 
                'between',
                'min' => 200, 'max' => 2000
            ],
            [
                'cdn',
                'enum',
                'enum' => ['yandex', 'google', 'jquery', 'cloudflare', 'local']
            ],
            [
                'changeFade',
                'enum',
                'enum' => ['fast', 'slow']
            ],
            [
                'titlePosition',
                'enum',
                'enum' => ['outside', 'inside', 'before']
            ],
            [
                ['transitionOut', 'transitionIn'],
                'enum',
                'enum' => ['fade', 'elastic', 'none']
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [
                [
                    'useJQuery', 'useJQueryEasing', 'useJQueryMouseWheel', 'opacity', 'showCloseButton', 
                    'showNavArrows', 'enableEscapeButton', 'cyclic', 'autoScale', 'centerOnScroll', 'hideOnOverlayClick',
                    'hideOnContentClick', 'autoDimensions', 'overlayShow', 'titleShow'
                ], 'logic' => [true, false]
            ],
            [
                'overlayOpacity', 'type' => 'float'
            ],
            [
                ['padding', 'margin', 'changeSpeed', 'speedIn', 'speedOut', 'width', 'height'], 'type' => 'int'
            ]
        ];
    }
}