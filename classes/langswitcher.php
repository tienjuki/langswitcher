<?php

namespace Langswitcher;

class LangswitcherException extends \FuelException {}

class Langswitcher
{
	/**
	 * Default config
	 * @var array
	 */
	protected static $_defaults = array();

	/**
	* Driver config
	* @var array
	*/
	protected $config = array();

	/**
	 * Init
	 */
	public static function _init()
	{
		\Config::load('langswitcher', true);
	}

	/**
	 * Langswitcher driver forge.
	 *
	 * @param	array			$config		Config array
	 * @return  Langswitcher
	 */
	public static function forge($config = array())
	{
		$config = \Arr::merge(static::$_defaults, \Config::get('langswitcher', array()), $config);

		$class = new static($config);

		return $class;
	}

	/**
	* Driver constructor
	*
	* @param array $config driver config
	*/
	public function __construct(array $config = array())
	{
		$this->config = $config;
	}

	/**
	* Get a config setting.
	*
	* @param string $key the config key
	* @param mixed  $default the default value
	* @return mixed the config setting value
	*/
	public function get_config($key, $default = null)
	{
		return \Arr::get($this->config, $key, $default);
	}

	/**
	* Set a config setting.
	*
	* @param string $key the config key
	* @param mixed $value the new config value
	* @return object $this for chaining
	*/
	public function set_config($key, $value)
	{
		\Arr::set($this->config, $key, $value);

		return $this;
	}
        
        public function show(){
                \Fuel\Core\Asset::add_path('/folder/',array('js'));
                echo \Fuel\Core\Asset::js(array('jquery.js'));
                
                if (\Input::method() == 'POST'){
                        if (\Input::method() == 'POST'){
                                $lang = \Input::post('language_dropdown');
                                \Fuel\Core\Cookie::set('langSelected', $lang);
                                
                        }
                }else
                {
                        $lang = \Fuel\Core\Cookie::get("langSelected");

                        return \Response::forge(\View::forge('widget/index',array('lang'=>$lang)));
                }
        }
}
