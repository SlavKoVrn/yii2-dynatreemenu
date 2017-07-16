# TreeView Menu widget for Yii2 Framework

The extension uses jQuery.ui DynaTree and makes treeview menu from php array of structure defined.

[Read more](http://rbac.kadastrcard.ru).

![DynaTree Menu](http://rbac.kadastrcard.ru/uploads/dynatreemenu.jpg)

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
                0 => [
                        'name' => 'SubMenu0 name',
                        'description' => 'Tool tip description for SubMenu0',
                        'href' => '/link_when_DblClicked.html',
                        'children' => [
                            0 => [
                                    'name' => 'SubSubMenu0 name',
                                    'description' => 'Tool tip description for SubSubMenu0',
                                    'href' => '/link_when_DblClicked.html',
                                    'children' => [
                                         1 => [
                                                'name' => 'SubSubSubMenu1 name',
                                                'description' => 'Tool tip description for SubSubSubMenu1',
                                                'href' => '/link_when_DblClicked.html',
                                            ],
                                        2 => [
                                                'name' => 'SubSubSubMenu2 name',
                                                'description' => 'Tool tip description for SubSubSubMenu2',
                                                'href' => '/link_when_DblClicked.html',
                                            ],
                                   ]
                                ],
                            1 => [
                                    'name' => 'SubSubMenu1 name',
                                    'description' => 'Tool tip description for SubSubMenu1',
                                    'href' => '/link_when_DblClicked.html',
                                ],
                            2 => [
                                    'name' => 'SubSubMenu2 name',
                                    'description' => 'Tool tip description for SubSubMenu2',
                                    'href' => '/link_when_DblClicked.html',
                                ],
                        ]
                    ],
                1 => [
                        'name' => 'SubMenu1 name',
                        'description' => 'Tool tip description for SubMenu1',
                        'href' => '/link_when_DblClicked.html',
                    ],
                2 => [
                        'name' => 'SubMenu2 name',
                        'description' => 'Tool tip description for SubMenu2',
                        'href' => '/link_when_DblClicked.html',
                    ],
           ]
        ],
    1 => [
            'name' => 'Menu1 name',
            'description' => 'Tool tip description for Menu1',
            'href' => '/link_when_DblClicked.html',
        ],
    2 => [
            'name' => 'Menu2 name',
            'description' => 'Tool tip description for Menu2',
            'href' => '/link_when_DblClicked.html',
        ],
];
?>

<?= DynaTreeMenuWidget::widget(['id'=>'dynatree','tree'=>$tree]) ?>
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
