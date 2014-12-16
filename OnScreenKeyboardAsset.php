<?php

namespace makroxyz\onscrkbd;

use yii\web\AssetBundle;

/**
 * Asset bundle
 * 
 * @author Marco Curatitoli <makroxyz@gmail.com>
 */
class OnScreenKeyboardAsset extends AssetBundle
{
	/**
     * @inheritdoc
     */
    public $sourcePath = '@makroxyz/onscrkbd/assets';
	public $css = [
        'css/jsKeyboard.css',
    ];
	public $js = [
        'js/jsKeyboard.js',
    ];
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset'
	];
}
