# Convert-MP4-to-MP3-using-PHP

This PHP program converts MP4 to MP3 using PHP, [Composer PHP SDK](https://github.com/shotstack/shotstack-sdk-php), and Shotstack API. See this [tutorial](link of the article) to learn how it works.

## What is Shotstack API?

Shotstack API is a cloud based video editing API that enables you to render multiple videos concurrently. See the available SDKs [here](https://shotstack.io/docs/guide/sdks/). Sign up for a free developer account [here](https://dashboard.shotstack.io/register?utm_source=github&utm_campaign=sample_repos) to get API key.

## Why Use Shotstack API?

Rendering videos is a resource consuming process. It may take several minutes to render one video depending on the complexity. Shotstack enables to concurrently render multiple videos in the powerful cloud infrastructure. This reduces rendering time and fastens the process. Visit our [Docs](https://shotstack.io/docs/guide/getting-started/core-concepts/?utm_source=github&utm_campaign=sample_repos) to learn more.

Checkout other PHP demo examples in this [Github repo](https://github.com/shotstack/php-demos/tree/main/examples).

## Requirements

Requires PHP7.3+ and Composer.

## Installation

The recommended way to use the SDK is as a composer package. Install using the following commands:

```bash
composer install
composer require shotstack/shotstack-sdk-php
```

## Set your API Key

You can [get an API key](http://shotstack.io/?utm_source=github&utm_medium=demos&utm_campaign=php_sdk) via the Shotstack web site.

## Run the Project

First, you need to start the PHP server on your machine using the following command:

```bash
php -S 127.0.0.1:8000
```

And then replace the URL on your web browser as mentioned below:

```bash
http://localhost:8000/file_name.php
```
Replace 'file_name' with the file name that you want to run.

## Documentation

Documentation and reference guides for the Shotstack video editing API

* [Getting Started Guide]()
* [API Reference](https://shotstack.io/docs/api/)
* [Examples](https://github.com/shotstack/php-demos)
* [Shotstack Website](https://shotstack.io/)


