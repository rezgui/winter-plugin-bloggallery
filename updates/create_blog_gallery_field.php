<?php

    namespace Rezgui\BlogGallery\Updates;

    use Schema;
    use Winter\Storm\Database\Updates\Migration;

    class CreateBlogGalleryField extends Migration {

        public function up() {
            Schema::table('winter_blog_posts', function ($table) {
                $table->integer('lightgallery_id')->unsigned()->nullable();
                $table->foreign('lightgallery_id')->references('id')->on('hounddd_lightgallery_galleries')->onDelete('set null');
            });
        }

        public function down() {
            if(Schema::hasColumn('winter_blog_posts', 'lightgallery_id')) {
                Schema::table('winter_blog_posts', function ($table) {
                    $table->dropForeign('winter_blog_posts_lightgallery_id_foreign');
                    $table->dropColumn('lightgallery_id');
                });
            }
        }

    }

?>
