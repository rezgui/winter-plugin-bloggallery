# Blog + Hounddd lightGallery for WinterCMS

## Introduction
Inspired from skydiver/october-plugin-bloggallery, This plugin associates a "RJ Gallery" to a Blog plugin post.

You will be able to work with the gallery from the **blogPost** component.



## Requirements
- [Blog](https://github.com/wintercms/wn-blog-plugin) (Winter.Blog)
- [Hounddd lightGallery](https://github.com/Hounddd/wn-lightgallery-plugin) (Hounddd.lightGallery)



## Installation
* Install dependencies:
  * `php artisan plugin:install Winter.Blog`
  * `php artisan plugin:install Hounddd.lightGallery`
* Install the plugin:
  * `php artisan plugin:install Rezgui.BlogGallery`



## Use
1. Create your gallery on Hounddd lightGallery plugin
2. Create or edit a blog post
3. Goto "Manage" tab
4. Select a gallery



## Display gallery on post page
You can insert the **Hounddd lightGallery** component inside your **blogPost** component html like this:
```
{% component 'gallery' gallery=post.lightgallery %}
```



## Access gallery object

* Get gallery info:
```
{{ post.lightGallery }}
```

* Get gallery images
```
{{ post.lightGallery.images }}
```
