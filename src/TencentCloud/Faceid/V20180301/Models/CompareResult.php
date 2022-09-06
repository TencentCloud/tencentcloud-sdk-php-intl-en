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
 * @method string getErrorCode() Obtain The final comparison result.
 * @method void setErrorCode(string $ErrorCode) Set The final comparison result.
 * @method string getErrorMsg() Obtain The description of the final comparison result.
 * @method void setErrorMsg(string $ErrorMsg) Set The description of the final comparison result.
 * @method FileInfo getLiveData() Obtain 
 * @method void setLiveData(FileInfo $LiveData) Set 
 * @method FileInfo getLiveVideo() Obtain The video for this liveness detection process. The URL is valid for 10 minutes.
 * @method void setLiveVideo(FileInfo $LiveVideo) Set The video for this liveness detection process. The URL is valid for 10 minutes.
 * @method string getLiveErrorCode() Obtain The code of the liveness detection result.
 * @method void setLiveErrorCode(string $LiveErrorCode) Set The code of the liveness detection result.
 * @method string getLiveErrorMsg() Obtain The description of the liveness detection result.
 * @method void setLiveErrorMsg(string $LiveErrorMsg) Set The description of the liveness detection result.
 * @method FileInfo getBestFrame() Obtain The best face screenshot in this liveness detection. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBestFrame(FileInfo $BestFrame) Set The best face screenshot in this liveness detection. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FileInfo getProfileImage() Obtain The profile photo screenshot from the identity document. The URL is valid for 10 minutes.
 * @method void setProfileImage(FileInfo $ProfileImage) Set The profile photo screenshot from the identity document. The URL is valid for 10 minutes.
 * @method string getCompareErrorCode() Obtain The code of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareErrorCode(string $CompareErrorCode) Set The code of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCompareErrorMsg() Obtain The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareErrorMsg(string $CompareErrorMsg) Set The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSim() Obtain Similarity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSim(float $Sim) Set Similarity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsNeedCharge() Obtain This field is disused.
 * @method void setIsNeedCharge(boolean $IsNeedCharge) Set This field is disused.
 * @method FileInfo getCardInfoInputJson() Obtain The identity document photo info edited by the user in JSON. If the value of `DisableChangeOcrResult` is `true`, the editing feature is disabled and this field does not exist. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string
- ID string
- Name string
- Address string
- Type string: Identity document type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCardInfoInputJson(FileInfo $CardInfoInputJson) Set The identity document photo info edited by the user in JSON. If the value of `DisableChangeOcrResult` is `true`, the editing feature is disabled and this field does not exist. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string
- ID string
- Name string
- Address string
- Type string: Identity document type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The request ID of this verification process.
 * @method void setRequestId(string $RequestId) Set The request ID of this verification process.
 */
class CompareResult extends AbstractModel
{
    /**
     * @var string The final comparison result.
     */
    public $ErrorCode;

    /**
     * @var string The description of the final comparison result.
     */
    public $ErrorMsg;

    /**
     * @var FileInfo 
     */
    public $LiveData;

    /**
     * @var FileInfo The video for this liveness detection process. The URL is valid for 10 minutes.
     */
    public $LiveVideo;

    /**
     * @var string The code of the liveness detection result.
     */
    public $LiveErrorCode;

    /**
     * @var string The description of the liveness detection result.
     */
    public $LiveErrorMsg;

    /**
     * @var FileInfo The best face screenshot in this liveness detection. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BestFrame;

    /**
     * @var FileInfo The profile photo screenshot from the identity document. The URL is valid for 10 minutes.
     */
    public $ProfileImage;

    /**
     * @var string The code of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareErrorCode;

    /**
     * @var string The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareErrorMsg;

    /**
     * @var float Similarity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sim;

    /**
     * @var boolean This field is disused.
     */
    public $IsNeedCharge;

    /**
     * @var FileInfo The identity document photo info edited by the user in JSON. If the value of `DisableChangeOcrResult` is `true`, the editing feature is disabled and this field does not exist. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string
- ID string
- Name string
- Address string
- Type string: Identity document type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CardInfoInputJson;

    /**
     * @var string The request ID of this verification process.
     */
    public $RequestId;

    /**
     * @param string $ErrorCode The final comparison result.
     * @param string $ErrorMsg The description of the final comparison result.
     * @param FileInfo $LiveData 
     * @param FileInfo $LiveVideo The video for this liveness detection process. The URL is valid for 10 minutes.
     * @param string $LiveErrorCode The code of the liveness detection result.
     * @param string $LiveErrorMsg The description of the liveness detection result.
     * @param FileInfo $BestFrame The best face screenshot in this liveness detection. The URL is valid for 10 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FileInfo $ProfileImage The profile photo screenshot from the identity document. The URL is valid for 10 minutes.
     * @param string $CompareErrorCode The code of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CompareErrorMsg The description of the face comparison result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Sim Similarity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsNeedCharge This field is disused.
     * @param FileInfo $CardInfoInputJson The identity document photo info edited by the user in JSON. If the value of `DisableChangeOcrResult` is `true`, the editing feature is disabled and this field does not exist. The URL is valid for 10 minutes.
When the value of `IdCardType` is `HK`:
- CnName string: Chinese name
- EnName string: English name
- TelexCode string: The code corresponding to the Chinese name
- Sex string: Gender. Valid values: `M` (male) and `F` (female).
- Birthday string: Date of birth.
- Permanent int: Whether it is a permanent residence identity card. Valid values: `0` (non-permanent), `1` (permanent), and `-1` (unknown).
- IdNum string: ID number.
- Symbol string: The ID symbol below the date of birth, such as "***AZ".
- FirstIssueDate string: The date of first issuance.
- CurrentIssueDate string: The date of latest issuance.

When the value of `IdCardType` is `ML`:
- Sex string: `LELAKI` (male) and `PEREMPUAN` (female).
- Birthday string
- ID string
- Name string
- Address string
- Type string: Identity document type.
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
