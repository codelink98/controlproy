<?php
        $credentials = new Aws\Credentials\Credentials('AKIA57TDT64IUZSM7Z5L', '/JY+fxprcX6zSHhwClZyHKejP1fViC3zf3IdHf2n');
        $s3 = new Aws\S3\S3Client([
            'version'     => 'latest',
            'region'      => 'us-west-2',
            'credentials' => $credentials
        ]);
    ?> 