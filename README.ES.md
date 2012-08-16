Guia rápida de uso
================================================================================

1. Obten una clave reCAPTCHA.
--------------------------------------------------------------------------------
 - <http://www.google.com/recaptcha>

2. Setting.
--------------------------------------------------------------------------------
 - Download `recaptchalib.php` from:
  - <http://code.google.com/p/recaptcha/downloads/list?q=label:phplib-Latest>
 - And put it in `/app/Plugin/Recaptcha/Vendor/`


3. Config.
--------------------------------------------------------------------------------
Insert keys in /app/Plugin/Recaptcha/Config/key.php.
```php
<?php
	$config = array(
		'Recaptcha' => array(
			'Public'  => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
			'Private' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
		),
	);
```

Loadding the Plugin in `/app/Config/bootstrap.php` insert

```php
<?php
CakePlugin::load('Recaptcha');
```


4. Controller.
--------------------------------------------------------------------------------
```php
<?php
	public $components = array('Recaptcha.Recaptcha');
	public $helpers = array('Recaptcha.Recaptcha');
```

5. View.
--------------------------------------------------------------------------------
Inside `<form>` tags:
```php
<?php

	echo $this->Recaptcha->show();
	echo $this->Recaptcha->error();
```

If you want to use reCAPTCHA theme, you should write like this:
```php
<?php echo $this->Recaptcha->show('white'); ?>
```

**Possible values**: 'red' | 'white' | 'blackglass' | 'clean';
**Default value**: 'red';
