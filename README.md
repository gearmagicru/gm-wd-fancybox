# <img src="https://raw.githubusercontent.com/gearmagicru/gm-wd-fancybox/refs/heads/master/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Виджет лайтбокса "Fancybox"

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