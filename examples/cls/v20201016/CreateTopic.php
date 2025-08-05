<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cls\V20201016\ClsClient;
// Import the Request class for the interface to be called
use TencentCloud\Cls\V20201016\Models\CreateTopicRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

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

    $req = new CreateTopicRequest();
    $req ->setLogsetId("【LogSetID】");
    $req ->setAutoSplit(true);
    $req ->setTopicName("cls_php_test_demo");
    $resp = $client->CreateTopic($req);

    // A string return packet in JSON format is output
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
