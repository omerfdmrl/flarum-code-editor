import Model from 'flarum/Model'

export default class CodeEditor extends Model
{
    user_id = Model.attribute('user_id')
    title = Model.attribute('title')
    slug = Model.attribute('slug')
    body = Model.attribute('body')
    type = Model.attribute('type')
}