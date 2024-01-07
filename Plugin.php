<?php

    namespace Rezgui\BlogGallery;
    use System\Classes\PluginBase;
    use Backend;
    use Winter\Blog\Controllers\Posts as PostsController;
    use Winter\Blog\Models\Post as PostModel;

class Plugin extends PluginBase {

    class Plugin extends PluginBase {

        public $require = ['Winter.Blog', 'Raviraj.Rjgallery'];

        public function pluginDetails() {
            return [
                'name'        => 'rezgui.bloggallery::lang.plugin.name',
                'description' => 'rezgui.bloggallery::lang.plugin.description',
                'author'      => 'Yacine REZGUI',
                'icon'        => 'icon-image'
            ];
        }

        public function boot(){

            PostModel::extend(function ($model) {
                $model->belongsTo['rjgallery'] = ['Raviraj\Rjgallery\Models\Gallery'];
            });

            PostsController::extendFormFields(function ($form, $model) {
                if (!$model instanceof PostModel) return;
                $form->addSecondaryTabFields([
                    'rjgallery' => [
                        'label'       => 'rezgui.bloggallery::lang.form.label',
                        'tab'         => 'winter.blog::lang.post.tab_manage',
                        'type'        => 'relation',
                        'emptyOption' => 'rezgui.bloggallery::lang.form.empty'
                    ]
                ]);
            });

        }

    }

?>
