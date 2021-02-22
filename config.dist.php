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
    'port' => 587,   # likely to be 25, 465 or 587

    // Mailbox credentials
    'user' => '...',
    'pass' => '...',

    // Sender email
    'from' => '...', # 'name@example.com' or 'any name <name@example.com>',

    /**
     * ----------------------------------------------------------------------
     * Recommended
     * ----------------------------------------------------------------------
     */

    // 'timezone' => 'Europe/Berlin', # default: UTC

    /**
     * ----------------------------------------------------------------------
     * Optional
     * ----------------------------------------------------------------------
     */

    // 'verify-peer' => true, # Needed to be "false" if the server is defined as an IP!

    // 'debug' => 1, # 0 .. 4; default: 0

];
