HTTP PROXY MODULE
=================

This module is a simple wrapper for knProxy https://github.com/jabbany/knProxy

You can use your webserver to browse another site. In my case I use it to browse
some hosts which are connected via VPN to the webserver.


Installation
------------
Put the extracted files in protected/modules/httpproxy then change your config like follows:
```
'modules'=>array(
    ...
    'httpproxy',
    ...
    'urlManager'=>array(
    ...
        'rules'=>array(
            ...
            'httpproxy/*'=>'httpproxy',
            ...
```

Edit protected/modules/httpproxy/knProxy/conf.php and change KNPROXY_SECRET to something personal.

Usage
-----
For example in your module or controller
```
    /**
     * Return an encoded url 
     * @return string Url for knProxy
     */
    public function getEncodedUrl() 
    {
        Yii::import("application.modules.httpproxy.knProxy.*");
        require_once("conf.php");
        require_once("includes/module_encoder.php");

        $kn = new knEncoder;
        $kn->serverKey = KNPROXY_SECRET;
        return $kn->encode($this->url);
    }
```


Author
------
Maxxer - http://www.yetopen.it
