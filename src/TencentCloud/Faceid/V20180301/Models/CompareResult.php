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
 * The description of a single comparison result.
 *
 * @method string getErrorCode() Obtain The final verification result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
 * @method void setErrorCode(string $ErrorCode) Set The final verification result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
 * @method string getErrorMsg() Obtain The description of the final verification result.
 * @method void setErrorMsg(string $ErrorMsg) Set The description of the final verification result.
 * @method FileInfo getLiveData() Obtain The liveness algorithm package generated during this SDK-based liveness detection.
 * @method void setLiveData(FileInfo $LiveData) Set The liveness algorithm package generated during this SDK-based liveness detection.
 * @method FileInfo getLiveVideo() Obtain The download URL of the video used for verification, which is valid for 10 minutes.
 * @method void setLiveVideo(FileInfo $LiveVideo) Set The download URL of the video used for verification, which is valid for 10 minutes.
 * @method string getLiveErrorCode() Obtain The liveness detection result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
 * @method void setLiveErrorCode(string $LiveErrorCode) Set The liveness detection result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
 * @method string getLiveErrorMsg() Obtain The description of the liveness detection result.
 * @method void setLiveErrorMsg(string $LiveErrorMsg) Set The description of the liveness detection result.
 * @method FileInfo getBestFrame() Obtain The download URL of the face screenshot during verification, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBestFrame(FileInfo $BestFrame) Set The download URL of the face screenshot during verification, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method FileInfo getProfileImage() Obtain The download URL of the profile photo screenshot from the identity document, which is valid for 10 minutes.
 * @method void setProfileImage(FileInfo $ProfileImage) Set The download URL of the profile photo screenshot from the identity document, which is valid for 10 minutes.
 * @method string getCompareErrorCode() Obtain The face comparison result code.
0: Success.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareErrorCode(string $CompareErrorCode) Set The face comparison result code.
0: Success.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCompareErrorMsg() Obtain The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareErrorMsg(string $CompareErrorMsg) Set The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSim() Obtain The similarity score of face comparison.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSim(float $Sim) Set The similarity score of face comparison.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsNeedCharge() Obtain This parameter is disused.
 * @method void setIsNeedCharge(boolean $IsNeedCharge) Set This parameter is disused.
 * @method FileInfo getCardInfoInputJson() Obtain The identity document photo info edited by the user. Currently, this parameter is not applied.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardInfoInputJson(FileInfo $CardInfoInputJson) Set The identity document photo info edited by the user. Currently, this parameter is not applied.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The request ID of this verification process.
 * @method void setRequestId(string $RequestId) Set The request ID of this verification process.
 */
class CompareResult extends AbstractModel
{
    /**
     * @var string The final verification result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
     */
    public $ErrorCode;

    /**
     * @var string The description of the final verification result.
     */
    public $ErrorMsg;

    /**
     * @var FileInfo The liveness algorithm package generated during this SDK-based liveness detection.
     */
    public $LiveData;

    /**
     * @var FileInfo The download URL of the video used for verification, which is valid for 10 minutes.
     */
    public $LiveVideo;

    /**
     * @var string The liveness detection result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
     */
    public $LiveErrorCode;

    /**
     * @var string The description of the liveness detection result.
     */
    public $LiveErrorMsg;

    /**
     * @var FileInfo The download URL of the face screenshot during verification, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BestFrame;

    /**
     * @var FileInfo The download URL of the profile photo screenshot from the identity document, which is valid for 10 minutes.
     */
    public $ProfileImage;

    /**
     * @var string The face comparison result code.
0: Success.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareErrorCode;

    /**
     * @var string The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareErrorMsg;

    /**
     * @var float The similarity score of face comparison.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sim;

    /**
     * @var boolean This parameter is disused.
     */
    public $IsNeedCharge;

    /**
     * @var FileInfo The identity document photo info edited by the user. Currently, this parameter is not applied.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardInfoInputJson;

    /**
     * @var string The request ID of this verification process.
     */
    public $RequestId;

    /**
     * @param string $ErrorCode The final verification result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
     * @param string $ErrorMsg The description of the final verification result.
     * @param FileInfo $LiveData The liveness algorithm package generated during this SDK-based liveness detection.
     * @param FileInfo $LiveVideo The download URL of the video used for verification, which is valid for 10 minutes.
     * @param string $LiveErrorCode The liveness detection result code.
0: Success.
1001: Failed to call the liveness detection engine.
1004: Face detection failed.
     * @param string $LiveErrorMsg The description of the liveness detection result.
     * @param FileInfo $BestFrame The download URL of the face screenshot during verification, which is valid for 10 minutes.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param FileInfo $ProfileImage The download URL of the profile photo screenshot from the identity document, which is valid for 10 minutes.
     * @param string $CompareErrorCode The face comparison result code.
0: Success.
2004: The uploaded face image is too large or too small.
2012: The face is not fully exposed.
2013: No face is detected.
2014: The resolution of the uploaded image is too low . Please upload a new one.
2015: Face comparison failed.
2016: The similarity did not reach the passing standard.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CompareErrorMsg The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Sim The similarity score of face comparison.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsNeedCharge This parameter is disused.
     * @param FileInfo $CardInfoInputJson The identity document photo info edited by the user. Currently, this parameter is not applied.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The request ID of this verification process.
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

        if (array_key_exists("LiveData",$param) and $param["LiveData"] !== null) {
            $this->LiveData = new FileInfo();
            $this->LiveData->deserialize($param["LiveData"]);
        }

        if (array_key_exists("LiveVideo",$param) and $param["LiveVideo"] !== null) {
            $this->LiveVideo = new FileInfo();
            $this->LiveVideo->deserialize($param["LiveVideo"]);
        }

        if (array_key_exists("LiveErrorCode",$param) and $param["LiveErrorCode"] !== null) {
            $this->LiveErrorCode = $param["LiveErrorCode"];
        }

        if (array_key_exists("LiveErrorMsg",$param) and $param["LiveErrorMsg"] !== null) {
            $this->LiveErrorMsg = $param["LiveErrorMsg"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new FileInfo();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("ProfileImage",$param) and $param["ProfileImage"] !== null) {
            $this->ProfileImage = new FileInfo();
            $this->ProfileImage->deserialize($param["ProfileImage"]);
        }

        if (array_key_exists("CompareErrorCode",$param) and $param["CompareErrorCode"] !== null) {
            $this->CompareErrorCode = $param["CompareErrorCode"];
        }

        if (array_key_exists("CompareErrorMsg",$param) and $param["CompareErrorMsg"] !== null) {
            $this->CompareErrorMsg = $param["CompareErrorMsg"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("IsNeedCharge",$param) and $param["IsNeedCharge"] !== null) {
            $this->IsNeedCharge = $param["IsNeedCharge"];
        }

        if (array_key_exists("CardInfoInputJson",$param) and $param["CardInfoInputJson"] !== null) {
            $this->CardInfoInputJson = new FileInfo();
            $this->CardInfoInputJson->deserialize($param["CardInfoInputJson"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
