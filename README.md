## Login form
Basic login form with username and password:
* Using [AJAX](./ajax) (i.e. will call process.php)
* Using [AJAX with absolute URL](./ajax-absolute-url) (i.e. will call http://example.com/process.php)
* Using [AJAX with absolute URL and 307 redirect](./ajax-absolute-url-with-redirect) (i.e. will call http://example.com/redirect.php)
* Using [AJAX with relative URL](./ajax-relative-url) (i.e. will call ./process.php)
* Using [AJAX with relative parent URL](./ajax-relative-parent-url) (i.e. will call ../ajax/process.php)
* Using [HTTP](./http)

Type anything as username and password, the page will display the username and password received by the server if not empty.

## Requirement
Need PHP to be run.

## Credit
Based on [https://github.com/scotch-io/ajax-forms-jquery](https://github.com/scotch-io/ajax-forms-jquery)
