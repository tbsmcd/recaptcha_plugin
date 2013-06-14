Guia rápida de uso
================================================================================

1. Obten una clave reCAPTCHA.
--------------------------------------------------------------------------------
 - <http://www.google.com/recaptcha>

2. Instalacion.
--------------------------------------------------------------------------------
 - Descarga `recaptchalib.php` de:
  - <http://code.google.com/p/recaptcha/downloads/list?q=label:phplib-Latest>
 - y ponlo en la carpeta `/app/Plugin/Recaptcha/Vendor/`


3. Configuracion.
--------------------------------------------------------------------------------
Introduce las claves obtenidas en el paso 1 en : /app/Plugin/Recaptcha/Config/key.php.
```php
<?php
	$config = array(
		'Recaptcha' => array(
			'Public'  => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
			'Private' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
		),
	);
```

Carga el plugin `/app/Config/bootstrap.php` insert

```php
<?php
CakePlugin::load('Recaptcha');
```


4. Controlador.
--------------------------------------------------------------------------------
```php
<?php
	public $components = array('Recaptcha.Recaptcha');
	public $helpers = array('Recaptcha.Recaptcha');
```

5. View.
--------------------------------------------------------------------------------
Dentro de la etiqueta `<form>`:
```php
<?php

	echo $this->Recaptcha->show();
	echo $this->Recaptcha->error();
```


Si quieres modificar el tema de reCAPTCHA tienes que hacer lo siguiente:
```php
<?php echo $this->Recaptcha->show('white'); ?>
```

**Opcion de colores **: 'red' | 'white' | 'blackglass' | 'clean';
**Valor por defecto**: 'red';
