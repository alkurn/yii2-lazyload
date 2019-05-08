# Yii2 Lazy load Widget for html blocks


## Installation (using composer)

```bash
composer require alkurn/yii2-lazyload
```


##### Example

```php
<?php \alkurn\lazyload\LazyBlock::begin([
    'effect' => \alkurn\lazyload\LazyBlock::EFFECT_ZOOM_IN,
    'speed' => 600, //default = 600 (time in miliseconds)
    'delay' => 10 //default = 0 (time in miliseconds)
]); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p><?=\yii\helpers\Html::encode($page->content)?></p>
        </div>
        <div class="col-md-4">
            <p><?=\yii\helpers\Html::encode($page->content)?></p>
        </div>
        <div class="col-md-4">
            <p><?=\yii\helpers\Html::encode($page->content)?></p>
        </div>
    </div>
</div>

<?php \alkurn\lazyload\LazyBlock::end(); ?>
```

##### Effects

- EFFECT_SLIDE_UP
- EFFECT_SLIDE_DOWN
- EFFECT_SLIDE_FROM_LEFT
- EFFECT_SLIDE_FROM_RIGHT
- EFFECT_ZOOM_IN
- EFFECT_ZOOM_OUT
- EFFECT_ROTATE
- EFFECT_SKEW
