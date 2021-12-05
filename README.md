
## == Squiggle == 

Squiggle is a "hello world" module, that gives just the bare bones structure for a Joomla 3 component. 


## To install: 
1. zip up the "component" folder (e.g. into a file called com_0.3.zip)
2. On a Joomla server, log in as Administrator and go to "Extensions" (top menus) and then "manage" 
3. Drag and drop the zip file into the box that says "upload & install" 

## To use: 

You will now have a menu option called "Squiggle" and a view called "elephant" in your admin backend. 
You will be able to add a view called "gorilla" to your front-end. 

To make it your own, do a case sensitive find + replace for Squiggle and squiggle, then replace with your own module name... 
I suggest reading over the files and doing manual find+replace. 

The actual code that appears on the admin view is in component > admin > views > *elephant* > tmpl > default.php

To create views: copy the entire *elephant* folder, rename the folder and do a find/replace on the php files that mention the old view name. 

--

This project is still extremely quick'n'dirty, It is just a starting point for creating other components easily.
