<?php
    // Require the Composer autoloader.
    require 'vendor/autoload.php';

    use Aws\S3\S3Client;

    $s3 = new Aws\S3\S3Client([
        'version'     => 'latest',
        'region'      => 'us-west-2'
    ]);

    var_dump($_FILES["fileToUpload"]["name"])
?> 