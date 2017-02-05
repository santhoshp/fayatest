=======================================
Faya_Comparelimit Setup
=======================================
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


Configuration:
=============

To configure the extension, login to admin area
1. Go to Stores --> Configuration --Faya Extensions --> Product Compare Limit.
2. Enable the extension and set compare limit.
3. Save config

===================================================================================






