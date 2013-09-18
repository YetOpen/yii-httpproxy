<?php

class HttpProxyModule extends CWebModule
{
    private $_assetsUrl;

	public function init()
	{
        // Main controller
        $this->defaultController = 'Proxy';

		// import the module-level models and components
		$this->setImport(array(
			'httpproxy.knProxy.*',
		));

	}

}
