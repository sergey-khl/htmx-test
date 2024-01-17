<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AlpineAsset extends AssetBundle
{
    public $sourcePath = '@dist';
    public $css = [
    ];
    public $js = [
        'bundle.js',
    ];
    public $depends = [
    ];
}
