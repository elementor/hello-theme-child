# HELLO ELEMENTOR CHILD

Contributors: [Elron Naranja](https://elronnaranja.com), Jermaine Lorenzo

This theme is produced for [Creative Bananas'](https://creativebananas.com) Projects.

# THEMETATION

## Additional jQuery Plugins

- ### [Linkify](https://www.jqueryscript.net/text/jQuery-Plugin-To-Transform-URLs-In-Text-Into-Links-linkify.html)
**Add this code below jQuery Enqueue**
> wp_enqueue_script('cb-linkify-js', get_stylesheet_directory_uri() .'/js/linkify.min.js', array(), $ver, true);
> wp_enqueue_script('cb-linkify-jquery', get_stylesheet_directory_uri() .'/js/jquery.linkify.min.js', array(), $ver, true);

**Add this code in script.js** 
> $("selector").linkify();

## Sliders

- ### [Slick](https://kenwheeler.github.io/slick/)