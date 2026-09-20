<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Detailed process information for verification
 *
 * @method integer getErrorCode() Obtain Final result of this verification. 0 indicates that the verification is passed and the person is determined to be the same person.
 * @method void setErrorCode(integer $ErrorCode) Set Final result of this verification. 0 indicates that the verification is passed and the person is determined to be the same person.
 * @method string getErrorMsg() Obtain Final result description of this verification
 * @method void setErrorMsg(string $ErrorMsg) Set Final result description of this verification
 * @method integer getLivenessErrorCode() Obtain Liveness detection result of this verification. 0 indicates success.
 * @method void setLivenessErrorCode(integer $LivenessErrorCode) Set Liveness detection result of this verification. 0 indicates success.
 * @method string getLivenessErrorMsg() Obtain Description of the liveness detection result for this verification
 * @method void setLivenessErrorMsg(string $LivenessErrorMsg) Set Description of the liveness detection result for this verification
 * @method integer getCompareErrorCode() Obtain Result of this verification comparison. 0 indicates that the best face photo collected from the video stream and the uploaded image for comparison are determined to be the same person.
 * @method void setCompareErrorCode(integer $CompareErrorCode) Set Result of this verification comparison. 0 indicates that the best face photo collected from the video stream and the uploaded image for comparison are determined to be the same person.
 * @method string getCompareErrorMsg() Obtain Result description of this verification comparison
 * @method void setCompareErrorMsg(string $CompareErrorMsg) Set Result description of this verification comparison
 * @method integer getReqTimestamp() Obtain Verification timestamp (ms) this time
 * @method void setReqTimestamp(integer $ReqTimestamp) Set Verification timestamp (ms) this time
 * @method float getSimilarity() Obtain Similarity between the best face photo collected from the video stream in this verification and the uploaded image for comparison. Value range: [0.00, 100.00]. By default, the two are determined to be the same person when the similarity is at least 70.
 * @method void setSimilarity(float $Similarity) Set Similarity between the best face photo collected from the video stream in this verification and the uploaded image for comparison. Value range: [0.00, 100.00]. By default, the two are determined to be the same person when the similarity is at least 70.
 * @method string getSeq() Obtain Unique identifier for this verification
 * @method void setSeq(string $Seq) Set Unique identifier for this verification
 * @method array getLivenessInfoTag() Obtain Description of the detailed reason why the current request was rejected in the liveness phase. This parameter is returned only for the PLUS version of the eKYC service.
-Details as follows:
01-User eyes closed throughout
02 - User has not completed the specified action
03-Suspected rephotography attack
04-Suspected synthesis attack
05-Suspected fraud template
06-Suspected watermark
07-Reflection validation failed
08-Suspected midway change person
09: Poor face quality
10-distance check failed
11-Suspected adversarial sample attack
12-Mouth area suspected of attack traces
13-Eye area suspected to have attack traces
14-Eye or mouth covered
Note: This field may return null, indicating that no valid values can be obtained.
Example value: ["01"].
 * @method void setLivenessInfoTag(array $LivenessInfoTag) Set Description of the detailed reason why the current request was rejected in the liveness phase. This parameter is returned only for the PLUS version of the eKYC service.
-Details as follows:
01-User eyes closed throughout
02 - User has not completed the specified action
03-Suspected rephotography attack
04-Suspected synthesis attack
05-Suspected fraud template
06-Suspected watermark
07-Reflection validation failed
08-Suspected midway change person
09: Poor face quality
10-distance check failed
11-Suspected adversarial sample attack
12-Mouth area suspected of attack traces
13-Eye area suspected to have attack traces
14-Eye or mouth covered
Note: This field may return null, indicating that no valid values can be obtained.
Example value: ["01"].
 */
class VerificationDetail extends AbstractModel
{
    /**
     * @var integer Final result of this verification. 0 indicates that the verification is passed and the person is determined to be the same person.
     */
    public $ErrorCode;

    /**
     * @var string Final result description of this verification
     */
    public $ErrorMsg;

    /**
     * @var integer Liveness detection result of this verification. 0 indicates success.
     */
    public $LivenessErrorCode;

    /**
     * @var string Description of the liveness detection result for this verification
     */
    public $LivenessErrorMsg;

    /**
     * @var integer Result of this verification comparison. 0 indicates that the best face photo collected from the video stream and the uploaded image for comparison are determined to be the same person.
     */
    public $CompareErrorCode;

    /**
     * @var string Result description of this verification comparison
     */
    public $CompareErrorMsg;

    /**
     * @var integer Verification timestamp (ms) this time
     */
    public $ReqTimestamp;

    /**
     * @var float Similarity between the best face photo collected from the video stream in this verification and the uploaded image for comparison. Value range: [0.00, 100.00]. By default, the two are determined to be the same person when the similarity is at least 70.
     */
    public $Similarity;

    /**
     * @var string Unique identifier for this verification
     */
    public $Seq;

    /**
     * @var array Description of the detailed reason why the current request was rejected in the liveness phase. This parameter is returned only for the PLUS version of the eKYC service.
-Details as follows:
01-User eyes closed throughout
02 - User has not completed the specified action
03-Suspected rephotography attack
04-Suspected synthesis attack
05-Suspected fraud template
06-Suspected watermark
07-Reflection validation failed
08-Suspected midway change person
09: Poor face quality
10-distance check failed
11-Suspected adversarial sample attack
12-Mouth area suspected of attack traces
13-Eye area suspected to have attack traces
14-Eye or mouth covered
Note: This field may return null, indicating that no valid values can be obtained.
Example value: ["01"].
     */
    public $LivenessInfoTag;

    /**
     * @param integer $ErrorCode Final result of this verification. 0 indicates that the verification is passed and the person is determined to be the same person.
     * @param string $ErrorMsg Final result description of this verification
     * @param integer $LivenessErrorCode Liveness detection result of this verification. 0 indicates success.
     * @param string $LivenessErrorMsg Description of the liveness detection result for this verification
     * @param integer $CompareErrorCode Result of this verification comparison. 0 indicates that the best face photo collected from the video stream and the uploaded image for comparison are determined to be the same person.
     * @param string $CompareErrorMsg Result description of this verification comparison
     * @param integer $ReqTimestamp Verification timestamp (ms) this time
     * @param float $Similarity Similarity between the best face photo collected from the video stream in this verification and the uploaded image for comparison. Value range: [0.00, 100.00]. By default, the two are determined to be the same person when the similarity is at least 70.
     * @param string $Seq Unique identifier for this verification
     * @param array $LivenessInfoTag Description of the detailed reason why the current request was rejected in the liveness phase. This parameter is returned only for the PLUS version of the eKYC service.
-Details as follows:
01-User eyes closed throughout
02 - User has not completed the specified action
03-Suspected rephotography attack
04-Suspected synthesis attack
05-Suspected fraud template
06-Suspected watermark
07-Reflection validation failed
08-Suspected midway change person
09: Poor face quality
10-distance check failed
11-Suspected adversarial sample attack
12-Mouth area suspected of attack traces
13-Eye area suspected to have attack traces
14-Eye or mouth covered
Note: This field may return null, indicating that no valid values can be obtained.
Example value: ["01"].
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

        if (array_key_exists("LivenessInfoTag",$param) and $param["LivenessInfoTag"] !== null) {
            $this->LivenessInfoTag = $param["LivenessInfoTag"];
        }
    }
}
