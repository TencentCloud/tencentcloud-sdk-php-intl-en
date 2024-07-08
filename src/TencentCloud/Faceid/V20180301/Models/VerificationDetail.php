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
 * The details of the verification process.
 *
 * @method integer getErrorCode() Obtain The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorCode(integer $ErrorCode) Set The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMsg() Obtain The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLivenessErrorCode() Obtain The result of this liveness detection process. `0` indicates success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLivenessErrorCode(integer $LivenessErrorCode) Set The result of this liveness detection process. `0` indicates success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLivenessErrorMsg() Obtain The result description of this liveness detection process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLivenessErrorMsg(string $LivenessErrorMsg) Set The result description of this liveness detection process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompareErrorCode() Obtain The result of this comparison process. `0` indicates that the person in the best face screenshot collected from the video stream is the same as that in the uploaded image for comparison.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareErrorCode(integer $CompareErrorCode) Set The result of this comparison process. `0` indicates that the person in the best face screenshot collected from the video stream is the same as that in the uploaded image for comparison.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCompareErrorMsg() Obtain The result description of this comparison process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareErrorMsg(string $CompareErrorMsg) Set The result description of this comparison process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReqTimestamp() Obtain The timestamp (ms) of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReqTimestamp(integer $ReqTimestamp) Set The timestamp (ms) of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSimilarity() Obtain The similarity of the best face screenshot collected from the video stream and the uploaded image for comparison in this verification process. Value range: [0.00, 100.00]. By default, the person in the screenshot is determined to be the same person in the image if the similarity is greater than or equal to 70.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSimilarity(float $Similarity) Set The similarity of the best face screenshot collected from the video stream and the uploaded image for comparison in this verification process. Value range: [0.00, 100.00]. By default, the person in the screenshot is determined to be the same person in the image if the similarity is greater than or equal to 70.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSeq() Obtain Unique ID of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeq(string $Seq) Set Unique ID of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VerificationDetail extends AbstractModel
{
    /**
     * @var integer The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCode;

    /**
     * @var string The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var integer The result of this liveness detection process. `0` indicates success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LivenessErrorCode;

    /**
     * @var string The result description of this liveness detection process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LivenessErrorMsg;

    /**
     * @var integer The result of this comparison process. `0` indicates that the person in the best face screenshot collected from the video stream is the same as that in the uploaded image for comparison.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareErrorCode;

    /**
     * @var string The result description of this comparison process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareErrorMsg;

    /**
     * @var integer The timestamp (ms) of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReqTimestamp;

    /**
     * @var float The similarity of the best face screenshot collected from the video stream and the uploaded image for comparison in this verification process. Value range: [0.00, 100.00]. By default, the person in the screenshot is determined to be the same person in the image if the similarity is greater than or equal to 70.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Similarity;

    /**
     * @var string Unique ID of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Seq;

    /**
     * @param integer $ErrorCode The final result of this verification. `0` indicates that the person is the same as that in the photo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMsg The description of the final verification result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LivenessErrorCode The result of this liveness detection process. `0` indicates success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LivenessErrorMsg The result description of this liveness detection process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompareErrorCode The result of this comparison process. `0` indicates that the person in the best face screenshot collected from the video stream is the same as that in the uploaded image for comparison.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CompareErrorMsg The result description of this comparison process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReqTimestamp The timestamp (ms) of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Similarity The similarity of the best face screenshot collected from the video stream and the uploaded image for comparison in this verification process. Value range: [0.00, 100.00]. By default, the person in the screenshot is determined to be the same person in the image if the similarity is greater than or equal to 70.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Seq Unique ID of this verification process.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("LivenessErrorCode",$param) and $param["LivenessErrorCode"] !== null) {
            $this->LivenessErrorCode = $param["LivenessErrorCode"];
        }

        if (array_key_exists("LivenessErrorMsg",$param) and $param["LivenessErrorMsg"] !== null) {
            $this->LivenessErrorMsg = $param["LivenessErrorMsg"];
        }

        if (array_key_exists("CompareErrorCode",$param) and $param["CompareErrorCode"] !== null) {
            $this->CompareErrorCode = $param["CompareErrorCode"];
        }

        if (array_key_exists("CompareErrorMsg",$param) and $param["CompareErrorMsg"] !== null) {
            $this->CompareErrorMsg = $param["CompareErrorMsg"];
        }

        if (array_key_exists("ReqTimestamp",$param) and $param["ReqTimestamp"] !== null) {
            $this->ReqTimestamp = $param["ReqTimestamp"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }
    }
}
