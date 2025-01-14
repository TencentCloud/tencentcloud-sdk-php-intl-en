<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CompareFaceLiveness response structure.
 *
 * @method string getResult() Obtain Business Error Codes.
-When the return value is "Success", it indicates that liveness detection and face comparison passed. Determined to be the same person.
-When the return value is "FailedOperation.CompareLowSimilarity", it indicates that liveness detection passed, but face comparison similarity is below 70. Determined not to be the same person.
-For other error cases, please refer to [Liveness Face Comparison (API only) Error Codes](https://www.tencentcloud.com/zh/document/product/1061/55390?lang=zh&pg=#97df7537-87fe-4266-87e9-02c816d41ee2)
 * @method void setResult(string $Result) Set Business Error Codes.
-When the return value is "Success", it indicates that liveness detection and face comparison passed. Determined to be the same person.
-When the return value is "FailedOperation.CompareLowSimilarity", it indicates that liveness detection passed, but face comparison similarity is below 70. Determined not to be the same person.
-For other error cases, please refer to [Liveness Face Comparison (API only) Error Codes](https://www.tencentcloud.com/zh/document/product/1061/55390?lang=zh&pg=#97df7537-87fe-4266-87e9-02c816d41ee2)
 * @method string getDescription() Obtain The service result description
 * @method void setDescription(string $Description) Set The service result description
 * @method float getSim() Obtain This value indicates the similarity of face comparison. Value range: 0.00-100.00.
- The false acceptance rate for a threshold of 70 is 0.1%, and for a threshold of 80, it is 0.01%.
- This value is valid when the Result parameter is "Success" or "FailedOperation.CompareLowSimilarity".
 * @method void setSim(float $Sim) Set This value indicates the similarity of face comparison. Value range: 0.00-100.00.
- The false acceptance rate for a threshold of 70 is 0.1%, and for a threshold of 80, it is 0.01%.
- This value is valid when the Result parameter is "Success" or "FailedOperation.CompareLowSimilarity".
 * @method string getBestFrameBase64() Obtain The best screenshot photo from the video after verification, encoded in BASE64, in jpg format.
The optimal screenshot of the video after verification is the value encoded by BASE64, jpg format. 
Note: This field may return "null", indicating that no valid value can be obtained. 
Example values: "/9j/4AAQSk... (total length:142036)s97n//2Q=="
 * @method void setBestFrameBase64(string $BestFrameBase64) Set The best screenshot photo from the video after verification, encoded in BASE64, in jpg format.
The optimal screenshot of the video after verification is the value encoded by BASE64, jpg format. 
Note: This field may return "null", indicating that no valid value can be obtained. 
Example values: "/9j/4AAQSk... (total length:142036)s97n//2Q=="
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CompareFaceLivenessResponse extends AbstractModel
{
    /**
     * @var string Business Error Codes.
-When the return value is "Success", it indicates that liveness detection and face comparison passed. Determined to be the same person.
-When the return value is "FailedOperation.CompareLowSimilarity", it indicates that liveness detection passed, but face comparison similarity is below 70. Determined not to be the same person.
-For other error cases, please refer to [Liveness Face Comparison (API only) Error Codes](https://www.tencentcloud.com/zh/document/product/1061/55390?lang=zh&pg=#97df7537-87fe-4266-87e9-02c816d41ee2)
     */
    public $Result;

    /**
     * @var string The service result description
     */
    public $Description;

    /**
     * @var float This value indicates the similarity of face comparison. Value range: 0.00-100.00.
- The false acceptance rate for a threshold of 70 is 0.1%, and for a threshold of 80, it is 0.01%.
- This value is valid when the Result parameter is "Success" or "FailedOperation.CompareLowSimilarity".
     */
    public $Sim;

    /**
     * @var string The best screenshot photo from the video after verification, encoded in BASE64, in jpg format.
The optimal screenshot of the video after verification is the value encoded by BASE64, jpg format. 
Note: This field may return "null", indicating that no valid value can be obtained. 
Example values: "/9j/4AAQSk... (total length:142036)s97n//2Q=="
     */
    public $BestFrameBase64;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Result Business Error Codes.
-When the return value is "Success", it indicates that liveness detection and face comparison passed. Determined to be the same person.
-When the return value is "FailedOperation.CompareLowSimilarity", it indicates that liveness detection passed, but face comparison similarity is below 70. Determined not to be the same person.
-For other error cases, please refer to [Liveness Face Comparison (API only) Error Codes](https://www.tencentcloud.com/zh/document/product/1061/55390?lang=zh&pg=#97df7537-87fe-4266-87e9-02c816d41ee2)
     * @param string $Description The service result description
     * @param float $Sim This value indicates the similarity of face comparison. Value range: 0.00-100.00.
- The false acceptance rate for a threshold of 70 is 0.1%, and for a threshold of 80, it is 0.01%.
- This value is valid when the Result parameter is "Success" or "FailedOperation.CompareLowSimilarity".
     * @param string $BestFrameBase64 The best screenshot photo from the video after verification, encoded in BASE64, in jpg format.
The optimal screenshot of the video after verification is the value encoded by BASE64, jpg format. 
Note: This field may return "null", indicating that no valid value can be obtained. 
Example values: "/9j/4AAQSk... (total length:142036)s97n//2Q=="
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
