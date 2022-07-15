<?php

/*
 * This file is part of omerfdmrl/flarum-code-editor.
 *
 * Copyright (c) 2022 Omer Faruk Demirel.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Omerfdmrl\CodeEditor;

use Flarum\Extend;
use Flarum\User\User;
use Omerfdmrl\CodeEditor\Controller\CodeEditorController;
use Omerfdmrl\CodeEditor\Providers\CodeEditorServiceProvider;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/resources/less/admin.less'),
    new Extend\Locales(__DIR__ . '/resources/locale'),
    (new Extend\Model(User::class))
    ->belongsTo('code_editors',CodeEditor::class),
    (new Extend\ServiceProvider())
        ->register(CodeEditorServiceProvider::class),
    (new Extend\Routes('forum'))
        ->get('/hello-world', 'omerfdmrl.helloworld',CodeEditorController::class)
];
