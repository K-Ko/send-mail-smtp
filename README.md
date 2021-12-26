# sendmail

## Install

    composer require k-ko/send-mail-smtp

## Send emails secured via your own SMTP email server

    Usage: vendor/bin/sendmail -c <config-file> [options]

    Options:
            -c      Config file {required}
            -t      To: address(es), can be used multiple times
            -s      Subject
            -b      Plain text body, if starts with @ assume get from file
            -f      HTML body, if starts with @ assume get from file
            -w      CC: address(es), can be used multiple times
            -z      BCC: address(es), can be used multiple times
            -r      From: From email address, overwrites config file if given
            -a      Attachment(s); file_name[,display_name]
            -p      Priority (0|1)
            -v[vvv] PHPMailer verbosity
            -h      This help

    Possible formats for emails: 'name@example.com' or 'any name <name@example.com>'
    If a HTML body is set, an additional plain text body will be ignored!

**All options can be defined in the config file and will be overwritten by command line parameters.**

All Email addresses are accepted as `name@example.com` or `any name <name@example.com>` or `"any name" <name@example.com>`

Verbosity levels are translated to

-   `0` - No debug output, default
-   `1` - Client commands
-   `2` - Client commands and server responses
-   `3` - Client commands and server responses plus connection status
-   `4` - Low-level data output, all messages

Messages goes to STDERR

## Configuration

Copy `config.dist.php` and adjust for your needs

    $ cp vendor/k-ko/send-mail-smtp/config.dist.php email.conf.php
