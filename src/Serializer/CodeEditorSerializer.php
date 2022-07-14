<?php

namespace Omerfdmrl\CodeEditor\Serializer;

use Omerfdmrl\CodeEditor\CodeEditor;
use Flarum\Api\Serializer\AbstractSerializer;

class CodeEditorSerializer extends AbstractSerializer
{
    protected $type = 'code-editor-serializer';

    /**
     * @param CodeEditor $model
     * @return array
     */
    public function getDefaultAttributes($model){
        return [
            'user_id'   =>  $model->user_id,
            'title' =>  $model->title,
            'slug'  =>  $model->slug,
            'body'  =>  $model->body,
            'type'  =>  $model->type
        ];
    }
}