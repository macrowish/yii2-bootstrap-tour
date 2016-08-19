<?php

namespace macrowish\widgets;

/**
 * This is just an example.
 */
class BootstrapTour extends \yii\base\Widget
{
    public $options = [];
    public $steps = [];

    public function run()
    {

        $view = $this->getView();
        $view->registerCssFile('//cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.min.css');
        $view->registerJsFile('//cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js', ['depends' => [\yii\bootstrap\BootstrapPluginAsset::className()]]);

        $encodedSteps = json_encode($this->steps);
        $encodedOptions = '';
        if(!empty($this->options)) {
            foreach($this->options as $key => $value){
                $encodedOptions .= $key . ' : ' . $value . ',';
            }
        }

        $view->registerJs(<<<JS
// Instance the tour
var tour = new Tour({
  $encodedOptions
  steps: [
  $encodedSteps
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();
JS
        );
    }
}
