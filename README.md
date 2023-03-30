# Yii2 Slick
Override your input files with style for Yii2

[![Latest Stable Version](http://poser.pugx.org/diecoding/yii2-slick/v?)](https://packagist.org/packages/diecoding/yii2-slick)
[![Total Downloads](http://poser.pugx.org/diecoding/yii2-slick/downloads?)](https://packagist.org/packages/diecoding/yii2-slick)
[![Quality Score](https://img.shields.io/scrutinizer/g/sugeng-sulistiyawan/yii2-slick.svg?)](https://scrutinizer-ci.com/g/sugeng-sulistiyawan/yii2-slick)
[![Build Status](https://app.travis-ci.com/sugeng-sulistiyawan/yii2-slick.svg?branch=master)](https://app.travis-ci.com/sugeng-sulistiyawan/yii2-slick)
[![Latest Unstable Version](http://poser.pugx.org/diecoding/yii2-slick/v/unstable?)](https://packagist.org/packages/diecoding/yii2-slick)
[![License](http://poser.pugx.org/diecoding/yii2-slick/license?)](https://packagist.org/packages/diecoding/yii2-slick)
[![PHP Version Require](http://poser.pugx.org/diecoding/yii2-slick/require/php?)](https://packagist.org/packages/diecoding/yii2-slick)

> Yii2 Slick uses [Slick](https://github.com/JeremyFagis/slick) <br> Demo: http://kenwheeler.github.io/slick

## Table of Contents

- [Yii2 Slick](#yii2-slick)
  - [Table of Contents](#table-of-contents)
  - [Instalation](#instalation)
  - [Dependencies](#dependencies)
  - [Usage](#usage)

## Instalation

Package is available on [Packagist](https://packagist.org/packages/diecoding/yii2-slick), 
you can install it using [Composer](https://getcomposer.org).

```shell
composer require diecoding/yii2-slick ~1.0
```

or add to the require section of your `composer.json` file.

```
"diecoding/yii2-slick": "~1.0"
```

## Dependencies

- PHP 7.4+
- [yiisoft/yii2](https://github.com/yiisoft/yii2)
- [npm-asset/slick-carousel](https://asset-packagist.org/package/npm-asset/slick-carousel)

## Usage

> Read more demo or settings at http://kenwheeler.github.io/slick

```php
use diecoding\slick\SlickCarousel;

echo SlickCarousel::widget([
    'items' => [                    // (array) widget elements for the carousel
        // HTML content
        '<div><h3>1</h3></div>',
        '<div><h3>2</h3></div>',
        '<div><h3>3</h3></div>',
        '<div><h3>4</h3></div>',
        '<div><h3>5</h3></div>',
        '<div><h3>6</h3></div>',
    ],
    'containerOptions' => [],      // (array) HTML attributes to render on the container
    'containerTag'     => 'div',   // (string) HTML tag to render the container
    'itemOptions'      => [],      // (array) HTML attributes for the one item
    'itemTag'          => 'div',   // (string) HTML tag to render items for the carousel
    'skipCoreAssets'   => false,   // (bool) default `false`, `true` if use custom or external slick assets
    'pluginOptions'    => [        // (array) default `[]`, for option `$(#options['id']).slick(pluginOptions);`
        // @see https://github.com/kenwheeler/slick/#settings

        // 'accessibility'    => true,                                                         // boolean, default `true`
        // 'adaptiveHeight'   => false,                                                        // boolean, default `false`
        // 'appendArrows'     => $(element),                                                   // string, default `$(element)`
        // 'appendDots'       => $(element),                                                   // string, default `$(element)`
        // 'arrows'           => true,                                                         // boolean, default `true`
        // 'asNavFor'         => $(element),                                                   // string, default `$(element)`
        // 'autoplay'         => false,                                                        // boolean, default `false`
        // 'autoplaySpeed'    => 3000,                                                         // int, default `3000`
        // 'centerMode'       => false,                                                        // boolean, default `false`
        // 'centerPadding'    => '50px',                                                       // string, default `'50px'`
        // 'cssEase'          => 'ease',                                                       // string, default `'ease'`
        // 'customPaging'     => n/a,                                                          // function, default `n/a`
        // 'dots'             => false,                                                        // boolean, default `false`
        // 'dotsClass'        => 'slick-dots',                                                 // string, default `'slick-dots'`
        // 'draggable'        => true,                                                         // boolean, default `true`
        // 'easing'           => 'linear',                                                     // string, default `'linear'`
        // 'edgeFriction'     => 0.15,                                                         // integer, default `0.15`
        // 'fade'             => false,                                                        // boolean, default `false`
        // 'focusOnSelect'    => false,                                                        // boolean, default `false`
        // 'focusOnChange'    => false,                                                        // boolean, default `false`
        // 'infinite'         => true,                                                         // boolean, default `true`
        // 'initialSlide'     => 0,                                                            // integer, default `0`
        // 'lazyLoad'         => 'ondemand',                                                   // string, default `'ondemand'`
        // 'mobileFirst'      => false,                                                        // boolean, default `false`
        // 'nextArrow'        => <button type="button" class="slick-next">next</button>,       // string (html | jQuery selector) | object (DOM node | jQuery object), default `<button type="button" class="slick-next">next</button>`
        // 'pauseOnDotsHover' => false,                                                        // boolean, default `false`
        // 'pauseOnFocus'     => true,                                                         // boolean, default `true`
        // 'pauseOnHover'     => true,                                                         // boolean, default `true`
        // 'prevArrow'        => <button type="button" class="slick-prev">previous</button>,   // string (html | jQuery selector) | object (DOM node | jQuery object), default `<button type="button" class="slick-prev">previous</button>`
        // 'respondTo'        => 'window',                                                     // string, default `'window'`
        // 'responsive'       => null,                                                         // array, default `null`
        // 'rows'             => 1,                                                            // int, default `1`
        // 'rtl'              => false,                                                        // boolean, default `false`
        // 'slide'            => '',                                                           // string, default `''`
        // 'slidesPerRow'     => 1,                                                            // int, default `1`
        // 'slidesToScroll'   => 1,                                                            // int, default `1`
        // 'slidesToShow'     => 1,                                                            // int, default `1`
        // 'speed'            => 300,                                                          // int, default `300`
        // 'swipe'            => true,                                                         // boolean, default `true`
        // 'swipeToSlide'     => false,                                                        // boolean, default `false`
        // 'touchMove'        => true,                                                         // boolean, default `true`
        // 'touchThreshold'   => 5,                                                            // int, default `5`
        // 'useCSS'           => true,                                                         // boolean, default `true`
        // 'useTransform'     => true,                                                         // boolean, default `true`
        // 'variableWidth'    => false,                                                        // boolean, default `false`
        // 'vertical'         => false,                                                        // boolean, default `false`
        // 'verticalSwiping'  => false,                                                        // boolean, default `false`
        // 'waitForAnimate'   => true,                                                         // boolean, default `true`
        // 'zIndex'           => 1000,                                                         // number, default `1000`
    ],
    'pluginEvents'     => [        // array default `[]`, JQuery events
        // @see https://github.com/kenwheeler/slick/#events

        // 'afterChange' => 'function(event, slick, currentSlide) {
        //     console.log("After slide change callback");
        // }',
        // 'beforeChange' => 'function(event, slick, currentSlide, nextSlide) {
        //     console.log("Before slide change callback");
        // }',
        // 'breakpoint' => 'function(event, slick, breakpoint) {
        //     console.log("Fires after a breakpoint is hit");
        // }',
        // 'destroy' => 'function(event, slick) {
        //     console.log("When slider is destroyed, or unslicked.");
        // }',
        // 'edge' => 'function(event, slick, direction) {
        //     console.log("Fires when an edge is overscrolled in non-infinite mode.");
        // }',
        // 'init' => 'function(event, slick) {
        //     console.log("When Slick initializes for the first time callback. Note that this event should be defined before initializing the slider.");
        // }',
        // 'reInit' => 'function(event, slick) {
        //     console.log("Every time Slick (re-)initializes callback");
        // }',
        // 'setPosition' => 'function(event, slick) {
        //     console.log("Every time Slick recalculates position");
        // }',
        // 'swipe' => 'function(event, slick, direction) {
        //     console.log("Fires after swipe/drag");
        // }',
        // 'lazyLoaded' => 'function(event, slick, image, imageSource) {
        //     console.log("Fires after image loads lazily");
        // }',
        // 'lazyLoadError' => 'function(event, slick, image, imageSource) {
        //     console.log("Fires after image fails to load");
        // }',
    ],
]);
```