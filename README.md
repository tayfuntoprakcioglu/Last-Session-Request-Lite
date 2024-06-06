# Last Session Request Lite
Saves Last Session Requests for php and slows down unwanted connections. It has additional measures. 

# Warning
Please send a notification to your users during use!</br>
Depending on where you live, this Last Session Request Lite may be prohibited by law. Be careful before use!</br>
Be sure to use it in PHP 5.4.0 and higher versions!

# Setup
Add it anywhere on your web page. Security Protocol works in all areas and conditions.
```php
  include 'tt.php';
```

# Settings

Do not forget to change the recording address (record.tt). You can create an address, preferably with complex numbers, special characters, numbers.</br>
Indicate the definitions you want to save from the bottom.. ( $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_PORT'] ... )
```php
  $fp = fopen("record.tt", "a");
```

The error message is displayed in this section. Change this page. Additionally, you can redirect it to 404 pages.
```php
  header("location: /404/");
```

Customize the error page.
```php
  /404/index.html(php..)
```

# $_SERVER Indices
The IP address of the server under which the current script is executing.
```php
'SERVER_ADDR'
```
The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.
```php
'SERVER_NAME'
```
Server identification string, given in the headers when responding to requests.
```php
'SERVER_SOFTWARE'
```
Name and revision of the information protocol via which the page was requested; e.g. 'HTTP/1.0';
```php
'SERVER_PROTOCOL'
```
Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.
```php
'REQUEST_METHOD'
```
The timestamp of the start of the request.
```php
'REQUEST_TIME'
```
The timestamp of the start of the request, with microsecond precision.
```php
'REQUEST_TIME_FLOAT'
```
Contents of the Connection: header from the current request, if there is one. Example: 'Keep-Alive'.
```php
'HTTP_CONNECTION'
```
Contents of the Host: header from the current request, if there is one.
```php
'HTTP_HOST'
```
The address of the page (if any) which referred the user agent to the current page. This is set by the user agent. Not all user agents will set this, and some provide the ability to modify HTTP_REFERER as a feature. In short, it cannot really be trusted.
```php
'HTTP_REFERER'
```
Contents of the User-Agent: header from the current request, if there is one. This is a string denoting the user agent being which is accessing the page. A typical example is: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Among other things, you can use this value with get_browser() to tailor your page's output to the capabilities of the user agent.
```php
'HTTP_USER_AGENT'
```
Set to a non-empty value if the script was queried through the HTTPS protocol.
```php
'HTTPS'
```
- The IP address from which the user is viewing the current page.
```php
'REMOTE_ADDR'
```
The Host name from which the user is viewing the current page. The reverse dns lookup is based on the REMOTE_ADDR of the user.
```php
'REMOTE_HOST'
```
The port being used on the user's machine to communicate with the web server.
```php
'REMOTE_PORT'
```
The authenticated user.
```php
'REMOTE_USER'
```
The authenticated user if the request is internally redirected.
```php
'REDIRECT_REMOTE_USER'
```
The absolute pathname of the currently executing script.
```php
'SCRIPT_FILENAME'
```
The port on the server machine being used by the web server for communication. For default setups, this will be '80'; using SSL, for instance, will change this to whatever your defined secure HTTP port is.
```php
'SERVER_PORT'
```
String containing the server version and virtual host name which are added to server-generated pages, if enabled.
```php
'SERVER_SIGNATURE'
```
Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real mapping.
```php
'PATH_TRANSLATED'
```
Contains the current script's path. This is useful for pages which need to point to themselves. The __FILE__ constant contains the full path and filename of the current (i.e. included) file.
```php
'SCRIPT_NAME'
```
The URI which was given in order to access this page; for instance, '/index.html'.
```php
'REQUEST_URI'
```
[For more..](https://www.php.net/manual/en/reserved.variables.server.php)

# Note
Sum of an estimated and average record line: Between 150 and 250 bytes.</br>
Record keeping amount: Unlimited Tested up to 19 terabytes. (19791209299968 bytes.)</br>
If you have set the extension of your recording file to .txt after making your settings. Do not forget to set the read and write settings in .htaccess.</br>

# Changelog
The first version has been added. 


This version was used in 2015. It was revised and uploaded to GitHub in 2023.

