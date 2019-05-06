<?php
namespace app\widgets\assets;

use yii\web\AssetBundle;

/**
 * Class SubscribeAsset
 */
class SubscribeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';

    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
        'css/site.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/subscibe.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
