Recurly
=======

This is an attempt at a better Recurly API Client. This library is still in heavy development.

Currently supported
-------------------
- Fetching of
	- all accounts
	- account detail
	- account billing info
	- all subscriptions
	- subscription detail
	- all coupons
	- coupon detail
- Creation of
	- coupons
- Recurly.js functionality
	- signing a request
	- fetching a subscription transaction
	
Installation
------------
Via composer, see packagist.

Usage
-----

Create a new instance of `Recurly()` with your subdomain and api key as parameters. Provide your private key if you wish to use the Recurly.js functionality:

    $recurly = new \Recurly\Recurly('example', 'abcdefgh123456', '987654321hgfedcba');
    
Fetch resources as needed

    $accounts = $recurly->accounts->getAll();
    $account = $recurly->accounts->get(123);
    $billingInfo = $recurly->accounts->getBillingInfo($account);
    
Returned values will be (arrays of) Recurly\Model instances. All variables will be properly deserialized to strings, integers, null or DateTime objects.

To create objects, create a now Model and pass that along

    $coupon = new Recurly\Model\Coupon();
    $coupon->setName('Coupon')->setCode('abcdef')->setDiscountType('percent')->setDiscountPercent(10);
    $recurly->coupons->create($coupon); // will return true if succesful, throws Exception if not.
    
All calls will throw an exception if something goes wrong. 