![logo](https://impact-blue.co.jp/img/nav_logo.png)

![build](https://img.shields.io/bitbucket/pipelines/ib_developers/laravel-job-posting.svg) [![Total Downloads](https://poser.pugx.org/impact-blue/laravel-job-posting/downloads)](https://packagist.org/packages/impact-blue/laravel-job-posting) [![Latest Stable Version](https://poser.pugx.org/impact-blue/laravel-job-posting/version)](https://packagist.org/packages/impact-blue/laravel-job-posting) [![License](https://poser.pugx.org/impact-blue/laravel-job-posting/license)](https://packagist.org/packages/impact-blue/laravel-job-posting)

# laravel-job-posting
Easily add job posting structured data to your job posts.

## Introduction
Google is bringing their job search experience to more and more countries, and with that comes the need to have properly structured job posting data.

![Job posting](https://developers.google.com/search/docs/data-types/images/jobs-search-ui.png)

This package supplies the `JobPosting` facade, allowing you to easily add properly structured json-ld job postings to any blade template using `{!! JobPosting::render($job) !!}`.

## Installation
You may use Composer to install laravel-job-posting into your Laravel project:

	composer require impact-blue/laravel-job-posting

After installing laravel-job-posting, publish its config usinfg the vendor:publish Artisan command:

	php artisan vendor:publish

## Configuration
After publishing laravel-job-posting's config its primary configuration file will be located at config/job-posting.php.
This configuration file allows you to configure what data to use for the required properties described here:
https://developers.google.com/search/docs/data-types/job-posting

You may use any model attributes available in the model passed to `{!! JobPosting::render($job) !!}`.
If the defined string is not a model attribute the defined string will be used as is.
If you plan on defining a required property using the second parameter of the render function (see below) you may set the property to `false` in the configuration file and it will be skipped during the property check.

### Optional properties

The configuration file only defines Google's required properties, but you are free to add any optional (or required) properties using a collection or array as the second parameter to the render function.
The data in the second parameter will be merged with whatever data was defined in the configuration file.

For example:
```
#!php
<?php
$job = Job::first();
$optionalProperties = [
    'baseSalary' => [
        '@type' => 'MonetaryAmount',
        'currency' => 'JPY',
        'value' => [
        '@type' => 'QuantitativeValue',
        'unitText' => 'HOUR',
		'value' => $job->salary,
    ],
];
```

And in your blade file:
```
#!blade
{!! JobPosting::render($job, $optionalProperties) !!}
```

## License
laravel-job-posting is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
