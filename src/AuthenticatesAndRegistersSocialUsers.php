<?php namespace Cviebrock\SocialiteController;

use Socialize;

trait AuthenticatesAndRegistersSocialUsers {

	public function getLogin($provider) {

		return Socialize::with($provider)->redirect();
	}

	public function getCallback($provider) {
		$user = Socialize::with($provider)->user();

		dd($user);
	}

}
