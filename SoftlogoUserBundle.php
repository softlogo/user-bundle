<?php

namespace Softlogo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SoftlogoUserBundle extends Bundle
{
	public function getParent()
	{
		return "FOSUserBundle";
	}
}
