Yii2 Bootstrap Tour
===================
Bootstrap Tour widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist macrowish/yii2-bootstrap-tour "dev-master"
```

or add

```
"macrowish/yii2-bootstrap-tour": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php \macrowish\widgets\BootstrapTour::widget(['steps'=>[
    'title'=>'Step 1',
    'content'=>'Content and stuff',
    'element'=>'#some-element'
    ],
    'options'=>[
        'backdrop'=>'true'
        ]
     ]); ?>
```
