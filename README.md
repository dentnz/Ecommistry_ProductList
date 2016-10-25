# Ecommistry_ProductList

## Overview

A module that displays a list or slideshow of selected products to logged in customers in their 'My Account' section. This extension is developed for use with Magento CE 1.9.1.0.

## Module Installation

There are several ways to install the module:
1) Clone the repository locally, then copy the app folder into the Magento root directory. This will copy all necessary files into place.
2) A modman file has also been provided for a managed installation of the extension directly from github. You may have to enable 'allow symbolic links' in System > Configuration > Advanced > Template Settings > Allow Symlinks to ensure that the modules template files work correctly.

Once all the files are in place, clear all Magento caches in the backend. Log out and in again from the admin to ensure the module is installed correctly and the configuration section is visible to your respective administrator user.

## Module Operation

A configuration section has been added to the administrator area. Visit System > Configuration > Ecommistry > Product List. From here, you can configure the following:

- Product Limit - Enter a positive value to set a limit on the number of products displayed in the product list. If set to 0, then defaults to displaying all products with the 'handle_display' attribute set to 'yes'.

The extension will add/update a new product attribute to the default product attribute set. After setting this attribute for a product, you may need to rebuild your product attributes and product flat data indexes before products are displayed correctly in the product list.

## Technical Overview

- Creates a new yes/no product attribute, 'handle_display', and adds it to the default product attribute set. Sets the attribute to be 'displayed in product listing' to ensure it is compatible with product flat index. If the product attribute exists already, it updates that attribute instead.
- Additional link added, 'Product List', to the 'My Account' customer section via a layout update.
- Additional frontend controller (with logged-in check) to render a set of products with the handle_display attribute set to yes.
- Product Limit configuration option added to Magento System Configuration.
- Slider mode provided - uses product 'thumbnail' image.

## Docker Demo

A docker-compose.yml file has been provided to setup a basic Magento LAMP container for testing. Install Docker, docker-compose up -d, install Magento by visiting localhost. After installation, log into the magento_magento_1 container via bash and cp -r the files from /Ecommisty/app to /var/www/html/. Follow rest of the instructions from the Module Installation section above.