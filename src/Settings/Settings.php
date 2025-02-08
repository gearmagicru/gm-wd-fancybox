<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Widget\Fancybox\Settings;

use Gm\Panel\Helper\ExtCombo;
use Gm\Panel\Widget\SettingsWindow;

/**
 * Настройки лайтбокса "Fancybox".
 * 
 * @link http://fancybox.net/api
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\Fancybox\Settings
 * @since 1.0
 */
class Settings extends SettingsWindow
{
    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        // панель формы (Gm.view.form.Panel GmJS)
        $this->form->autoScroll = true;
        $this->form->bodyPadding = 1;

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $this->width = 640;
        $this->height = 800;
        $this->resizable = false;
        $this->responsiveConfig = [
            'height < 900' => ['height' => '99%'],
            'width < 640' => ['width' => '99%'],
        ];
    }

    /**
     * Возвращает вариант выбора эффекта анимации.
     * 
     * @return array<string, string>
     */
    protected function getEasingData(): array
    {
        return [
            ['swing', 'swing'],
            ['easeInQuad', 'easeInQuad'],
            ['easeOutQuad', 'easeOutQuad'],
            ['easeInOutQuad', 'easeInOutQuad'],
            ['easeInCubic', 'easeInCubic'],
            ['easeOutCubic', 'easeOutCubic'],
            ['easeInOutCubic', 'easeInOutCubic'],
            ['easeInQuart', 'easeInQuart'],
            ['easeOutQuart', 'easeOutQuart'],
            ['easeInOutQuart', 'easeInOutQuart'],
            ['easeInQuint', 'easeInQuint'],
            ['easeOutQuint', 'easeOutQuint'],
            ['easeInOutQuint', 'easeInOutQuint'],
            ['easeInSine', 'easeInSine'],
            ['easeOutSine', 'easeOutSine'],
            ['easeInOutSine', 'easeInOutSine'],
            ['easeInExpo', 'easeInExpo'],
            ['easeOutExpo', 'easeOutExpo'],
            ['easeInOutExpo', 'easeInOutExpo'],
            ['easeInCirc', 'easeInCirc'],
            ['easeOutCirc', 'easeOutCirc'],
            ['easeInOutCirc', 'easeInOutCirc'],
            ['easeInElastic', 'easeInElastic'],
            ['easeOutElastic', 'easeOutElastic'],
            ['easeInOutElastic', 'easeInOutElastic'],
            ['easeInBack', 'easeInBack'],
            ['easeOutBack', 'easeOutBack'],
            ['easeInOutBack', 'easeInOutBack'],
            ['easeInBounce', 'easeInBounce'],
            ['easeOutBounce', 'easeOutBounce'],
            ['easeInOutBounce', 'easeInOutBounce'],
        ];
    }

    /**
     * Возвращает вкладку "Общие параметры".
     * 
     * @return array
     */
    protected function getTabCommon(): array
    {
        return [
            'title'       => '#Common parameters',
            'bodyPadding' => 10,
            'items'       => [
                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Plug-in libraries',
                    'defaults' => [
                        'xtype'      => 'checkbox',
                        'labelAlign' => 'right',
                        'labelWidth' => 400,
                        'inputValue' => 1
                    ],
                    'items'  => [
                        ExtCombo::local(
                            '#Connect libraries via', 'cdn', 
                            [
                                ['yandex', 'Yandex CDN'], 
                                ['google', 'Google CDN'], 
                                ['jquery', 'jQuery CDN'], 
                                ['cloudflare', 'Cloudflare CDN'],
                                ['local', '#Local']
                            ]
                        ),
                        [
                            'name'       => 'useJQuery',
                            'ui'         => 'switch',
                            'fieldLabel' => '#include jQuery library'
                        ],
                        [
                            'name'       => 'useJQueryEasing',
                            'ui'         => 'switch',
                            'fieldLabel' => '#include jQuery Easing animation library'
                        ],
                        [
                            'name'       => 'useJQueryMouseWheel',
                            'ui'         => 'switch',
                            'fieldLabel' => '#include mouse wheel library jQuery MouseWheel'
                        ]
                    ]
                ],
                [
                    'xtype' => 'label',
                    'ui'    => 'fieldset-comment',
                    'text'  => '#Libraries must be included if they are not included in your site\'s theme'
                ]
            ]
        ];
    }

    /**
     * Возвращает вкладку "Параметры FancyBox".
     * 
     * @return array
     */
    protected function getTabFancybox(): array
    {
        return [
            'title'       => '#Fancybox parameters',
            'bodyPadding' => 10,
            'autoScroll'  => true,
            'defaults'    => [
                'xtype'      => 'textfield',
                'labelWidth' => 410,
                'labelAlign' => 'right'
            ],
            'items' => [
                [
                    'xtype'      => 'numberfield',
                    'name'       => 'padding',
                    'fieldLabel' => '#Space between Fancybox wrapper and content, px.',
                    'minValue'   => 0,
                    'width'      => 500
                ],
                [
                    'xtype'      => 'numberfield',
                    'name'       => 'margin',
                    'fieldLabel' => '#Space between viewport and Fancybox wrapper, px.',
                    'minValue'   => 0,
                    'width'      => 500
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'opacity',
                    'fieldLabel' => '#When true, transparency of content is changed for elastic transitions',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'showCloseButton',
                    'fieldLabel' => '#Toggle close button',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'showNavArrows',
                    'fieldLabel' => '#Toggle navigation arrows',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'enableEscapeButton',
                    'fieldLabel' => '#Toggle if pressing Esc button closes Fancybox',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'cyclic',
                    'fieldLabel' => '#When true, galleries will be cyclic, allowing you to keep pressing next/back',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'autoScale',
                    'fieldLabel' => '#If true, Fancybox is scaled to fit in viewport',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'centerOnScroll',
                    'fieldLabel' => '#When true, Fancybox is centered while scrolling page',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'hideOnOverlayClick',
                    'fieldLabel' => '#Toggle if clicking the overlay should close Fancybox',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'hideOnContentClick',
                    'fieldLabel' => '#Toggle if clicking the content should close Fancybox',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'checkbox',
                    'ui'         => 'switch',
                    'name'       => 'autoDimensions',
                    'fieldLabel' => '#Automatically resize an image when it is received',
                    'inputValue' => 1
                ],
                [
                    'xtype'      => 'numberfield',
                    'name'       => 'changeSpeed',
                    'fieldLabel' => '#Speed of resizing when changing gallery items, ms.',
                    'step'       => 10,
                    'minValue'   => 0,
                    'width'      => 500
                ],
                ExtCombo::local(
                    '#Speed of the content fading while changing gallery items', 'changeFade', 
                    [
                        ['fast', '#Fast'], 
                        ['slow', '#Slow']
                    ],
                    [
                        'anchor' => '100%'
                    ]
                ),
                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Easing used for elastic animations',
                    'style'    => 'margin-top:20px',
                    'defaults' => [
                        'labelWidth' => 320,
                        'labelAlign' => 'right'
                    ],
                    'items' => [
                        ExtCombo::local('#Image appearance', 'easingIn',  $this->getEasingData()),
                        ExtCombo::local('#Hiding an image', 'easingOut', $this->getEasingData())
                    ]
                ],
                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Transition effect between images',
                    'defaults' => [
                        'labelWidth' => 320,
                        'labelAlign' => 'right'
                    ],
                    'items' => [
                        ExtCombo::local(
                            '#Transition effect when image appears', 'transitionIn', 
                            [
                                ['none', '#None'], ['elastic', '#Elastic'], ['fade', '#Fade']
                            ]
                        ),
                        ExtCombo::local(
                            '#Transition effect when hiding an image', 'transitionOut', 
                            [
                                ['none', '#None'], ['elastic', '#Elastic'], ['fade', '#Fade']
                            ]
                        ),
                        [
                            'xtype'      => 'numberfield',
                            'name'       => 'speedIn',
                            'fieldLabel' => '#Effect speed when image appears, ms.',
                            'step'       => 10,
                            'minValue'   => 0,
                            'width'      => 430
                        ],
                        [
                            'xtype'      => 'numberfield',
                            'name'       => 'speedOut',
                            'fieldLabel' => '#Effect speed when hiding an image, ms.',
                            'step'       => 10,
                            'minValue'   => 0,
                            'width'      => 430
                        ],
                    ]
                ],
                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Overlay',
                    'defaults' => [
                        'labelWidth' => 180,
                        'labelAlign' => 'right',
                        'width'      => 300
                    ],
                    'items' => [
                        [
                            'xtype'      => 'checkbox',
                            'ui'         => 'switch',
                            'name'       => 'overlayShow',
                            'fieldLabel' => '#Toggle overlay',
                            'inputValue' => 1
                        ],
                        [
                            'xtype'      => 'numberfield',
                            'name'       => 'overlayOpacity',
                            'step'       => 0.1,
                            'minValue'   => 0,
                            'maxValue'   => 1,
                            'fieldLabel' => '#Opacity of the overlay',
                        ],
                        [
                            'xtype'      => 'textfield',
                            'name'       => 'overlayColor',
                            'fieldLabel' => '#Color of the overlay',
                        ],
                    ]
                ],
                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Fancybox visible area dimensions',
                    'defaults' => [
                        'xtype'      => 'numberfield',
                        'labelWidth' => 180,
                        'labelAlign' => 'right',
                        'minValue'   => 200,
                        'width'      => 300
                    ],
                    'items' => [
                        [
                            'name'       => 'width',
                            'fieldLabel' => '#Width, px'
                        ],
                        [
                            'name'       => 'height',
                            'fieldLabel' => '#Height, px'
                        ]
                    ]
                ],

                [
                    'xtype'    => 'fieldset',
                    'title'    => '#Image title',
                    'defaults' => [
                        'labelWidth' => 180,
                        'labelAlign' => 'right'
                    ],
                    'items' => [
                        [
                            'xtype'      => 'checkbox',
                            'ui'         => 'switch',
                            'name'       => 'titleShow',
                            'fieldLabel' => '#Toggle title',
                        ],
                        ExtCombo::local(
                            '#The position of title', 'titlePosition', 
                            [
                                ['outside', '#Outside'], 
                                ['inside', '#Inside'],
                                ['before', '#Before']
                            ],
                            [
                                'width' => 400
                            ]
                        ),
                    ]
                ]
            ]
        ];
    }

    /**
     * Возвращает вкладку "Версия".
     * 
     * @return array
     */
    protected function getTabVersion(): array
    {
        return [
            'title'       => '#Version',
            'bodyPadding' => 10,
            'autoScroll'  => true,
            'layout'      => 'anchor',
            'defaults'    => [
                'labelWidth' => 70,
                'labelAlign' => 'right',
            ],
            'items' => [
                [
                    'xtype'      => 'displayfield',
                    'ui'         => 'parameter',
                    'fieldLabel' => '#version',
                    'value'      => '1.3.7'
                ],
                [
                    'xtype'      => 'displayfield',
                    'ui'         => 'parameter',
                    'fieldLabel' => '#site',
                    'value'      => '<a target="_blank" href="http://fancybox.net/">http://fancybox.net/</a>'
                ],
                [
                    'xtype'      => 'displayfield',
                    'ui'         => 'parameter',
                    'fieldLabel' => '#license',
                    'value'      => '<a target="_blank" href="https://fancyapps.com/license/">https://fancyapps.com/license/</a>'
                ],
                [
                    'xtype' => 'label',
                    'ui'    => 'header-line',
                    'text'  => '#License Agreement'
                ],
                [
                    'cls' => 'x-form-display-field',
                    'html' => 'This License Agreement (the "Agreement") is between Jānis Skarnelis (the "Author") and You (including your agents and affiliates), a licensee of Author\'s work (the "Software"). By purchasing, installing, or otherwise using the Software, you agree to be bound by the terms and conditions of this Agreement. Author reserves the right to alter or terminate this agreement at any time, for any reason, with or without notice.<br>'
                    . 'Single-Use License, Extended License & Business License purchases allow "live" installations of Software in a production environment and ancillary "development use only" installations as needed to support the live installation (such as development and a staging servers) according to the terms of each license type described below. Every installation regardless of the project type, location or legal form requires valid paid License.'
                ]
            ]
        ];
    }

    /**
     * Возвращает панель вкладок.
     * 
     * @return array
     */
    protected function getTabPanel(): array
    {
        return [
            'xtype'           => 'tabpanel',
            'activeTab'       => 0,
            'ui'              => 'flat-light',
            'enableTabScroll' => true,
            'anchor'          => '100% 100%',
            'autoRender'      => true,
            'items'           => [
                $this->getTabCommon(),
                $this->getTabFancybox(),
                $this->getTabVersion()
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeRender(): bool
    {
        parent::beforeRender();

        $this->form->items = $this->getTabPanel();
        return true;
    }
}