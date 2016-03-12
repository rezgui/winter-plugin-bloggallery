<?php

    namespace Martin\BlogGallery\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class CreateBlogGalleryField extends Migration {

        public function up() {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->integer('rjgallery_id')->unsigned()->nullable();
                $table->foreign('rjgallery_id')->references('id')->on('raviraj_rjgallery_galleries');
            });
        }

        public function down() {
            Schema::table('users', function ($table) {
                $table->dropForeign('rjgallery_id');
            });
        }

    }

?>