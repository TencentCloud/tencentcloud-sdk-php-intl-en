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
 * ApplySdkVerificationToken request structure.
 *
 * @method integer getCheckMode() Obtain The verification mode. Valid values:
1: OCR + liveness detection + face comparison
2: Liveness detection + face comparison
3: Liveness detection
Default value: 1
 * @method void setCheckMode(integer $CheckMode) Set The verification mode. Valid values:
1: OCR + liveness detection + face comparison
2: Liveness detection + face comparison
3: Liveness detection
Default value: 1
 * @method integer getSecurityLevel() Obtain The security level of the verification. Valid values:
1: Video-based liveness detection
2: Motion-based liveness detection
3: Reflection-based liveness detection
4: Motion- and reflection-based liveness detection
Default value: 4
 * @method void setSecurityLevel(integer $SecurityLevel) Set The security level of the verification. Valid values:
1: Video-based liveness detection
2: Motion-based liveness detection
3: Reflection-based liveness detection
4: Motion- and reflection-based liveness detection
Default value: 4
 * @method string getIdCardType() Obtain Specifies the identity document type used for authentication. valid values:.  

HK (default): hong kong (china) identity card.
2. ML: malaysian identity card.
Indonesian identity card.
4. PhilippinesVoteID: specifies the voter card in the philippines.
5. PhilippinesDrivingLicense: specifies the driving license in philippines.
6. PhilippinesTinID: specifies the philippines tin id.
7. PhilippinesSSSID: specifies the SSSID in the philippines.
8. philippines UMID: specifies the philippines UMID.
9. MLIDPassport: specifies the passport for hong kong (china), macao (china), and taiwan (china) as well as overseas passports.
ThailandIDCard: specifies the thai identity card.
Mainland id card.
12. SingaporeIDCard: specifies the Singapore id card.
13. HMTPermit: specifies the hong kong, macau and taiwan travel permit.
 * @method void setIdCardType(string $IdCardType) Set Specifies the identity document type used for authentication. valid values:.  

HK (default): hong kong (china) identity card.
2. ML: malaysian identity card.
Indonesian identity card.
4. PhilippinesVoteID: specifies the voter card in the philippines.
5. PhilippinesDrivingLicense: specifies the driving license in philippines.
6. PhilippinesTinID: specifies the philippines tin id.
7. PhilippinesSSSID: specifies the SSSID in the philippines.
8. philippines UMID: specifies the philippines UMID.
9. MLIDPassport: specifies the passport for hong kong (china), macao (china), and taiwan (china) as well as overseas passports.
ThailandIDCard: specifies the thai identity card.
Mainland id card.
12. SingaporeIDCard: specifies the Singapore id card.
13. HMTPermit: specifies the hong kong, macau and taiwan travel permit.
 * @method string getCompareImage() Obtain The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
 * @method void setCompareImage(string $CompareImage) Set The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
 * @method boolean getNeedVerifyIdCard() Obtain Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
 * @method void setNeedVerifyIdCard(boolean $NeedVerifyIdCard) Set Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
 * @method boolean getDisableChangeOcrResult() Obtain Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
 * @method void setDisableChangeOcrResult(boolean $DisableChangeOcrResult) Set Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
 * @method boolean getDisableCheckOcrWarnings() Obtain Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
 * @method array getSelectedWarningCodes() Obtain Customize which alarm codes to block. If left blank, all alarm codes will be blocked by default.
Optional alarm codes are: -9101 (occlusion or incomplete border), -9102 (photocopying), -9103 (screen capture by camera), -9104 (image editing/PS modification), -9107 (glare/reflection), -9108 (blurriness), -9901 (other alarms).
 * @method void setSelectedWarningCodes(array $SelectedWarningCodes) Set Customize which alarm codes to block. If left blank, all alarm codes will be blocked by default.
