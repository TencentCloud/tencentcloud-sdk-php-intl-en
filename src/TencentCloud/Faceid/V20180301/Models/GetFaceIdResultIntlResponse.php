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
 * GetFaceIdResultIntl response structure.
 *
 * @method string getResult() Obtain The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Selfie verification comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
 * @method void setResult(string $Result) Set The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Selfie verification comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
 * @method string getDescription() Obtain The description of the verification result.
 * @method void setDescription(string $Description) Set The description of the verification result.
 * @method string getBestFrame() Obtain The best frame screenshot (in Base64) obtained during the verification.
 * @method void setBestFrame(string $BestFrame) Set The best frame screenshot (in Base64) obtained during the verification.
 * @method string getVideo() Obtain The video file (Base64) for verification.Used for verification, contains specific color reflection effects.
 * @method void setVideo(string $Video) Set The video file (Base64) for verification.Used for verification, contains specific color reflection effects.
 * @method string getActionVideo() Obtain Records the specific action performed by the user, used for AI Face Shield analysis.
 * @method void setActionVideo(string $ActionVideo) Set Records the specific action performed by the user, used for AI Face Shield analysis.
 * @method float getSimilarity() Obtain The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (selfie verification) mode.
Note: The Similarity metric is exclusively valid for "compare" mode. In "liveness" mode, the returned Similarity value (0.0) is non-significant and should be ignored.
 * @method void setSimilarity(float $Similarity) Set The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (selfie verification) mode.
Note: The Similarity metric is exclusively valid for "compare" mode. In "liveness" mode, the returned Similarity value (0.0) is non-significant and should be ignored.
 * @method string getExtra() Obtain The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtra(string $Extra) Set The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeviceInfoLevel() Obtain Describe the risk level of the device where the current request is located, with a total of 4 levels. The details are as follows:
1 - Secure
2 - Low Risk
3 - Medium Risk
4 - High Risk
Empty - Risk level not obtained.
Only returned for the Enhance and Plus version, with the default value being empty.
 * @method void setDeviceInfoLevel(string $DeviceInfoLevel) Set Describe the risk level of the device where the current request is located, with a total of 4 levels. The details are as follows:
1 - Secure
2 - Low Risk
3 - Medium Risk
4 - High Risk
Empty - Risk level not obtained.
Only returned for the Enhance and Plus version, with the default value being empty.
 * @method array getLivenessInfoTag() Obtain Describes the detailed reason for the current liveness detection failure. Output only when SdkVersion is PLUS. Details are as follows:
01 - User kept eyes closed throughout the process.
02 - User failed to complete the specified action.
03 - Suspected photo replay attack.
04 - Suspected synthetic image.
05 - Suspected synthetic video.
06 - Suspected synthetic action.
07 - Suspected fraud template.
08 - Suspected watermark existence.
09 - Light verification failed.
10 - Face verification failed.
11 - Poor face quality.
12 - Unqualified collection quality.
13 - Suspected adversarial sample attack.
 * @method void setLivenessInfoTag(array $LivenessInfoTag) Set Describes the detailed reason for the current liveness detection failure. Output only when SdkVersion is PLUS. Details are as follows:
