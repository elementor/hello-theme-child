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
**Add this code below jQuery Enqueue**
```
wp_enqueue_script('cb-slick-js', get_stylesheet_directory_uri() .'/js/slick.min.js', array(), $ver, true);
```
**Copy the code in slick.css to style.css**

# jQuery Hacks 

### [MEGA MENU]
**How to set up**
1. Create a WP Menu.
2. Add a <code>class</code> "mega-menu prevented" to specific menu item as trigger. 
3. Create an elementor section as your mega menu with <code>class</code> and <code>ID</code>.
	- <code>class</code> = mega-menu
	- <code>ID</code> = Use the label used in the WP menu trigger. E.g "Services".
	- Note: This is CASE SENSITIVE. If you capitalize the S in Services, make sure to Capitalize it in <code>ID</code> field of the elementor section too.

Notes: It might appear to be buggy when you don't have anything on page except the header & menu. It doesn't hide the menu but only "z-index: -1" which make it still hoverable if there are no other sections on the page to cover it.

**Script**
```
// Mega Menu
// SET timeout variable to CLEAR it.
$("li.mega-menu").each(function(){
	// Variable the menu label as selector
	var menuClass = $(this).text();
	$(this).hover(function() {
		// Add active to menu trigger to preserved hovered state
		$(this).find("a").addClass("active");
		$("#"+menuClass).addClass("active");
	}, function() {
		$(this).find("a").removeClass("active");
		$("#"+menuClass).removeClass("active");
	});
	// Preserve the hover on mega menu container
	$("#"+menuClass).hover(function() {
		$(this).addClass("active");
		$("li.mega-menu a:contains("+menuClass+")").addClass("active");
	}, function() {
		$(this).removeClass("active");
		$("li.mega-menu a:contains("+menuClass+")").removeClass("active");
	});
	//// Prevent going to URL on first click on Touch Devices
		$(this).on("touch", function(e) {
			if($(this).hasClass("prevented")) {
				event.preventDefault();
				$(this).removeClass("prevented");
			} else {
				$(this).addClass("prevented");
				$(this).unbind("click");
			}
		});
});
```
**Style**
```
section.mega-menu {
	position: absolute;
	top: 0;
	width: 100%;
	display: block;
	opacity: 0;
	transition: .3s !important;
	z-index: -1;
}
section.mega-menu.active {
	opacity: 1;
	z-index: 10;
}
```

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

### [SPLIT/WRAP TEXT]
```
// Initial HTML <div>This is a text & span</div>
// Result <div>This is a text & <span>span</span></div>
$('div').html(function(i, v){
	// Ampersand(&) is the trigger. The wrap will show after the ampersand(&)
	var html = v.split('&');
	return html[0] + ': ' + '<span>' + html[1] + '</span>';
});
```

# Elementor Manipulations

### [ACCORDION ON HOVER]

**Instructions**
1. Create an accordion in Elementor.
2. Add "active-hover" <code>class</code>  in the accordion.

**Script**
```
// Elementor Accordion
$(".active-hover .elementor-accordion-item").on("mouseenter click", function() {
	$(this).find(".elementor-tab-title").addClass("elementor-active");
	$(this).find(".elementor-tab-content").addClass("elementor-active");
	$(this).find(".elementor-tab-content").stop().slideDown("slow");
	// Slide off on others
	$(this).siblings().find(".elementor-tab-title").removeClass("elementor-active");
	$(this).siblings().find(".elementor-tab-content").removeClass("elementor-active");
	$(this).siblings().find(".elementor-tab-content").stop().slideUp("slow");
});
```

This code will reset the first child as active state.
```
// Reset to first child active
$(".active-hover .elementor-accordion").on("mouseleave", function() {
	$(this).find(".elementor-accordion-item:first-child .elementor-tab-title").addClass("elementor-active");
	$(this).find(".elementor-accordion-item:first-child .elementor-tab-content").addClass("elementor-active");
	$(this).find(".elementor-accordion-item:first-child .elementor-tab-content").stop().slideDown("slow");
	// Slide off on others
	$(this).find(".elementor-accordion-item:first-child").siblings().find(".elementor-tab-title").removeClass("elementor-active");
	$(this).find(".elementor-accordion-item:first-child").siblings().find(".elementor-tab-content").removeClass("elementor-active");
	$(this).find(".elementor-accordion-item:first-child").siblings().find(".elementor-tab-content").stop().slideUp("slow");
});
```

# Functions