<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// import cvm client
use TencentCloud\Cvm\V20170312\CvmClient;
// import DescribeInstancesRequest
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Cvm\V20170312\Models\Filter;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// import configuration
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Instantiate an authentication object. The Tencent Cloud account key pair `secretId` and `secretKey` need to be passed in as the input parameters
    //$cred = new Credential("secretId", "secretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // Instantiate an HTTP option (optional; skip if there are no special requirements)
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("GET");  // POST request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default 60 seconds)
    $httpProfile->setEndpoint("cvm.ap-shanghai.tencentcloudapi.com");  // Specify the access region domain name (default is nearest access)
    //$httpProfile->setRootDomain("ap-shanghai.tencentcloudapi.com");
    //$httpProfile->setKeepAlive(true);

    // Instantiate an client option (optional; skip if there are no special requirements)
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Instantiate the client object for the product to be requested (taking cls as an example). clientProfile is optional
    $client = new CvmClient($cred, "ap-shanghai", $clientProfile);

    $req = new DescribeInstancesRequest();

    // Fill in the request parameters. The member variables of the request object correspond to the input parameters of the API.
    // You can view the definition of the request parameters through the official API documentation or by jumping to the definition of the request object.
    $respFilter = new Filter();  // Create a Filter object to query CVM instances by zone
    $respFilter->Name = "zone";
    $respFilter->Values = ["ap-shanghai-1", "ap-shanghai-2"];
    $req->Filters = [$respFilter];  // ilters is a list of Filter objects

    // It also supports assigning request parameters in the form of a standard JSON string. The code below is equivalent to the above parameter assignment.
    $params = [
        "Filters" => [
            [
                "Name" => "zone",
                "Values" => ["ap-shanghai-1", "ap-shanghai-2"]
            ]
        ]
    ];
    $req->fromJsonString(json_encode($params));

    $resp = $client->DescribeInstances($req);

    // A string return packet in JSON format is output
    print_r($resp->toJsonString());

    // print specific filed
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
