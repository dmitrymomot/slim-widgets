slim-widgets
============

Support widgets for Slim Framework + Plates (Plates is a native PHP template system)


## Installation

Widgets is available via Composer:

```json
{
    "require": {
        "slim-extensions/widgets": "dev-master"
    }
}
```

## Example widget class

```php
namespace App\Widget;

class Test extends \Slim\Widgets\Widget implements \App\Plates\Extension\WidgetInterface {

	public function response()
	{
		$this->templatePath = APPPATH.'views';

		$response = __CLASS__.'::'.__FUNCTION__;
		return $this->render('widgets/test', array('content' => $response));
	}
}
```

## License

The MIT License (MIT). Please see [License File](https://github.com/dimkof/slim-widgets/blob/master/LICENSE) for more information.
