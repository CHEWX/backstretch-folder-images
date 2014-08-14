## Backstretch Folder Images

If you are using backstretch you can set-up a directory like below and dynamically pull the images in the JavaScript for backstretch.

```
|-- assets
    `-- images
        `-- transitions
	 		    `-- index
	 		    `-- about
	 		    `-- contact
```

### Install

Simple put all your photos into the transitions directory and then split each page into it's on directory if different.

Then run

```
ppm install propcom-backstretch-folder-image
```

or

```
bower install propcom-backstretch-folder-image
```

If you are using ppm then it will automatically install the files in the correct place. For Backstretch you will need to link this up in the template.php if dev'ing locally.

You will then need to open backstretch-init.js in src directory and copy and paste the function into your main.js

Now go to views and create a new directory called ajax and put banner.php into this.

Depending on how many pages you have got and if you want the backgrounds to change per page move:

```
if ($('#index').size() > 0) {
	backstretchLoad('index', 'body');
};
```
In the the document ready function.

Index is the folder that the images are being pulled from and body is the element that backstretch is applied to.

If you do not want page specific images then just use:

```
backstretchLoad('index', 'body');
```

### Support

If you are having any problems with the JavaScript - please raise an issue, if you are having problems with the PHP in banner.php - please have a look here - https://github.com/caughtrandomly/Simple-Image-Display