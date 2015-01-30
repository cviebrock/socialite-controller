<?php namespace Cviebrock\SocialiteController;

use Socialize;


trait AuthenticatesAndRegistersSocialUsers {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * The registrar implementation.
	 *
	 * @var Registrar
	 */
	protected $registrar;

	/**
	 * @var Socialite
	 */
	protected $socialite;

	public function getLogin($provider) {

		if ($scopes = config('services.' . $provider . '.scopes', [])) {
			return $this->socialite->driver($provider)->scopes($scopes)->redirect();
		}

		return $this->socialite->driver($provider)->redirect();
	}

	public function getCallback($provider) {
		$user = $this->socialite->driver($provider)->user();

		dd($user);
	}
}
