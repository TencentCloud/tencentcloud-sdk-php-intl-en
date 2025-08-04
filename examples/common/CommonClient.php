<?php
require_once __DIR__.'/../../vendor/autoload.php';
use TencentCloud\Common\CommonClient;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;

try {
    $cred = new Credential(
        getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY")
    );

    $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
    $headers = array();
    $body =  [
        "Filters" => [
            [
	            "Name" => "zone",
                "Values" => ["ap-guangzhou-1", "ap-guangzhou-2"]
            ]
        ]
    ];

    $resp = $client->callJson(
        // action name
        "DescribeInstances",
        // request body
        $body,
        // request headers, optional
        //$headers,
    );
    echo $resp["TotalCount"].PHP_EOL;
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
