<?php

namespace alkurn\lazyload\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class LazyAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';

    public $js = [
        'js/device.min.js',
        'js/lazyload.js',
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];

    public $css = [
        'css/lazyload.css'
    ];

    public $depends = [
        JqueryAsset::class
    ];
}