01 - User kept eyes closed throughout the process.
02 - User failed to complete the specified action.
03 - Suspected photo replay attack.
04 - Suspected synthetic image.
05 - Suspected synthetic video.
06 - Suspected synthetic action.
07 - Suspected fraud template.
08 - Suspected watermark existence.
09 - Light verification failed.
10 - Face verification failed.
11 - Poor face quality.
12 - Unqualified collection quality.
13 - Suspected adversarial sample attack.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetFaceIdResultIntlResponse extends AbstractModel
{
    /**
     * @var string The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Selfie verification comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
     */
    public $Result;

    /**
     * @var string The description of the verification result.
     */
    public $Description;

    /**
     * @var string The best frame screenshot (in Base64) obtained during the verification.
     */
    public $BestFrame;

    /**
     * @var string The video file (Base64) for verification.Used for verification, contains specific color reflection effects.
     */
    public $Video;

    /**
     * @var string Records the specific action performed by the user, used for AI Face Shield analysis.
     */
    public $ActionVideo;

    /**
     * @var float The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (selfie verification) mode.
Note: The Similarity metric is exclusively valid for "compare" mode. In "liveness" mode, the returned Similarity value (0.0) is non-significant and should be ignored.
     */
    public $Similarity;

    /**
     * @var string The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extra;

    /**
     * @var string Describe the risk level of the device where the current request is located, with a total of 4 levels. The details are as follows:
1 - Secure
2 - Low Risk
3 - Medium Risk
4 - High Risk
Empty - Risk level not obtained.
Only returned for the Enhance and Plus version, with the default value being empty.
     */
    public $DeviceInfoLevel;

    /**
     * @var array Describes the detailed reason for the current liveness detection failure. Output only when SdkVersion is PLUS. Details are as follows:
01 - User kept eyes closed throughout the process.
02 - User failed to complete the specified action.
03 - Suspected photo replay attack.
04 - Suspected synthetic image.
05 - Suspected synthetic video.
06 - Suspected synthetic action.
07 - Suspected fraud template.
08 - Suspected watermark existence.
09 - Light verification failed.
10 - Face verification failed.
11 - Poor face quality.
12 - Unqualified collection quality.
13 - Suspected adversarial sample attack.
     */
    public $LivenessInfoTag;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Result The return code of the verification result.
0: Succeeded.
1001: System error.
1004: Selfie verification comparison failed.
2004: The image passed in is too large or too small.
2012: Several faces were detected.
2013: No face was detected, or the face detected was incomplete.
2014: The image resolution is too low or the quality does not meet the requirements.
2015: Face comparison failed.
2016: The similarity did not reach the standard passing threshold.
-999: The verification process wasn't finished.
     * @param string $Description The description of the verification result.
     * @param string $BestFrame The best frame screenshot (in Base64) obtained during the verification.
     * @param string $Video The video file (Base64) for verification.Used for verification, contains specific color reflection effects.
     * @param string $ActionVideo Records the specific action performed by the user, used for AI Face Shield analysis.
     * @param float $Similarity The similarity, with a value range of 0-100. A greater value indicates higher similarity. This parameter is returned only in the `compare` (selfie verification) mode.
Note: The Similarity metric is exclusively valid for "compare" mode. In "liveness" mode, the returned Similarity value (0.0) is non-significant and should be ignored.
     * @param string $Extra The pass-through parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeviceInfoLevel Describe the risk level of the device where the current request is located, with a total of 4 levels. The details are as follows:
1 - Secure
2 - Low Risk
3 - Medium Risk
4 - High Risk
Empty - Risk level not obtained.
Only returned for the Enhance and Plus version, with the default value being empty.
     * @param array $LivenessInfoTag Describes the detailed reason for the current liveness detection failure. Output only when SdkVersion is PLUS. Details are as follows:
01 - User kept eyes closed throughout the process.
02 - User failed to complete the specified action.
03 - Suspected photo replay attack.
04 - Suspected synthetic image.
05 - Suspected synthetic video.
06 - Suspected synthetic action.
07 - Suspected fraud template.
08 - Suspected watermark existence.
09 - Light verification failed.
10 - Face verification failed.
11 - Poor face quality.
12 - Unqualified collection quality.
13 - Suspected adversarial sample attack.
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

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = $param["BestFrame"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("ActionVideo",$param) and $param["ActionVideo"] !== null) {
            $this->ActionVideo = $param["ActionVideo"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("DeviceInfoLevel",$param) and $param["DeviceInfoLevel"] !== null) {
            $this->DeviceInfoLevel = $param["DeviceInfoLevel"];
        }

        if (array_key_exists("LivenessInfoTag",$param) and $param["LivenessInfoTag"] !== null) {
            $this->LivenessInfoTag = $param["LivenessInfoTag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
