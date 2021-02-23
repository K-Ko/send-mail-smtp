<?php
/**
 * Email settings
 */
return [

    /**
     * ----------------------------------------------------------------------
     * Required
     * ----------------------------------------------------------------------
     */

    // Email server
    'host' => '...', # DNS name or IP
    'port' => 25,   # likely to be 25, 465 or 587 for SSL

    // 'verify_peer' => true, # Needed to be "false" if the server is defined as an IP!

    // Mailbox credentials
    'user' => '...',
    'pass' => '...',

    // 'timezone' => 'Europe/Berlin', # recommended; default: UTC

    /**
     * ----------------------------------------------------------------------
     * Parameters
     * Use these as defaults, but all these will be overwritten
     * by command line parameters if given!
     * ----------------------------------------------------------------------
     */

    // All Email addresses are accepted as 'name@example.com' or 'any name <name@example.com>'

    'from'         => '', // -r  -  From: From email address;
    'to'           => [], // -t  -  To: address(es)
    'cc'           => [], // -w  -  CC: address(es)
    'bcc'          => [], // -z  -  BCC: address(es)
    'subject'      => '', // -s  -  Subject
    'body'         => '', // -b  -  Plain text body, if starts with @ assume get from file
    'html'         => '', // -f  -  HTML body, if starts with @ assume get from file
    'attachments'  => [], // -a  -  Attachment(s) file names
    'priority'     => 0,  // -p  -  Priority (0|1)

];
