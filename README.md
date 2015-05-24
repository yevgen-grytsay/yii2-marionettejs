# MarionetteJs asset bundle for Yii2

This extensions provides support for marionette.js asset handling for Yii2.

## Requirements

 - [yiisoft/yii2](https://github.com/yiisoft/yii2)
 - [fxp/composer-asset-plugin](https://github.com/francoispluchino/composer-asset-plugin)
 - [marionettejs/backbone.marionette](https://github.com/marionettejs/backbone.marionette)
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

First run this to allow managing bower package dependencies through composer.
Skip this step if already done when installing yii2:

```
composer global require "fxp/composer-asset-plugin:1.0.0-beta4"
```

Then either run

```
php composer.phar require --prefer-dist yevgen-grytsay/yii2-marionettejs "*"
```

or add

```
"yevgen-grytsay/yii2-marionettejs": "*"
```

to the require section of your `composer.json` file.