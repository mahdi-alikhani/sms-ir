<p align="center"><img src="https://sms.ir/wp-content/uploads/1-white-background-main-logo-2.svg"></p>

<p align="center">Official Laravel Package for sms.ir</p>

[![Latest Stable Version](https://poser.pugx.org/ipecompany/smsirlaravel/v/stable)](https://packagist.org/packages/ipecompany/smsirlaravel)
[![Total Downloads](https://poser.pugx.org/ipecompany/smsirlaravel/downloads)](https://packagist.org/packages/ipecompany/smsirlaravel)
[![Monthly Downloads](https://poser.pugx.org/ipecompany/smsirlaravel/d/monthly)](https://packagist.org/packages/ipecompany/smsirlaravel)
[![License](https://poser.pugx.org/ipecompany/smsirlaravel/license)](https://packagist.org/packages/ipecompany/smsirlaravel)




Hi, if you have an account in sms.ir, you can use this package for laravel

----------


How to install:
-------------

    composer require mahdialikhani/sms-ir
    php artisan vendor:publish
    php artisan migrate

> **Setup:**

add this line to your app.php providers:
Mahdialikhani\smsirlaravel\SmsirlaravelServiceProvider::class,

and add this line to your app.php aliases:
'Smsirlaravel' => Mahdialikhani\smsirlaravel\SmsirlaravelFacade::class,


> After publish the package files you must open smsirlaravel.php in config folder and set the api-key, secret-key and your sms line number.
> 

> **Like this:**

	'webservice-url' => env('SMSIR-WEBSERVICE-URL','https://ws.sms.ir/'),
	'api-key' => env('SMSIR-API-KEY','Your sms.ir api key'),
	'secret-key' => env('SMSIR-SECRET-KEY','Your sms.ir secret key'),
	'line-number' => env('SMSIR-LINE-NUMBER','Your sms.ir line number'
> 
> Note:

you can set the keys and line number in your .env file

> **like this:**

> SMSIR-WEBSERVICE-URL=https://ws.sms.ir/

> SMSIR-API-KEY=your api-key

> SMSIR-SECRET-KEY=your secret-key

> SMSIR-LINE-NUMBER=1000465******



Methods:
-------------

> Smsirlaravel::send()

> Smsirlaravel::credit()

> Smsirlaravel::getLines()

> Smsirlaravel::addToCustomerClub()

> Smsirlaravel::deleteContact();

> Smsirlaravel::sendToCustomerClub();

> Smsirlaravel::addContactAndSend();

> Smsirlaravel::sendVerification();

> Smsirlaravel::ultraFastSend();

> Smsirlaravel::getSentMessages();

> Smsirlaravel::getReceivedMessages();

