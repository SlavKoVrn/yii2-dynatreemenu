# TreeView Menu widget for Yii2 Framework

The extension uses jQuery.ui DynaTree and makes treeview menu from php array of structure defined.

[TreeView Menu generator](http://yii2.kadastrcard.ru).

![DynaTree Menu](http://yii2.kadastrcard.ru/uploads/dynatreemenu.jpg)

## Installation

Install with composer:

```bash
composer require slavkovrn/yii2-dynatreemenu
```

or add

```bash
"slavkovrn/yii2-dynatreemenu": "*"
```

to the require section of your `composer.json` file.

Set link to extension in your view:

```php
<?php

use slavkovrn\dynatreemenu\DynaTreeMenuWidget;

$tree=[
    0 => [
            'name' => 'Menu0 name',
            'description' => 'Tool tip description for Menu0',
            'href' => '/link_when_DblClicked.html',
            'children' => [
                1 => [
                        'name' => 'SubMenu1 name',
                        'description' => 'Tool tip description for SubMenu1',
                        'href' => '/link_when_DblClicked.html',
                        'children' => [
                            2 => [
                                    'name' => 'SubSubMenu2 name',
                                    'description' => 'Tool tip description for SubSubMenu2',
                                    'href' => '/link_when_DblClicked.html',
                                    'children' => [
                                         3 => [
                                                'name' => 'SubSubSubMenu3 name',
                                                'description' => 'Tool tip description for SubSubSubMenu3',
                                                'href' => '/link_when_DblClicked.html',
                                            ],
                                        4 => [
                                                'name' => 'SubSubSubMenu4 name',
                                                'description' => 'Tool tip description for SubSubSubMenu4',
                                                'href' => '/link_when_DblClicked.html',
                                            ],
                                   ]
                                ],
                            5 => [
                                    'name' => 'SubSubMenu5 name',
                                    'description' => 'Tool tip description for SubSubMenu5',
                                    'href' => '/link_when_DblClicked.html',
                                ],
                            6 => [
                                    'name' => 'SubSubMenu6 name',
                                    'description' => 'Tool tip description for SubSubMenu6',
                                    'href' => '/link_when_DblClicked.html',
                                ],
                        ]
                    ],
                7 => [
                        'name' => 'SubMenu7 name',
                        'description' => 'Tool tip description for SubMenu7',
                        'href' => '/link_when_DblClicked.html',
                    ],
                8 => [
                        'name' => 'SubMenu8 name',
                        'description' => 'Tool tip description for SubMenu8',
                        'href' => '/link_when_DblClicked.html',
                    ],
           ]
        ],
    9 => [
            'name' => 'Menu9 name',
            'description' => 'Tool tip description for Menu9',
            'href' => '/link_when_DblClicked.html',
        ],
    10 => [
            'name' => 'Menu10 name',
            'description' => 'Tool tip description for Menu10',
            'href' => '/link_when_DblClicked.html',
        ],
];
?>

<?= DynaTreeMenuWidget::widget(['id'=>'dynatree','tree'=>$tree]) ?>
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
