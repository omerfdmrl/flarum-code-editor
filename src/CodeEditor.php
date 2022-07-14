<?php
namespace Omerfdmrl\CodeEditor;

use Flarum\Database\AbstractModel;
/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property json $body
 * @property enum $type
 */
class CodeEditor extends AbstractModel
{
    protected $table = 'omerfdmrl_code_editors';
    
}