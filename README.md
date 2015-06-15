# Parser package

## Installing

you need to install them via composer.
Simply add the libraries to your project's `composer.json` then run `php composer.phar install`:

```json
{
    "require-dev": {
   	     ....
    	    "fuel/langswitcher": "dev-master"
	},
    "repositories": [
   	 ....
	{ "type": "vcs", "url": "https://github.com/tienjuki/langswitcher.git" }
    ]
}

Simply add `langswitcher` to your config.php `always_loaded.packages` config option.

note langswitcher require jquery so download query.js and save to assets folder
```
## Usage

```php
// add follow code to template.php file

$config = array('langs'=>array('en'=>'English','vi'=>"Viet nam"));
        
$langswitcher = Langswitcher\Langswitcher::forge($config);
        
echo $langswitcher->show();

// add follow code to before action 

$lang = Cookie::get('langSelected');
            
Config::set('language', $lang);

// load all file message

Lang::load('app','app');

```


