# Meridian CodeIgniter CodeBase

### A responsive PHP framework for use as a starting point (boilerplate) for [Meridian Softech](http://meridiansoftech.net) apps

This main components of this codebase are:

* [Codeigniter 2.1.0](http://codeigniter.com) - everyone's favourite lightweight PHP framework
* [Foundation 3](http://foundation.zurb.com) - which provides the responsiveness
* [jQuery](http://jquery.com) - the popular Javascript library
* [Head JS](http://headjs.com) - asynchronous script loader that speeds up loading of scripts in the DOM 

Simple, Lightweight and Flexible. That's how we like it!

## How To Get Started

#### Clone this Repo into your working directory
git clone https://github.com/meridiansoftech/meridian_ci_codebase.git

#### Change database settings for local database
* Create a folder 'development' in application/config/
* Copy and paste the file 'database.php' found in application/config/ into the folder application/config/development/
* Go to application/config/development/database.php and change the settings to those of your local database server.

#### You are ready to go!

## Note

#### It's PagodaBox Ready

![Screenshot](http://d2q4rec0loef51.cloudfront.net/addons/default/themes/fuel/img/pagoda-float.png "PagodaBox")

We enjoy hosting on PagodaBox, so we made this boilerplate ready for hosting on PagodaBox.
All you have to do is visit the [PagodaBox website](https://pagodabox.com) and add a new Environment Variable
	
	Key : PLATFORM
	Value : PAGODA

Finally, enter your PagodaBox database settings into application/config/database.php. Enjoy!