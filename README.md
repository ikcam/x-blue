# X-Blue WordPress Theme #
**X-Blue** is a [WordPress](http://www.wordpress.org/) Theme based on my customize version of [SandBox in HTML5](https://github.com/ikcam/Sandbox-HTML5), wich I've improved by adding:

* Facebook Open Graph and Google+
	* Automatically gets a post image and use it as **image** for Facebook or Google+.
	* Use the post excerpt as **description**.
* **Twitter**, **Google+** and **Facebook** share button on every post.
* All gradients are created by CSS. I've use [Stylus](https://github.com/LearnBoost/stylus), [Nib](https://github.com/visionmedia/nib) and [node-canvas](https://github.com/learnboost/node-canvas)
	* **ALERT** You **WON'T** be able to compile the ´style.styl´ file on **Windows**, you **ONLY** can do it on **MacOS** or **Linux** because you require [cairo graphics library](http://cairographics.org/download/). If you want to compile it on **Windows** you will need to remove all the `linear-gradient-image()`
* Order lists on the sidebar looks great (**use a order list only of 5 elements**)
* Uses `wordpress.styl` from [stylus-boilerplate](https://github.com/neojp/stylus-boilerplate)

## Installation ##
* You need to download the theme and upload it into your `wp-content/themes` folder
* **You need to modify/add this:**
	* Add your Facebook AppID at **line 9** and **line 71** of the `header.php`
	* Modify the `sidebar.php`
		* Change your **Facebook Like Page URL**
		* Change to your **Twitter** account
	* On the folder `ad` you will find **3 ad blocks**. Place your ad code inside of them.
* Active it in your WordPress Admin Panel
* Enjoy and feel free to modify the theme in every way you want to.

## Compile style.styl ##
Install Stylus (Before you need to install [NodeJS](http://nodejs.org))

	npm install -g stylus

Install Nib

	npm install -g nib

Install [Cairo Graphics Library](http://cairographics.org/download/), them install **node-canvas**

	npm install -g canvas

Inside the template folder run

	stylus -w -u nib style.styl

Also you can use (if you want a compress CSS file)

	stylus -w -c -u nib style.styl

This will out a file named `style.css`.

## For the Future ##
On the **upcomming version** in looking forward to add [Facebook Timelime](http://facebook.com/about/timeline) support, this will allow to post on users activity page items like:

* Reading an article
* Writting a comment
* Reply a comment