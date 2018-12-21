## Login form
Basic login form with username and password.

### Without iframe
* Using [AJAX](no-iframe/ajax) (i.e. will call process.php)
* Using [AJAX with absolute URL](no-iframe/ajax-absolute-url) (i.e. will call http://example.com/process.php)
* Using [AJAX with absolute URL and 307 redirect](no-iframe/ajax-absolute-url-with-redirect) (i.e. will call http://example.com/redirect.php)
* Using [AJAX with relative URL](no-iframe/ajax-relative-url) (i.e. will call ./process.php)
* Using [AJAX with relative parent URL](no-iframe/ajax-relative-parent-url) (i.e. will call ../ajax/process.php)
* Using [HTTP](no-iframe/http)
* Using [HTTP with 307 redirect](no-iframe/http-with-redirect)
* Using [HTTP login form submitted by jQuery](no-iframe/jquery)

### Inside iframe
* Using [AJAX](iframe/ajax) (i.e. will call process.php)
* Using [AJAX with absolute URL](iframe/ajax-absolute-url) (i.e. will call http://example.com/process.php)
* Using [AJAX with absolute URL and 307 redirect](iframe/ajax-absolute-url-with-redirect) (i.e. will call http://example.com/redirect.php)
* Using [AJAX with relative URL](iframe/ajax-relative-url) (i.e. will call ./process.php)
* Using [AJAX with relative parent URL](iframe/ajax-relative-parent-url) (i.e. will call ../ajax/process.php)
* Using [HTTP](iframe/http)
* Using [HTTP with 307 redirect](iframe/http-with-redirect)
* Using [HTTP login form submitted by jQuery](iframe/jquery)

Type anything as username and password, the page will display the username and password received by the server if not empty.

## Requirement
Need PHP to be run.

## Credit
Based on [https://github.com/scotch-io/ajax-forms-jquery](https://github.com/scotch-io/ajax-forms-jquery)