Optional alarm codes are: -9101 (occlusion or incomplete border), -9102 (photocopying), -9103 (screen capture by camera), -9104 (image editing/PS modification), -9107 (glare/reflection), -9108 (blurriness), -9901 (other alarms).
 * @method string getExtra() Obtain A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 * @method void setExtra(string $Extra) Set A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 * @method string getSdkVersion() Obtain PLUS: Plus Version.
ENHANCED: Enhanced Version.
BASIC: Basic Version (default).
 * @method void setSdkVersion(string $SdkVersion) Set PLUS: Plus Version.
ENHANCED: Enhanced Version.
BASIC: Basic Version (default).
 * @method string getActionList() Obtain This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
 * @method void setActionList(string $ActionList) Set This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
 * @method boolean getAllowExpiredDocument() Obtain Whether expired identity documents are permitted to proceed to the liveness detection process. This parameter only takes effect when the document type is Hong Kong Identity Card (HKID).
true (default value): Expired HKID is allowed to enter the liveness process.
false : Expired HKID is rejected and cannot enter the liveness process.
 * @method void setAllowExpiredDocument(boolean $AllowExpiredDocument) Set Whether expired identity documents are permitted to proceed to the liveness detection process. This parameter only takes effect when the document type is Hong Kong Identity Card (HKID).
true (default value): Expired HKID is allowed to enter the liveness process.
false : Expired HKID is rejected and cannot enter the liveness process.
 */
class ApplySdkVerificationTokenRequest extends AbstractModel
{
    /**
     * @var integer The verification mode. Valid values:
1: OCR + liveness detection + face comparison
2: Liveness detection + face comparison
3: Liveness detection
Default value: 1
     */
    public $CheckMode;

    /**
     * @var integer The security level of the verification. Valid values:
1: Video-based liveness detection
2: Motion-based liveness detection
3: Reflection-based liveness detection
4: Motion- and reflection-based liveness detection
Default value: 4
     */
    public $SecurityLevel;

    /**
     * @var string Specifies the identity document type used for authentication. valid values:.  

HK (default): hong kong (china) identity card.
2. ML: malaysian identity card.
Indonesian identity card.
4. PhilippinesVoteID: specifies the voter card in the philippines.
5. PhilippinesDrivingLicense: specifies the driving license in philippines.
6. PhilippinesTinID: specifies the philippines tin id.
7. PhilippinesSSSID: specifies the SSSID in the philippines.
8. philippines UMID: specifies the philippines UMID.
9. MLIDPassport: specifies the passport for hong kong (china), macao (china), and taiwan (china) as well as overseas passports.
ThailandIDCard: specifies the thai identity card.
Mainland id card.
12. SingaporeIDCard: specifies the Singapore id card.
13. HMTPermit: specifies the hong kong, macau and taiwan travel permit.
     */
    public $IdCardType;

    /**
     * @var string The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
     */
    public $CompareImage;

    /**
     * @var boolean Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     * @deprecated
     */
    public $NeedVerifyIdCard;

    /**
     * @var boolean Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
     */
    public $DisableChangeOcrResult;

    /**
     * @var boolean Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var array Customize which alarm codes to block. If left blank, all alarm codes will be blocked by default.
Optional alarm codes are: -9101 (occlusion or incomplete border), -9102 (photocopying), -9103 (screen capture by camera), -9104 (image editing/PS modification), -9107 (glare/reflection), -9108 (blurriness), -9901 (other alarms).
     */
    public $SelectedWarningCodes;

    /**
     * @var string A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
     */
    public $Extra;

    /**
     * @var string PLUS: Plus Version.
ENHANCED: Enhanced Version.
BASIC: Basic Version (default).
     */
    public $SdkVersion;

    /**
     * @var string This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
     */
    public $ActionList;

    /**
     * @var boolean Whether expired identity documents are permitted to proceed to the liveness detection process. This parameter only takes effect when the document type is Hong Kong Identity Card (HKID).
true (default value): Expired HKID is allowed to enter the liveness process.
false : Expired HKID is rejected and cannot enter the liveness process.
     */
    public $AllowExpiredDocument;

