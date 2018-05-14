To use put `load_layouts($content_field)` in your loop

eg
```
while ( have_posts() ) : the_post(); 
	
	load_layouts('flexible_content_field_name');

endwhile;
```