<?php defined('SYSPATH') OR die('No direct access allowed.');

class Kohana_OAuth2_Client {

	/**
	 * Create a new consumer object.
	 *
	 *     $consumer = OAuth2_Client::factory($options);
	 *
	 * @param   array  consumer options, key and secret are required
	 * @return  OAuth_Consumer
	 */
	public static function factory(array $options = NULL)
	{
		return new OAuth2_Client($options);
	}

	/**
	 * @var  string  client id
	 */
	protected $id;

	/**
	 * @var  string  client secret
	 */
	protected $secret;

	/**
	 * @var  string  callback URL for OAuth authorization completion
	 */
	protected $callback;

	/**
	 * @var array    array of consumer options
	 */
	protected $options = array();

	/**
	 * Sets the consumer key and secret.
	 *
	 * @param   array  consumer options, key and secret are required
	 * @return  void
	 */
	public function __construct(array $options = NULL)
	{
		if ( ! isset($options['id']))
		{
			throw new Kohana_OAuth_Exception('Required option not passed: :option',
				array(':option' => 'id'));
		}

		if ( ! isset($options['secret']))
		{
			throw new Kohana_OAuth_Exception('Required option not passed: :option',
				array(':option' => 'secret'));
		}

		$this->id = $options['id'];

		$this->secret = $options['secret'];

		if (isset($options['callback']))
		{
			$this->callback = $options['callback'];
		}

		$this->options = $options;
	}

	/**
	 * Return the value of any protected class variable.
	 *
	 *     // Get the client key
	 *     $key = $client->key;
	 *
	 * @param   string  variable name
	 * @return  mixed
	 */
	public function __get($key)
	{
		return isset($this->$key) ? $this->$key : Arr::get($this->options, $key);
	}

	/**
	 * Change the client callback.
	 *
	 * @param   string  new consumer callback
	 * @return  $this
	 */
	public function callback($callback)
	{
		$this->callback = $callback;

		return $this;
	}

}
