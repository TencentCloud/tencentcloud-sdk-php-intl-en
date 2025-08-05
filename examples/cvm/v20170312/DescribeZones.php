<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cvm\V20170312\CvmClient;
// Import the Request class for the interface to be called
use TencentCloud\Cvm\V20170312\Models\DescribeZonesRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
try {
    // Instantiate an authentication object. The Tencent Cloud account key pair `secretId` and `secretKey` need to be passed in as the input parameters
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    $clientProfile = new ClientProfile();
    //$clientProfile->setLanguage(ClientProfile::$ZH_CN);
    $clientProfile->setSignMethod(ClientProfile::$SIGN_HMAC_SHA256);
    // Instantiate the client object for the product to be requested (taking cvm as an example)
    $client = new CvmClient($cred, "ap-guangzhou", $clientProfile);

    // Instantiate a request object
    $req = new DescribeZonesRequest();

    // To call the desired interface via the client object, you need to pass in the request object
    $resp = $client->DescribeZones($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
