<?php
    // Require the Composer autoloader.
    require 'vendor/autoload.php';

    use Aws\S3\S3Client;

    $s3 = new Aws\S3\S3Client([
        'version'     => 'latest',
        'region'      => 'us-west-2'
    ]);

    Upload a publicly accessible file. The file size and type are determined by the SDK.
    try {
        $s3->putObject([
            'Bucket' => 'nutrifit-dieta-app',
            'Key'    => $_FILES["fileToUpload"]["name"],
            'Body'   => $_FILES["fileToUpload"]["tmp_name"],
            'ACL'    => 'public-read',
        ]);
    } catch (Aws\S3\Exception\S3Exception $e) {
        echo "There was an error uploading the file.\n";
    }
            
    // var_dump($_FILES["fileToUpload"])
?> 