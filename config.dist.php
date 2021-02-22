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

    // 'verify-peer' => true, # Needed to be "false" if the server is defined as an IP!

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

];
