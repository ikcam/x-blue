# X-Blue WordPress Theme #
This is X-Blue**, a [WordPress](http://www.wordpress.org/) Theme based on my customize version of [SandBox in HTML5](https://github.com/ikcam/Sandbox-HTML5), wich I've improved by adding:
* Facebook Open Graph and Google+
	* Automatically gets a post image and use it as **logo** for Facebook.
	* Use the excerpt of the post as description.
* Adds **Twitter**, **Google+** and **Facebook** share button.
* All gradients are created by [Stylus](https://github.com/LearnBoost/stylus) using [Nib](https://github.com/visionmedia/nib) and [node-canvas](https://github.com/learnboost/node-canvas)
	* **ALERT** You **WON'T** be able to re-compile the style.styl file on **Windows**, you **ONLY** can do it on **MacOS** or **Linux** because you require [cairo graphics library](http://cairographics.org/download/)

## Installation ##
* You need to download the theme and upload it into your `wp-content/themes` folder
* Active it in your WordPress Admin Panel
* **You need to modify/add this:**
	* Add your Facebook AppID at **line 9** and **line 71** of the `header.php`
	* Modify the `sidebar.php`
		* Change your **Facebook Like Page URL**
		* Change to your **Twitter** account
* Enjoy and feel free to modify the theme in every way you want to.

## For the Future ##
On the **upcomming version** in looking forward to add [Facebook Timelime](http://facebook.com/about/timeline) support, this will allow to post on users activity page items like:
* Reading an article
* Writting a comment
* Reply a comment