<?php
/**
 * Этот файл является частью виджета веб-приложения GearMagic.
 * 
 * Файл конфигурации настроек виджета.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'cdn'                 => 'yandex', // подключить библиотеку jQuery
    'useJQuery'           => false, // подключить библиотеку jQuery
    'useJQueryEasing'     => false, // подключить библиотеку анимации jQuery Easing
    'useJQueryMouseWheel' => false, // подключить библиотеку работы колесика мыши jQuery MouseWheel
    'padding'             => 10, // пространство между обёрткой Fancybox и содержимым, пкс.
    'margin'              => 20, // пространство между видимой областью и Fancybox, пкс.
    'opacity'             => false, // изменить прозрачность содержимого для переходов elastic
    'showCloseButton'     => true, // отображать кнопку закрытия
    'showNavArrows'       => true, // отображать кнопки навигации
    'enableEscapeButton'  => true, // применять кнопку Esc для закрытия FancyBox
    'cyclic'              => false, // цикличность галереи с появлением кнопок «Далее» / «Назад»
    'scrolling'           => 'auto', // прокрутка изображений
    'width'               => 560, // ширина видимой области Fancybox
    'height'              => 340, // высота видимой области Fancybox
    'autoScale'           => true, // масштабировать изображение по области просмотра
    'centerOnScroll'      => false, // центрировать Fancybox при прокрутке страницы
    'hideOnOverlayClick'  => true, // закрывать Fancybox при нажатии кнопкой на перекрытии (overlay)
    'hideOnContentClick'  => false, // закрывать Fancybox при нажатии кнопкой на содержимом
    'changeSpeed'         => 300, // скорость изменения размера при смене элементов галереи
    'changeFade'          => 'fast', // скорость исчезновения контента при смене элементов галереи
    'easingIn'            => 'swing', // эффект при появлении изображения
    'easingOut'           => 'swing', // эффект при скрытии изображения
    'autoDimensions'      => true, // автоматически изменять размер изображения при его получении
    'overlayShow'         => true, // показать перекрытие
    'overlayOpacity'      => 0.3, // прозрачность перекрытия 
    'overlayColor'        => '#666', // цвет перекрытия
    'titleShow'           => true, // показывать заголовок
    'titlePosition'       => 'outside', // положение заголовка
    'transitionIn'        => 'fade', // эффект перехода при появлении изображения
    'transitionOut'       => 'fade', // эффект перехода при скрытии изображения
    'speedIn'             => 300, // скорость эффекта при появлении изображения
    'speedOut'            => 300 // скорость эффекта при скрытии изображения
];
