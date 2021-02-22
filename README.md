# sendmail

## Shell script wrapper for PHPMailer

Send emails secure via your own email server

    Usage: vendor/bin/sendmail -c <config-file> -t <To: address> -s <subject> [options]

    Options:
            -c      Config file {required}
            -t      To: address(es) (comma separated) {required}
            -s      Subject {required}
            -b      Plain text body, if starts with @ assume get from file
            -f      HTML body, if starts with @ assume get from file
            -w      CC: address(es) (comma separated)
            -z      BCC: address(es) (comma separated)
            -a      Attachment(s)
            -p      Priority (0|1)

    Possible formats for emails: 'name@example.com' or 'any name <name@example.com>'

Copy `config.dist.php` and adjust for your needs

    $ cp config.dist.php email-config.php
