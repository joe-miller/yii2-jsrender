<?php

namespace joe-miller\jsrender;

use yii\web\AssetBundle;

class JsRenderAsset extends AssetBundle
{
	public $sourcePath = '@bower/jsrender';
	public $css = [];
	public $js = ['jsrender.min.js'];
	public $depends = [
            'yii\web\YiiAsset'
        ];
}
