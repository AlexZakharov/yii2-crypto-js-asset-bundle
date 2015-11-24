<?php
namespace kfosoft\yii2\asset;

use yii\web\AssetBundle;

/**
 * Crypto js asset bundle.
 * @see http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js
 * @package app\services
 * @version 1.0
 * @copyright (c) 2014-2015 KFOSoftware Team <kfosoftware@gmail.com>
 */
class CryptoJSBundle extends AssetBundle
{
    /** @var string path to source folder */
    public $sourcePath = '@vendor/kfosoft/yii2-crypto-js-asset-bundle/asset/assets';

    /** @var array js files. */
    public $js = [
        'js/crypto-js.js',
    ];
} 