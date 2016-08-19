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
<?php 
$steps[0] = [
    'title'=>'Step 1',
    'content'=>'Content and stuff',
    'element'=>'#some-element'
];

// $steps[1] = ... etc

\macrowish\widgets\BootstrapTour::widget([
    'steps'=>$steps,
    'options'=>[
        'backdrop'=>'true'
        ]
     ]); ?>
```
