<?php

/**
 * Class Kohana_OAuth2_Provider_Stackexchange
 *
 * http://api.stackexchange.com/docs/
 */
abstract class Kohana_OAuth2_Provider_Stackexchange extends OAuth2_Provider {

	public $name = 'stackexchange';

	public function url_authorize()
	{
		return 'https://stackexchange.com/oauth';
	}

	public function url_access_token()
	{
		return 'https://stackexchange.com/oauth/access_token';
	}
}