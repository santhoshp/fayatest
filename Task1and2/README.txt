Add Banner in Magento 2 Home 
=============================

Installation:
=============

During the installation process 

1. Backup your web directory and store database 
2.Navigate to the Cache Management page (System-->Cache Management), selecting all caches, clicking "disable" from the drop-down menu, and submitting the change. Or by running the command "php bin/magento cache:disable"from your magento root directory in command line. 
3. Download Extension from git. 
4. Copy Faya folder to your Magento 2  app/code folder 
5. In command line, using "cd", navigate to your Magento 2 root directory 
6. Run commands: 
	php bin/magento setup:upgrade 
	php bin/magento setup:di:compile 
	php bin/magento setup:static-content:deploy
7. Enable Magento Cache through System-->Cache Management or run command "php bin/magento cache:enable" from your magento root directory.


Note: This extention also create 'Featured Product' product attribute for Featured Product.



Create Featured / New Products using Magento 2 Widget 
=====================================================

Featured Product:
================

1. Select Featured Product option Yes for featured products.

2. Go to Content --> Widgets

3. Add Widget

4. Selet 

   Type -> Catalog Products List
   Theme -> Your Theme
   Widget Title -> Enter title
   Display On -> Specified Page
   Page -> CMS Home Page
   Container -> Main Content Area
   Template -> Product Grid Template

5. Select Widget Options tab
    
   Title -> Enter Title
   Number of Products to Display - 4 (Set limit)
   Conditions ->  Select product attribute is_featured is Yes

6. Save


New Product:
================

1  Go to Content --> Widgets

2. Add Widget

3. Selet 

   Type -> Catalog New Products List
   Theme -> Your Theme
   Widget Title -> Enter title
   Display On -> Specified Page
   Page -> CMS Home Page
   Container -> Main Content Area
   Template -> New Product Grid Template

4. Select Widget Options tab
    
   Display Type -> New products
   Number of Products to Display - 4 (Set limit)

5. Save



   

 
   
   
   
   
   