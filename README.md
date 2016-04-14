# Test PHP Application

[![License](https://img.shields.io/badge/©-2016_OurTownRentals.com-blue.svg)](./LICENSE.txt)

## Description

This is a public repository to test deployment of PHP applications.

- `app/index.html` - Static HTML page.
- `app/index.php` - Same as `app/index.html`, but prints current PHP version.
- `app/query/index.php?value=test` - Test using query strings.
- `app/cron.php` - Writes a timestamp to `app/data/cron.txt`.
  Use to test a cron task.
- `app/info/index.php` - Shows `phpinfo()` output.
- `app/private.php`, `app/info/private.php`
  `app/public.php`, and `app/info/public.php` -
  Use to test which PHP files may be executed.
- `app/db/index.php` - Tests connection to a MySQL compatible database.
- `app/rw/index.php` - Writes to and then reads from `app/data/rw.txt`.
  The `app/data` path will need to be created or mounted by the host system.

## Source Code

The [test-php-app source] is hosted on GitHub.
Clone the project with

```
$ git clone https://github.com/ourtownrentals/test-php-app.git
```

[test-php-app source]: https://github.com/ourtownrentals/test-php-app

## License

Copyright 2016 OurTownRentals.com.

## Warranty

This software is provided "as is" and without any express or
implied warranties, including, without limitation, the implied
warranties of merchantibility and fitness for a particular
purpose.
