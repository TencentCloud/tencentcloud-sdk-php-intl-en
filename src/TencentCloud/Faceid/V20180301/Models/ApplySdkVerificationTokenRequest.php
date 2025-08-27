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
 * @method string getIdCardType() Obtain Card Types Supported for Authentication: Currently supported types are as follows:
1.HK (Default): Hong Kong (China) Identity Card
2.ML: Malaysia Identity Card
3.IndonesiaIDCard: Indonesia Identity Card
4.PhilippinesVoteID: Philippines Voter ID
5.PhilippinesDrivingLicense: Philippines Driving License
6.PhilippinesTinID: Philippines Tin ID
7.PhilippinesSSSID: Philippines SSS ID
8.PhilippinesUMID: Philippines UMID
9.MLIDPassport: Passports of Hong Kong, Macao, Taiwan Regions (China) and Foreign Countries
10.ThailandIDCard: Thailand Identity Card
11.MainlandIDCard: Mainland China Identity Card
12.SingaporeIDCard: Singapore Identity Card
13.HMTPermit: Exit-Entry Permit for Travel to and from Hong Kong, Macao and Taiwan (China)
 * @method void setIdCardType(string $IdCardType) Set Card Types Supported for Authentication: Currently supported types are as follows:
1.HK (Default): Hong Kong (China) Identity Card
2.ML: Malaysia Identity Card
3.IndonesiaIDCard: Indonesia Identity Card
4.PhilippinesVoteID: Philippines Voter ID
5.PhilippinesDrivingLicense: Philippines Driving License
6.PhilippinesTinID: Philippines Tin ID
7.PhilippinesSSSID: Philippines SSS ID
8.PhilippinesUMID: Philippines UMID
9.MLIDPassport: Passports of Hong Kong, Macao, Taiwan Regions (China) and Foreign Countries
10.ThailandIDCard: Thailand Identity Card
11.MainlandIDCard: Mainland China Identity Card
12.SingaporeIDCard: Singapore Identity Card
13.HMTPermit: Exit-Entry Permit for Travel to and from Hong Kong, Macao and Taiwan (China)
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
 * @method string getExtra() Obtain A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 * @method void setExtra(string $Extra) Set A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
 * @method string getSdkVersion() Obtain ENHANCED: Enhanced Version, BASIC: Basic Version (Default)
 * @method void setSdkVersion(string $SdkVersion) Set ENHANCED: Enhanced Version, BASIC: Basic Version (Default)
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
     * @var string Card Types Supported for Authentication: Currently supported types are as follows:
1.HK (Default): Hong Kong (China) Identity Card
2.ML: Malaysia Identity Card
3.IndonesiaIDCard: Indonesia Identity Card
4.PhilippinesVoteID: Philippines Voter ID
5.PhilippinesDrivingLicense: Philippines Driving License
6.PhilippinesTinID: Philippines Tin ID
7.PhilippinesSSSID: Philippines SSS ID
8.PhilippinesUMID: Philippines UMID
9.MLIDPassport: Passports of Hong Kong, Macao, Taiwan Regions (China) and Foreign Countries
10.ThailandIDCard: Thailand Identity Card
11.MainlandIDCard: Mainland China Identity Card
12.SingaporeIDCard: Singapore Identity Card
13.HMTPermit: Exit-Entry Permit for Travel to and from Hong Kong, Macao and Taiwan (China)
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
     * @var string A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
     */
    public $Extra;

    /**
     * @var string ENHANCED: Enhanced Version, BASIC: Basic Version (Default)
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
     * @param string $IdCardType Card Types Supported for Authentication: Currently supported types are as follows:
1.HK (Default): Hong Kong (China) Identity Card
2.ML: Malaysia Identity Card
3.IndonesiaIDCard: Indonesia Identity Card
4.PhilippinesVoteID: Philippines Voter ID
5.PhilippinesDrivingLicense: Philippines Driving License
6.PhilippinesTinID: Philippines Tin ID
7.PhilippinesSSSID: Philippines SSS ID
8.PhilippinesUMID: Philippines UMID
9.MLIDPassport: Passports of Hong Kong, Macao, Taiwan Regions (China) and Foreign Countries
10.ThailandIDCard: Thailand Identity Card
11.MainlandIDCard: Mainland China Identity Card
12.SingaporeIDCard: Singapore Identity Card
13.HMTPermit: Exit-Entry Permit for Travel to and from Hong Kong, Macao and Taiwan (China)
     * @param string $CompareImage The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
     * @param boolean $NeedVerifyIdCard Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     * @param boolean $DisableChangeOcrResult Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
     * @param boolean $DisableCheckOcrWarnings Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
     * @param string $Extra A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
     * @param string $SdkVersion ENHANCED: Enhanced Version, BASIC: Basic Version (Default)
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

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }
    }
}
