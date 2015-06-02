## Installation ##

After downloading this plugin, extract the directory "wp-ajax-newsletter".

Go to the Wordpress back-office and activate the plugin. This will create the needed tables in the database.

### Newsletter Subcription Form ###
To add the subscription form in your template, insert the following code where you want the form to appear:

```
<?php if (class_exists('ajaxNewsletter')): ?>
<!-- place your HTML code here -->
<?php ajaxNewsletter::newsletterForm(); ?>
<!-- place your HTML code here -->
<?php endif; ?>
```

**Note:**
The `<!-- place your HTML code here -->` instruction is optional. You can use it to add a title or a container. An example for the default Wordpress template is:
```
<?php if (class_exists('ajaxNewsletter')): ?>
<li><h2>Newsletter</h2>
   <div style="padding:5px 3px;">
      <?php ajaxNewsletter::newsletterForm(); ?>
   </div>
</li>
<?php endif; ?>
```


### Styling the Form ###
You can use the following CSS classes to style the form in the front-office:
```
#ajaxNewsletter, .newsletterContainer {
	/* newsletter container */
}

#newsletterFormDiv {
	/* newsletter form elements*/
}

.newsletterTextInput {
	/* email text input */
}

#newsletterLoading {
	/* the loading message while the subscription is being handled */
}

.success {
	/* the success message container */
}

.error {
	/* the error message container */
}
```

**For example**, to get a similar result as shown in the demonstration video, add the following code to your template CSS file:
```
.newsletterTextInput{ width:120px; }

.newsletterContainer{ width:100%; }

.success {
	background: #CFEBF7;
	border: 1px solid #2580B2;
}

.error {
	background: #FFEFF7;
	border: 1px solid #c69;
}

.error, .success {
	margin: 3px 0px;
	padding: 2px;
}
```
## Configuration ##

To configure this plugin access "Newsletter" under the "Options" tab.

The following tags can be used in the template for the newsletter:
| {TITLE} | The post title |
|:--------|:---------------|
| {URL}   | The post URL   |
| {DATE}  | The date when the post was published (uses Wordpress defined format) |
| {TIME}  | The time when the post was published (uses Wordpress defined format) |
| {AUTHOR} | The post author |
| {EXCERPT} | The post excerpt. If none is available, it will be generated based on the content. |
| {CONTENT} | The post content. |







