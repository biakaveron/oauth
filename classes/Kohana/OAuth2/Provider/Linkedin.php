<?php

abstract class Kohana_OAuth2_Provider_Linkedin extends OAuth2_Provider {

	public $name = 'linkedin';

	public function url_authorize()
	{
		return 'https://www.linkedin.com/uas/oauth2/authorization';
	}

	public function url_access_token()
	{
		return 'https://www.linkedin.com/uas/oauth2/accessToken';
	}
}