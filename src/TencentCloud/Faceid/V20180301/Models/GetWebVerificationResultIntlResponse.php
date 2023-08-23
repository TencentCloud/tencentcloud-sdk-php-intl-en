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
 * GetWebVerificationResultIntl response structure.
 *
 * @method integer getErrorCode() Obtain The final result of this verification. `0` indicates that the person is the same as that in the photo.
For other error codes, see <a href="https://www.tencentcloud.com/document/product/1061/55390?lang=en&pg=#8a960e1e-39c0-42cb-b181-b3164d77f81e">Liveness Detection and Face Comparison (Mobile HTML5) Error Codes</a>
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCode(integer $ErrorCode) Set The final result of this verification. `0` indicates that the person is the same as that in the photo.
For other error codes, see <a href="https://www.tencentcloud.com/document/product/1061/55390?lang=en&pg=#8a960e1e-39c0-42cb-b181-b3164d77f81e">Liveness Detection and Face Comparison (Mobile HTML5) Error Codes</a>
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain The description of the final verification result.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set The description of the final verification result.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method array getVerificationDetailList() Obtain The detailed verification result list of this process. Retries are allowed, so a verification process may have several entries of results.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setVerificationDetailList(array $VerificationDetailList) Set The detailed verification result list of this process. Retries are allowed, so a verification process may have several entries of results.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getVideoBase64() Obtain The Base64-encoded string of the video collected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no video is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setVideoBase64(string $VideoBase64) Set The Base64-encoded string of the video collected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no video is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getBestFrameBase64() Obtain The Base64-encoded string of the best face screenshot u200dcollected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no best face screenshot is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setBestFrameBase64(string $BestFrameBase64) Set The Base64-encoded string of the best face screenshot u200dcollected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no best face screenshot is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetWebVerificationResultIntlResponse extends AbstractModel
{
    /**
     * @var integer The final result of this verification. `0` indicates that the person is the same as that in the photo.
For other error codes, see <a href="https://www.tencentcloud.com/document/product/1061/55390?lang=en&pg=#8a960e1e-39c0-42cb-b181-b3164d77f81e">Liveness Detection and Face Comparison (Mobile HTML5) Error Codes</a>
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCode;

    /**
     * @var string The description of the final verification result.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var array The detailed verification result list of this process. Retries are allowed, so a verification process may have several entries of results.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $VerificationDetailList;

    /**
     * @var string The Base64-encoded string of the video collected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no video is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $VideoBase64;

    /**
     * @var string The Base64-encoded string of the best face screenshot u200dcollected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no best face screenshot is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $BestFrameBase64;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode The final result of this verification. `0` indicates that the person is the same as that in the photo.
For other error codes, see <a href="https://www.tencentcloud.com/document/product/1061/55390?lang=en&pg=#8a960e1e-39c0-42cb-b181-b3164d77f81e">Liveness Detection and Face Comparison (Mobile HTML5) Error Codes</a>
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg The description of the final verification result.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param array $VerificationDetailList The detailed verification result list of this process. Retries are allowed, so a verification process may have several entries of results.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $VideoBase64 The Base64-encoded string of the video collected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no video is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $BestFrameBase64 The Base64-encoded string of the best face screenshot u200dcollected from the video stream. Retries are allowed, and this field returns only the data collected in the last verification. If no best face screenshot is collected, null is returned.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("VerificationDetailList",$param) and $param["VerificationDetailList"] !== null) {
            $this->VerificationDetailList = [];
            foreach ($param["VerificationDetailList"] as $key => $value){
                $obj = new VerificationDetail();
                $obj->deserialize($value);
                array_push($this->VerificationDetailList, $obj);
            }
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}