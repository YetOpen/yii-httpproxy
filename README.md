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

Author
------
Maxxer - http://www.yetopen.it