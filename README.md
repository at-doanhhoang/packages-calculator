# packages-calculator
This demo package will do some calculations
------ HOW TO USE PACKAGE ------
Step 1. Install calculator package 
    "composer require quocdoanh/calculator"
Step 2. Open up the app.php file in the config folder: In app.php, scroll down to providers section and add the Calculator Service Provider by adding: 
    "QuocDoanh/Calculator/CalculatorServiceProvider"
Step 3. Go to project root of your laravel app and open composer.json file and add namespace in psr-4:

    autoload": {
        // .. 
        "psr-4": {
            // ..
            "QuocDoanh\\Calculator\\": "vendor/quocdoanh/calculator/src"
        }
    }
If you want to edit the views, then you can publish the views in the service provider. You can publish the views by the artisan command:

    "php artisan vendor:publish --tag=quocdoanh\calculator\CalculatorServiceProvider"
