<?php

namespace diecoding\slick;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * SlickCarouselAsset represents a collection of asset files, such as CSS, JS, images.
 * 
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class SlickCarouselAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/slick=carousel';

    /**
     * @inheritdoc
     */
    public $css = [
        'slick.css',
        'slick-theme.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'slick.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
    ];
}
