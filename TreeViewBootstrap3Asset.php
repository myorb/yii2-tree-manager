<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2018
 * @package   yii2-tree-manager
 * @version   1.0.9
 */

namespace kartik\tree;

use backend\assets\BootstrapAsset;
use kartik\base\AssetBundle;

/**
 * Asset bundle for TreeView widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class TreeViewBootstrap3Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        BootstrapAsset::class,
        'yii\widgets\ActiveFormAsset',
        'yii\validators\ValidationAsset',
    ];

    public $js = [
        'js/kv-tree.js',
    ];

    public $css = [
        'css/kv-tree.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
