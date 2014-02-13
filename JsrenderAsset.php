<?php

namespace sheillendra\jsrender;

use yii\web\AssetBundle;

class JsRenderAsset extends AssetBundle
{
	public $sourcePath = '@sheillendra/jsrender';
	public $css = [];
	public $js = ['jsrender.min.js'];
	public $depends = [];
}
