<?php
    // Include the AWS SDK autoloader
    require '../../../vendor/autoload.php';
    // Load environment variables from .env file
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../../');
    $dotenv->load();

    $envFilePath = __DIR__ . '/../../../..' . '/.env';
    if (!is_readable($envFilePath)) {
        die('The .env file is not readable at: ' . $envFilePath);
    }

    use Aws\S3\S3Client;

    // Amazon S3 API credentials
    /*
    $region = getenv('AWS_S3_REGION');
    $s3_key = getenv('AWS_S3_ACCESS_KEY');
    $s3_secret_key = getenv('AWS_S3_SECRET_ACCESS_KEY');
    $s3_bucket_name = getenv('AWS_S3_BUCKET');
    */

    $region = 'ca-central-1';
    $s3_key = 'AKIAZ7SALKDI5WPQINNB';
    $s3_secret_key = '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';
    $s3_bucket_name = 'hotelrosegarden';
    

    // Create an S3Client intance
    $s3_client = new S3Client([
        'region' => $region,
        'version' => 'latest',
        'credentials' => [
            'key' => $s3_key,
            'secret' => $s3_secret_key
        ]
    ]);

    // Check if form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Check if file is uploaded
        if($file['error'] === UPLOAD_ERR_OK) {
            // Get the file content and file name
            $file_content = fopen($file['tmp_name'], 'r');
            $file_name = basename($file['name']);


            try {
                // Upload the file to s3

                $result = $s3_client->putObject([
                    'Bucket' => $s3_bucket_name,
                    'Key' => 'uploads/' . $file_name, //path to file in s3
                    'Body' => $file_content,
                    'ACL' => 'public-read',
                ]);

                echo "File uploaded successfully! File URL: " . $result['ObjectURL'];
            } catch (AwsException $e) {
                echo "Error uploading file: " . $e->getMessage();
            } 

        } else {
            echo "File upload error!";
        }
    }

    else {
        echo "No file selected.";
    }

?>