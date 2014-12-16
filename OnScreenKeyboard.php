<?php

namespace makroxyz\onscrkbd;

use yii\helpers\Html;

class OnScreenKeyboard extends \yii\base\Widget
{
    public $firstInputSelector = ':input';
    
	public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        } else {
            $this->id = $this->options['id'];
        }
        
        echo Html::beginTag('div', $this->options);
        $this->registerScript();
    }
    
    public function run()
    {
        echo Html::endTag('div');
    }
    
    protected function registerScript()
    {
        $view = $this->getView();
        OnScreenKeyboardAsset::register($view);
        
        $view->registerJs("
        $(function () {
            jsKeyboard.init('{$this->id}');
            //first input focus
            var \$firstInput = $('{$this->firstInputSelector}').first().focus();
            jsKeyboard.currentElement = \$firstInput;
            jsKeyboard.currentElementCursorPosition = 0;
        });");
    }
}
