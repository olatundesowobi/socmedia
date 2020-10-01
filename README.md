# Modules to provide Social media links on the website

The solution has two diffrent modules that can be used to provide the social media links on the site. Both of them should be installed  in order to allow the user to manage thier social media links.


## Installation

1.The Module requires the :
  
  - features module
  - fontawesomemodule 
  
  to be installed as a prerequisite. 

2. Once the features module is installled you will need to install the modules :
  - socmedia module
  - socialmedia module

3. Remember to clear the cache once installation is complete

## Setting up Social Media Links

1. Once the module is installed the site will have a new contentype that will allow the users of the site to add social media icons and links. The new contenttype is called Social Media Links. You will be required to provide the information for the social media links so that they can work with Font  awesome and without Font Awesome. You will need to add each of your website social media links by filling the Form at /node/add/social_media_link.

You will need to provide :
  - The name of the social media site
  - The URL for the social media site
  - The Alternative text label link to the social media website
  - The font awesome Icon link i.e for facebook fa-facebook
  - Ignore the Image Field
  - In the Image Icon Field place a fallback image if the usite is unable to use font awesome
  
## Setting up the Block 

1. To Provide the Social media links there is a Block called Social Media Websites that can be placedd on the site on the Block Layout page /admin/structure/block.
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
 
 ## Note
 
 1. To mitigate that the site allows the user to use thier own images.Once the font awesome styles are available admins cann switch to use font awesome. This can be used as a mitigation in case the service is not available or the available styles have not been configured on the CDN.
 
