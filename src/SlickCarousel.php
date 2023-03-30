<?php

namespace diecoding\slick;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * SlickCarousel is class for widgets that collect user file inputs.
 * 
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class SlickCarousel extends Widget
{
    /**
     * @var array widget elements for the carousel
     */
    public $items = [];

    /**
     * @var array HTML attributes to render on the container
     */
    public $containerOptions = [];

    /**
     * @var string HTML tag to render the container
     */
    public $containerTag = 'div';

    /**
     * @var array HTML attributes for the one item
     */
    public $itemOptions = [];

    /**
     * @var string HTML tag to render items for the carousel
     */
    public $itemTag = 'div';

    /**
     * @var bool default `false`, `true` if use custom or external slick assets
     */
    public $skipCoreAssets = false;

    /**
     * @var array default `[]`, for option `$(#options['id']).slick(pluginOptions);`
     * @see https://github.com/kenwheeler/slick/#settings
     * 
     * ```php
     * 'pluginEvents' => [
     *     'accessibility'    => true,                                                         // boolean, default `true`
     *     'adaptiveHeight'   => false,                                                        // boolean, default `false`
     *     'appendArrows'     => $(element),                                                   // string, default `$(element)`
     *     'appendDots'       => $(element),                                                   // string, default `$(element)`
     *     'arrows'           => true,                                                         // boolean, default `true`
     *     'asNavFor'         => $(element),                                                   // string, default `$(element)`
     *     'autoplay'         => false,                                                        // boolean, default `false`
     *     'autoplaySpeed'    => 3000,                                                         // int, default `3000`
     *     'centerMode'       => false,                                                        // boolean, default `false`
     *     'centerPadding'    => '50px',                                                       // string, default `'50px'`
     *     'cssEase'          => 'ease',                                                       // string, default `'ease'`
     *     'customPaging'     => n/a,                                                          // function, default `n/a`
     *     'dots'             => false,                                                        // boolean, default `false`
     *     'dotsClass'        => 'slick-dots',                                                 // string, default `'slick-dots'`
     *     'draggable'        => true,                                                         // boolean, default `true`
     *     'easing'           => 'linear',                                                     // string, default `'linear'`
     *     'edgeFriction'     => 0.15,                                                         // integer, default `0.15`
     *     'fade'             => false,                                                        // boolean, default `false`
     *     'focusOnSelect'    => false,                                                        // boolean, default `false`
     *     'focusOnChange'    => false,                                                        // boolean, default `false`
     *     'infinite'         => true,                                                         // boolean, default `true`
     *     'initialSlide'     => 0,                                                            // integer, default `0`
     *     'lazyLoad'         => 'ondemand',                                                   // string, default `'ondemand'`
     *     'mobileFirst'      => false,                                                        // boolean, default `false`
     *     'nextArrow'        => <button type="button" class="slick-next">next</button>,       // string (html | jQuery selector) | object (DOM node | jQuery object), default `<button type="button" class="slick-next">next</button>`
     *     'pauseOnDotsHover' => false,                                                        // boolean, default `false`
     *     'pauseOnFocus'     => true,                                                         // boolean, default `true`
     *     'pauseOnHover'     => true,                                                         // boolean, default `true`
     *     'prevArrow'        => <button type="button" class="slick-prev">previous</button>,   // string (html | jQuery selector) | object (DOM node | jQuery object), default `<button type="button" class="slick-prev">previous</button>`
     *     'respondTo'        => 'window',                                                     // string, default `'window'`
     *     'responsive'       => null,                                                         // array, default `null`
     *     'rows'             => 1,                                                            // int, default `1`
     *     'rtl'              => false,                                                        // boolean, default `false`
     *     'slide'            => '',                                                           // string, default `''`
     *     'slidesPerRow'     => 1,                                                            // int, default `1`
     *     'slidesToScroll'   => 1,                                                            // int, default `1`
     *     'slidesToShow'     => 1,                                                            // int, default `1`
     *     'speed'            => 300,                                                          // int, default `300`
     *     'swipe'            => true,                                                         // boolean, default `true`
     *     'swipeToSlide'     => false,                                                        // boolean, default `false`
     *     'touchMove'        => true,                                                         // boolean, default `true`
     *     'touchThreshold'   => 5,                                                            // int, default `5`
     *     'useCSS'           => true,                                                         // boolean, default `true`
     *     'useTransform'     => true,                                                         // boolean, default `true`
     *     'variableWidth'    => false,                                                        // boolean, default `false`
     *     'vertical'         => false,                                                        // boolean, default `false`
     *     'verticalSwiping'  => false,                                                        // boolean, default `false`
     *     'waitForAnimate'   => true,                                                         // boolean, default `true`
     *     'zIndex'           => 1000,                                                         // number, default `1000`'
     * ],
     * ```
     */
    public $pluginOptions = [];

    /**
     * @var array default `[]`, JQuery events
     * @see https://github.com/kenwheeler/slick/#events
     * 
     * ```php
     * 'pluginEvents' => [
     *     'afterChange' => 'function(event, slick, currentSlide) {
     *         console.log("After slide change callback");
     *     }',
     *     'beforeChange' => 'function(event, slick, currentSlide, nextSlide) {
     *         console.log("Before slide change callback");
     *     }',
     *     'breakpoint' => 'function(event, slick, breakpoint) {
     *         console.log("Fires after a breakpoint is hit");
     *     }',
     *     'destroy' => 'function(event, slick) {
     *         console.log("When slider is destroyed, or unslicked.");
     *     }',
     *     'edge' => 'function(event, slick, direction) {
     *         console.log("Fires when an edge is overscrolled in non-infinite mode.");
     *     }',
     *     'init' => 'function(event, slick) {
     *         console.log("When Slick initializes for the first time callback. Note that this event should be defined before initializing the slider.");
     *     }',
     *     'reInit' => 'function(event, slick) {
     *         console.log("Every time Slick (re-)initializes callback");
     *     }',
     *     'setPosition' => 'function(event, slick) {
     *         console.log("Every time Slick recalculates position");
     *     }',
     *     'swipe' => 'function(event, slick, direction) {
     *         console.log("Fires after swipe/drag");
     *     }',
     *     'lazyLoaded' => 'function(event, slick, image, imageSource) {
     *         console.log("Fires after image loads lazily");
     *     }',
     *     'lazyLoadError' => 'function(event, slick, image, imageSource) {
     *         console.log("Fires after image fails to load");
     *     }',
     * ],
     * ```
     */
    public $pluginEvents = [];

    /**
     * @inheritdoc
     * @throws InvalidConfigException
     */
    public function init()
    {
        if (empty($this->items)) {
            throw new InvalidConfigException("Not allowed without or empty 'items'");
        }

        if ($this->skipCoreAssets === false) {
            $this->view->registerAssetBundle(SlickCarouselAsset::class);
        }

        $this->containerTag = $this->containerTag ?: 'div';
        $this->itemTag      = $this->itemTag ?: 'div';

        if (!isset($this->containerOptions['id'])) {
            $this->containerOptions['id'] = $this->getId();
        }

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $pluginOptions = Json::encode($this->pluginOptions);

        $this->view->registerJs("$('#{$this->containerOptions['id']}').slick({$pluginOptions});");

        if (!empty($this->pluginEvents)) {
            foreach ($this->pluginEvents as $event => $handler) {
                $function = $handler instanceof JsExpression ? $handler : new JsExpression($handler);
                $this->view->registerJs("$('#{$this->containerOptions['id']}').on('{$event}', {$function});");
            }
        }

        $slider = Html::beginTag($this->containerTag, $this->containerOptions);
        foreach ($this->items as $item) {
            $slider .= Html::tag($this->itemTag, $item, $this->itemOptions);
        }
        $slider .= Html::endTag($this->containerTag);

        return $slider;
    }
}
