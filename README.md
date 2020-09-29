# Modules to provide Social media links on the website

The solution has two diffrent modules that can be used to provide the social media links on the site. Both of them should be installed  in order to allow the user to manage thier social media links.


## Installation

1.The Module requires the features module to be installed as a prerequisite. 

2. Once the features module is installled you will need to install the socmedia module and and the socialmedia module.

3. Once installed The URL for the CDN must be provided in the for Font Awesome should be set in the /modules/custom/socialmedia/socialmedia.routing.yml on line 48

4. Remember to clear the cache once installation is complete

## Setting up Social Media Links

1. Once the module is installed the site will have a new contentype that will allow the users of the site to add social media icons and links. The new contenttype is called Social Media Links. You will be required to provide the information for the social media links so that they can work with Font  awesome and without Font Awesome. You will need to add each of your website social media links by filling the Form at /node/add/social_media_link.

You will need to provide :
  - The name of the social media site
  - The an image of the social media website in case font awesome is not available. (this is automatically resized by views)
  - a link to the social media website
  - alternnative text for the link
  - the Font Awesome Code in a text field for example '<i class="fab fa-facebook-square"></i>'
  - The Fonnt Awesome code in a rich text editor. Make sure to make Text Format Full HTML and click Source on 
    editor before placing the Font Awesome code i.e '<i class="fab fa-facebook-square"></i>'   
    This should be identical to the textfield entry. Note: There may be an error with rendering in the HTMLEditor but the change is saved
  - Don't forget to press save and repeat this for all the Social media Icons
  
## Setting up the Block 

1. To Provide the Social media links there is a Block called Example that can be placedd on the site on the Block Layout page /admin/structure/block.
2. Once the Block is placed you should get a list of Social media links on the pages where the Block is made available.

## Setting up the Social media links to Use Font Awesome 

1. if you go to the admin page for the sociam media links /admin/config/system/socialmedia you will be provided the option to use font Awesome.
2. Choose Yes and Submit.
3. To complete goto the Performance page /admin/config/development/performance and clear all cache. 
4 if you view. page with the Example Block it should use the Font Awesome links

## Setting up the Social media links to Not Use Font Awesome

1. if you go to the admin page for the sociam media links /admin/config/system/socialmedia you will be provided the option to use font Awesome.
2. Choose No and Submit.
3. To complete goto the Performance page /admin/config/development/performance and clear all cache. 
4 if you view. page with the Example Block it should use the Images provided by the content types

## Customizing the Social media Links

Its possible to customize the social media links by alterring the views that are presented in either case. The Example block based on config displays either :

 - socialmedia view for the CMS images on the site
 - socialmedia view for the CMS Font Awesom images on the site
 
 
