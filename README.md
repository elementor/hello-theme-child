# HELLO ELEMENTOR CHILD

Contributors: [Elron Naranja](https://elronnaranja.com), Jermaine Lorenzo

This theme is produced for [Creative Bananas'](https://creativebananas.com) Projects.

# Plugins

### [Linkify](https://www.jqueryscript.net/text/jQuery-Plugin-To-Transform-URLs-In-Text-Into-Links-linkify.html)
**Add this code below jQuery Enqueue**
```
wp_enqueue_script('cb-linkify-js', get_stylesheet_directory_uri() .'/js/linkify.min.js', array(), $ver, true);
wp_enqueue_script('cb-linkify-jquery', get_stylesheet_directory_uri() .'/js/jquery.linkify.min.js', array(), $ver, true);
```

**Add this code in script.js**
``` 
$("selector").linkify();
```

### [Slick](https://kenwheeler.github.io/slick/)

# jQuery Hacks 

### [READ MORE/READ LESS]

**HTML Structure**
```
<div>
	This is the active/visible content. 
	<div class="read-more"> 
		<span>This is the hidden content that'll show when the Read More is triggered.</span>
		<a class="read-more-button" href="#!">READ MORE</a>
	</div>
</div>
```

**Script**
```
$(".read-more").each(function(){
	// This hides the span
	$(this).find("span").hide();
	$(this).find(".read-more-button").click(function(){
		// Handles the toggle HIDE/SHOW
		$(this).prev("span").slideToggle();
		
		// Changes READ MORE to READ LESS
		if ($(this).text() == "READ MORE") {
			$(this).text("READ LESS")
		} else {
			$(this).text("READ MORE")
		}
	});
});
```

**Style**
```
.read-more {
	display: inline;
}
```