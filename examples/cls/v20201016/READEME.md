CLS Demo
---

## UploadLog demo

```
<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// import cls client
use TencentCloud\Cls\V20201016\ClsClient;
// import UploadLogRequest
use TencentCloud\Cls\V20201016\Models\UploadLogRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// import configuration
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

use Cls\LogGroup;
use Cls\Log\Content;
use Cls\Log;
use Cls\LogGroupList;



$logGroupList =  new LogGroupList();

$logGroup = new LogGroup();

$log = new Log();

$content = new Content();
$content ->setKey("name");
$content ->setValue("zhangsan");
$log->setContents([$content]);
$log->setTime(time());

$logGroup->setLogs([$log]);
$logGroupList ->setLogGroupList([$logGroup]);

$pb_str = $logGroupList->serializeToString();

try {
    // Instantiate an authentication object. The Tencent Cloud account key pair `secretId` and `secretKey` need to be passed in as the input parameters
    // $cred = new Credential("secretId", "secretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));

    // Instantiate an HTTP option (optional; skip if there are no special requirements)
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(60);    // Request timeout in seconds (default 60 seconds)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // Specify the access region domain name (default is nearest access)

    // Instantiate an client option (optional; skip if there are no special requirements)
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Instantiate the client object for the product to be requested (taking cls as an example). clientProfile is optional
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $resp = $client->call_octet_stream("UploadLog", array(
        "X-CLS-TopicId" => "[TopicID]",
    ), $pb_str);

    // A string return packet in JSON format is output
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}


```

## use protobuf in php project

1. install newest protoc： https://github.com/protocolbuffers/protobuf/releases 

Generate corresponding PHP implementation code based on the pb file.


```
protoc --php_out=./ cls.proto

```

2. import generated file in composer.json

```
{
    ...
    "autoload": {
        ...
        "psr-4": {
            "GPBMetadata\\": "./examples/cls/v20201016/proto/GPBMetadata",
            "Cls\\": "./examples/cls/v20201016/proto/Cls"
        }
    }
}

```

3. import google probuf

```
composer require "google/protobuf"

```


## protoc file

php protoc only support pb3.0


```
syntax = "proto3";

package cls;

message Log
{
    int64 time = 1;
    message Content
    {
        string key = 1;
        string value = 2;
    }
    repeated Content contents= 2;
}

message LogTag
{
    string key       = 1;
    string value     = 2;
}

message LogGroup
{
    repeated Log logs= 1;
    optional string contextFlow = 2;
    optional string filename = 3;
    optional string source = 4;
    repeated LogTag logTags = 5;
}

message LogGroupList
{
    repeated LogGroup logGroupList = 1;
}

```




