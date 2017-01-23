Notice: Unfortunately, all previous 20 commits got lost when I updated my project via git to github.

# [Semantic UI - OctoberCMS](http://octobercms.com/theme/christophheich-semantic-ui-octobercms)

[Semantic](http://semantic-ui.com/) allows developers to build beautiful websites fast, with concise HTML, intuitive javascript, and simplified debugging helping make front-end development a delightful experience. Semantic is responsively designed allowing your website to scale on multiple devices. 

* License: [MIT](https://github.com/christophheich/semantic-ui-octobercms/blob/master/LICENSE)
* Semantic-License: [MIT](https://github.com/Semantic-Org/Semantic-UI/blob/master/LICENSE.md)
* JQuery-Version: 3.1.0 (Bower)
* Semantic-Version: 2.2.3 (NPM)





---





## Usage
Use the `assets/css/main.css` file to override CSS elements; use the `assets/js/app.js` file to add JavaScript content.

## Updating manually
- 'cd' into the folder \assets\vendor\
- run in the command shell 'bower update'

- 'cd' into the folder \source\
- run in the command shell 'npm update'

- 'cd' into the folder \source\semantic\
- run in the command shell 'gulp build' 
 
---




 
## Adding CSS and JavaScript

If you would like to change the structure of the theme - or adding JavaScript or CSS files, edit the content of layouts/default.htm.

To add or remove JavaScript files of the theme, you will need to add the JavaScript file to the `/js/` folder of the theme, you will also need to add the name of the JavaScript file between the `<script src="{{ [ ]|theme }}"></script>` ([OctoberCMS Docs](http://octobercms.com/docs/cms/themes))

e.g.
```
If you add more than one JavaScript file do not forget to remove the seperator (,) of the last file. Only the last file can't have a seperator - the other files need one!


		<!-- SCRIPTS -->
        <script src="{{ [
            'assets/vendor/bower_components/jquery/dist/jquery.js',
            'assets/vendor/semantic/semantic.js',
            'assets/js/core.js',
            'assets/js/app.js',
			'assets/js/AddYourJavaScriptFile.js'
        ]|theme }}"></script>
```




---




    
To add or remove CSS files of the theme, you will need to add the CSS file to the `/css/` folder of the theme, you will also need to add the name of the CSS file between the `<link href="{{ [ ]|theme }}" rel="stylesheet">` ([OctoberCMS Docs](http://octobercms.com/docs/cms/themes))

e.g.
    
```
If you add more than one CSS file do not forget to remove the seperator (,) of the last file. Only the last file can't have a seperator - the other files need one!


        <!-- CSS -->
        <link href="{{ [
            'assets/vendor/semantic/semantic.css',
            'assets/css/core.css',
            'assets/css/main.css'
			'assets/css/AddYourCSSFile.css
        ]|theme }}" rel="stylesheet">
        {% styles %}
```



---





## Metadata

The metadata of your theme can be changed inside the layouts/default.htm - add your information between the quotation marks of `content=""`
```
    <head>
        <meta charset="utf-8"/>
        <title>{{ this.page.meta_title }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="{{ this.page.title }}">
        <meta name="description" content="{{ this.page.description }}">
		<meta name="author" content=""> 						<!-- e.g. Christoph Heich -->
        <meta name="keywords" content=""> 						<!-- e.g. Your Website, Website, Product -->
        <meta name="language" content=""> 						<!-- e.g. German -->
        <meta name="type" content=""> 							<!-- e.g. Website -->
        <meta name="copyright" content=""> 						<!-- e.g. Copyright (c) 2016 - Christoph Heich -->
        <meta name="resource-type" content="">	
        <meta name="distribution" content="">					<!-- e.g. Global -->
        <meta name="email" content="">							<!-- e.g. contact@yourwebsite.com -->
        <meta name="rating" content="General">
        <meta name="robots" content="INDEX,FOLLOW">
        <meta name="revisit-after" content="7 Days">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="content-language" content="en">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="icon" type="image/x-icon" href="{{ 'assets/images/favicon.ico'|theme }}"/>
    </head>
```
