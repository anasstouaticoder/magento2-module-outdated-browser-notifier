


<h1 style="text-align: center;">Magento 2 Module AnassTouatiCoder OutdatedBrowserNotifier</h1>
<div style="text-align: center;">
  <p>Dynamically redirect to subdirectories or new domains for websites and storeviews</p>
  <img src="https://img.shields.io/badge/magento-2.1%20|2.2%20|%202.3%20|%202.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-module-outdated-browser-notifier" target="_blank"><img src="https://img.shields.io/packagist/v/anasstouaticoder/magento2-module-outdated-browser-notifier.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-outdated-browser-notifier" target="_blank"><img src="https://poser.pugx.org/anasstouaticoder/magento2-module-outdated-browser-notifier/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

    ``anasstouaticoder/magento2-outdated-browser-notifier``

- [Main Functionalities](#markdown-header-main-functionalities)
- [Installation](#markdown-header-installation)
- [Configuration](#markdown-header-Configuration)
- [Specifications](#markdown-header-specifications)

## Main Functionalities

Outdated Browser Notifier is a Magento 2 Module designed to detect outdated browsers and notify users to update their browsers for optimal performance and security. This module ensures a better user experience by reducing compatibility issues and encouraging the use of modern browsers.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

- Unzip the zip file in `app/code/AnassTouatiCoder`
- Enable the module by running `php bin/magento module:enable AnassTouatiCoder_OutdatedBrowserNotifier`
- Apply database updates by running `php bin/magento setup:upgrade`
- Flush the cache by running `php bin/magento cache:flush`
- Do not forget to flush cdn cache or varnish if exist

### Type 2: Composer

- Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
- Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
- Install the module composer by running `composer require anasstouaticoder/magento2-module-outdated-browser-notifier`
- enable the module by running `php bin/magento module:enable AnassTouatiCoder_OutdatedBrowserNotifier`
- apply database updates by running `php bin/magento setup:upgrade`
- Flush the cache by running `php bin/magento cache:flush`
- Do not forget to flush cdn cache or varnish if exist

## Configuration
To enable the module in the Front office:
Navigate to Stores => Configuration => ATOUATI Tools => Outdated Browser Notifier => General => 
enable Yes, 
To enable the module in back office as well 


## Specifications
### Overview
OutdatedBrowserNotifier is a powerful Magento 2 module designed to enhance user experience by detecting outdated browsers and notifying users to update their browsers for optimal site performance and security. This module seamlessly integrates with your Magento store, ensuring that your customers are using the latest browser versions, thereby reducing compatibility issues and improving overall website functionality.

### Key Features:
- Compatibility: it is compatible with all Magento 2 version untill the latest version
- Outdated Browser Detection: Automatically identifies users with outdated browsers.
- Customizable Notification: Displays a customizable message to encourage users to update their browsers.
- Easy Integration: Simple to install and configure within your Magento 2 store.
- Browser Compatibility: Supports detection for all major browsers including Chrome, Firefox, Safari, Edge, and Opera.
- Lightweight and Efficient: Minimal impact on site performance with asynchronous loading.
#### Benefits:

- Enhanced User Experience: Ensures users have a smooth and secure browsing experience.
- Improved Security: Encourages users to update to more secure browser versions.
- Reduced Compatibility Issues: Helps prevent display and functionality issues caused by outdated browsers.
- Custom Notifications: Allows you to tailor the update message to fit your brand's voice and style.
