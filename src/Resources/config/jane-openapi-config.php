<?php

declare(strict_types=1);

/*
 * This file is part of the timechimp bundle package.
 * (c) Connect Holland.
 */

return [
    'openapi-file'      => __DIR__.'/schema.yaml',
    'namespace'         => 'ConnectHolland\TimechimpBundle\Api',
    'directory'         => __DIR__.'/../../Api',
    'date-format'       => 'Y-m-d\\TH:i:s',
    'strict'            => false,
    'clean-generated'   => true,
    'use-fixer'         => true,
    'fixer-config-file' => __DIR__.'/../../../.php_cs.dist',
];
