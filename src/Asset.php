<?php

/**
 * Created by PhpStorm.
 * User: yevgen
 * Date: 24.05.15
 * Time: 17:14
 */
namespace YevgenGrytsay\marionettejs;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class Asset
 *
 * @package YevgenGrytsay\marionettejs
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'underscore/underscore.js',
        'backbone/backbone.js',
        'marionette/lib/backbone.marionette.js',
    ];
    public $depends = [
        JqueryAsset::class
    ];
}