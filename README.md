## PHP-UserAgent
![Screen Shoot](http://i707.photobucket.com/albums/ww71/ashekfadl/Screen%20Shots/user_agent_screenshot_3_1.png)


>`UserAgent` Class Analayse client user agent string by default, or a given user agent string and gives you very helpfull information about user system and browser.


### License

>This Work is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License.
>
[![Link](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)](http://creativecommons.org/licenses/by-sa/4.0/)

### Copyright
>@author	__Ahmed Saad__ <a7mad.sa3d.2014@gmail.com> 2013-2016

### Version
> 2.0.0

### Updated
> 31 Jul 2016


----

### Features:

1. Get System and Browser Information about your Visitor as the following:
	1. Smart Phones *`Mobile`* Detecting.
	2. System Archetecture ( *`32bit`* Or *`64bit`* ).
	3. CPU Brand Detecting ( `Intel`, `AMD`, `PPC` ).
	4. *`Platform`* Detecting for *`Desktop OS`* and *`Smart Phone OS`*.
	5. *`Optimization` : Client UserAgent Only Processed Once*
	6. *Read Only Access Properties .*


---
### Usage:

> UserAgent Class Uses namespace, and autoload will automatically load class when called.

>> * `include` or `require` *user_agent.php* file 
>> 
>> 			<?php
>> 				require_once('core/user_agent.php');
>> 				use Core\UserAgent;
>> 				$instance = new UserAgent();
>>
>> * just `require` or `include` Supplied *autoload.php* file which will load any class 
>>
>>			<?php
>> 				require_once('core/autoload.php');
>> 				use Core\UserAgent;
>> 				$instance = new UserAgent();

-
##### `$instance = new UserAgent()`:

>
	// Current Client Systen
	$instance = new UserAgent();
>
	// Custom UserAgent String
	$instance = new UserAgent( 'custom user agent string here' );
	
##### `$instance->string`:
> __*String*__ useragent string .

##### `$instance->systemString`:
> __*String*__ system string .

##### `$instance->browserName`:
> __*String*__ Browser Name __*Google Chrome, Mozilla Firefox, Safari, Opera, Internet Explorer, Android Browser*__ .

##### `$instance->browserVersion`:
> __*String*__ Browser Version .

##### `$instance->osPlatform`:
> __*String*__ OS Platform Name .

##### `$instance->osVersion`:
> __*String*__ OS Version .

##### `$instance->osShortVersion`:
> __*String*__ OS Short Version .

##### `$instance->osArch`:
> __*String*__ OS bit Architecture __*32 OR 64*__ .

##### `$instance->isIntel`:
> __*Boolean*__ Detect if System CPU is Intel .

##### `$instance->isAMD`:
> __*Boolean*__ Detect if System CPU is AMD .

##### `$instance->isPPC`:
> __*Boolean*__ Detect if System CPU is PowerPC .

##### `$instance->isMobile`:
> __*Boolean*__ Detect if client device is Mobile Phone Or Tablet .

##### `$instance->mobileName`:
> __*String*__ Mobile Device Name .
	