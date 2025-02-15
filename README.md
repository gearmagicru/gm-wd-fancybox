# <img src="https://raw.githubusercontent.com/gearmagicru/gm-wd-fancybox/refs/heads/master/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Виджет лайтбокса "Fancybox"

[![Latest Stable Version](https://img.shields.io/packagist/v/gearmagicru/gm-wd-fancybox.svg)](https://packagist.org/packages/gearmagicru/gm-wd-fancybox)
[![Total Downloads](https://img.shields.io/packagist/dt/gearmagicru/gm-wd-fancybox.svg)](https://packagist.org/packages/gearmagicru/gm-wd-fancybox)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-gearmagicru/gm-wd-fancybox-blue.svg)](https://github.com/gearmagicru/gm-wd-fancybox)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/gearmagicru/gm-wd-fancybox/blob/master/LICENSE)
![Component type: widget](https://img.shields.io/badge/component%20type-widget-green.svg)
![Component ID: gm-wd-fancybox](https://img.shields.io/badge/component%20id-gm-wd-fancybox-green.svg)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

Лучшая альтернатива JavaScript-лайтбоксу для отображении мультимедиа.

## Пример применения
### с менеджером виджетов:
```
$lightbox = Gm::$app->widgets->get('gm.wd.fancybox', ['width' => 600, 'height' => 400]);
$lightbox->run();
```
### в шаблоне:
```
$this->widget('gm.wd.fancybox', ['width' => 600, 'height' => 400])->run();
```
### с namespace:
```
use Gm\Widget\Fancybox\Widget as Lightbox;
Lightbox::widget(['width' => 600, 'height' => 400])->run();
```
если namespace ранее не добавлен в PSR, необходимо выполнить:
```
Gm::$loader->addPsr4('Gm\Widget\Fancybox\\', Gm::$app->modulePath . '/gm/gm.wd.fancybox/src');
```

## Установка

Для добавления виджета в ваш проект, вы можете просто выполнить команду ниже:

```
$ composer require gearmagicru/gm-wd-fancybox
```

или добавить в файл composer.json вашего проекта:
```
"require": {
    "gearmagicru/gm-wd-fancybox": "*"
}
```

После добавления виджета в проект, воспользуйтесь Панелью управления GM Panel для установки его в редакцию вашего веб-приложения.

## Ресурсы
- [Старая версия Fancybox](http://fancybox.net/)
- [UI компонент Fancybox](https://fancyapps.com/fancybox/)