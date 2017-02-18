<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = ['bower_components/jquery/dist/jquery.min.js',
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/metisMenu/dist/metisMenu.min.js',
        'bower_components/raphael/raphael-min.js',
        'bower_components/morrisjs/morris.min.js',
        'dist/js/sb-admin-2.js',
        'js/ajax_query.js'

    ];

    public $css=['bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/metisMenu/dist/metisMenu.min.css',
        'dist/css/timeline.css',
        'dist/css/sb-admin-2.css',
        'bower_components/morrisjs/morris.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'css/admin.css'

    ];

}
