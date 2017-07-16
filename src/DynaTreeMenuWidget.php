<?php

namespace slavkovrn\dynatreemenu;

use yii\base\Widget;
use yii\web\JqueryAsset;
use yii\jui\JuiAsset;

class DynaTreeMenuWidget extends Widget {
    
    public $id = 'dynatree';
    public $tree = [];
    private $out='';

    public function init() {

        parent::init();

    }

    public function run() {

        parent::run();

        $this->registryScript();

        return $this->render('tree',[
            'id' =>$this->id,
        ]);
    }

    protected function registryScript()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');
        $this->getView()->registerJsFile(
            $path[1] . '/jquery.dynatree.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset','\yii\jui\JuiAsset'],
            ]
        );
        $this->getView()->registerJsFile(
            $path[1] . '/jquery.cookie.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset','\yii\jui\JuiAsset'],
            ]
        );

        $this->getView()->registerCssFile($path[1] . '/skin/ui.dynatree.css');

        $script = '$(function() {
            $("#' . $this->id . '").dynatree({';
        $script .= $this->buildTreeJsFunctions();
        $script .= '  });
        });
        ';

        $this->getView()->registerJs($script,\yii\web\View::POS_END);

    }

    function getSubTree($massiv)
    {
        $this->out.='children: ['.PHP_EOL;
        foreach($massiv as $key=>$val)
        {
            if(isset($val['children']))
            {
                $this->out.='{title:"'.$val['name'].'", tooltip:"'.$val['description'].'", isFolder: true, href:"'.$val['href'].'",'.PHP_EOL;
                $this->getSubTree($val['children']);
                $this->out.='},'.PHP_EOL;
            }
            else
                $this->out.='{title:"'.$val['name'].'", tooltip:"'.$val['description'].'", href:"'.$val['href'].'"},'.PHP_EOL;
        }
        $this->out.='],'.PHP_EOL;
    }
    protected function makeTree()
    {
        $this->getSubTree($this->tree);

        return $this->out;
    }
    protected function buildTreeJsFunctions()
    {
        $script = <<<JS
            clickFolderMode: 1,
            onDblClick: function(node) {
                document.location.href=node.data.href;
            },
            onPostInit: function(isReloading, isError) {
                this.visit(function(dtnode){dtnode.expand(true);});
            },
JS;

        return $script.$this->makeTree();
    }
}