    /**
     * @param integer $CheckMode The verification mode. Valid values:
1: OCR + liveness detection + face comparison
2: Liveness detection + face comparison
3: Liveness detection
Default value: 1
     * @param integer $SecurityLevel The security level of the verification. Valid values:
1: Video-based liveness detection
2: Motion-based liveness detection
3: Reflection-based liveness detection
4: Motion- and reflection-based liveness detection
Default value: 4
     * @param string $IdCardType Specifies the identity document type used for authentication. valid values:.  

HK (default): hong kong (china) identity card.
2. ML: malaysian identity card.
Indonesian identity card.
4. PhilippinesVoteID: specifies the voter card in the philippines.
5. PhilippinesDrivingLicense: specifies the driving license in philippines.
6. PhilippinesTinID: specifies the philippines tin id.
7. PhilippinesSSSID: specifies the SSSID in the philippines.
8. philippines UMID: specifies the philippines UMID.
9. MLIDPassport: specifies the passport for hong kong (china), macao (china), and taiwan (china) as well as overseas passports.
ThailandIDCard: specifies the thai identity card.
Mainland id card.
12. SingaporeIDCard: specifies the Singapore id card.
13. HMTPermit: specifies the hong kong, macau and taiwan travel permit.
     * @param string $CompareImage The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
     * @param boolean $NeedVerifyIdCard Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     * @param boolean $DisableChangeOcrResult Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
     * @param boolean $DisableCheckOcrWarnings Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
     * @param array $SelectedWarningCodes Customize which alarm codes to block. If left blank, all alarm codes will be blocked by default.
Optional alarm codes are: -9101 (occlusion or incomplete border), -9102 (photocopying), -9103 (screen capture by camera), -9104 (image editing/PS modification), -9107 (glare/reflection), -9108 (blurriness), -9901 (other alarms).
     * @param string $Extra A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
     * @param string $SdkVersion PLUS: Plus Version.
ENHANCED: Enhanced Version.
BASIC: Basic Version (default).
     * @param string $ActionList This interface is used to control th action sequences.
Action types are as follows:
"blink"
"mouth"
"nod"
"shake"
You can choose 1-2 actions out of the four.
Single action example: "blink"
Multiple action example: "blink,mouth"
The default value is blink. The different action types passed in this parameter take effect only when the SecurityLevel is 2 or 4; otherwise, the interface reports an error.
     * @param boolean $AllowExpiredDocument Whether expired identity documents are permitted to proceed to the liveness detection process. This parameter only takes effect when the document type is Hong Kong Identity Card (HKID).
true (default value): Expired HKID is allowed to enter the liveness process.
false : Expired HKID is rejected and cannot enter the liveness process.
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
        if (array_key_exists("CheckMode",$param) and $param["CheckMode"] !== null) {
            $this->CheckMode = $param["CheckMode"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("CompareImage",$param) and $param["CompareImage"] !== null) {
            $this->CompareImage = $param["CompareImage"];
        }

        if (array_key_exists("NeedVerifyIdCard",$param) and $param["NeedVerifyIdCard"] !== null) {
            $this->NeedVerifyIdCard = $param["NeedVerifyIdCard"];
        }

        if (array_key_exists("DisableChangeOcrResult",$param) and $param["DisableChangeOcrResult"] !== null) {
            $this->DisableChangeOcrResult = $param["DisableChangeOcrResult"];
        }

        if (array_key_exists("DisableCheckOcrWarnings",$param) and $param["DisableCheckOcrWarnings"] !== null) {
            $this->DisableCheckOcrWarnings = $param["DisableCheckOcrWarnings"];
        }

        if (array_key_exists("SelectedWarningCodes",$param) and $param["SelectedWarningCodes"] !== null) {
            $this->SelectedWarningCodes = $param["SelectedWarningCodes"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }

        if (array_key_exists("AllowExpiredDocument",$param) and $param["AllowExpiredDocument"] !== null) {
            $this->AllowExpiredDocument = $param["AllowExpiredDocument"];
        }
    }
}
