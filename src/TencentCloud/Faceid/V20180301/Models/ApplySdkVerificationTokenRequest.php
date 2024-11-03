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
 * @method string getIdCardType() Obtain The identity document type. Valid values: 
1. HK (default): Identity card of Hong Kong (China)
2. ML: Malaysian identity card
3. IndonesiaIDCard: Indonesian identity card
4. PhilippinesVoteID: Philippine voters ID card
5. PhilippinesDrivingLicense: Philippine driver's license
6. PhilippinesTinID: Philippine TIN ID card
7. PhilippinesSSSID: Philippine SSS ID card
8. PhilippinesUMID: Philippine UMID card
9. MLIDPassport: Passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions
10..MacaoIDCard: Macao ID Card
11.ThailandIDCard: Thailand ID Card
12.MainlandIDCard: Mainland ID Card
13.SingaporeIDCard: Singapore ID Card
14.JapanIDCard: Japan ID Card
15.MLDrivingLicense: Malaysian Driving License
16.IndonesiaDrivingLicense: Indonesia Driving License
17.ThailandDrivingLicense: Thailand Driving License
18.SingaporeDrivingLicense: Singapore Driving License
19.JapanDrivingLicense: Japan Driving License
20.TaiWanIDCard:Taiwan ID Card
21.HMTPermit: exit/entry permit (card) for traveling to and from Hong Kong, Macao, or Taiwan
 * @method void setIdCardType(string $IdCardType) Set The identity document type. Valid values: 
1. HK (default): Identity card of Hong Kong (China)
2. ML: Malaysian identity card
3. IndonesiaIDCard: Indonesian identity card
4. PhilippinesVoteID: Philippine voters ID card
5. PhilippinesDrivingLicense: Philippine driver's license
6. PhilippinesTinID: Philippine TIN ID card
7. PhilippinesSSSID: Philippine SSS ID card
8. PhilippinesUMID: Philippine UMID card
9. MLIDPassport: Passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions
10..MacaoIDCard: Macao ID Card
11.ThailandIDCard: Thailand ID Card
12.MainlandIDCard: Mainland ID Card
13.SingaporeIDCard: Singapore ID Card
14.JapanIDCard: Japan ID Card
15.MLDrivingLicense: Malaysian Driving License
16.IndonesiaDrivingLicense: Indonesia Driving License
17.ThailandDrivingLicense: Thailand Driving License
18.SingaporeDrivingLicense: Singapore Driving License
19.JapanDrivingLicense: Japan Driving License
20.TaiWanIDCard:Taiwan ID Card
21.HMTPermit: exit/entry permit (card) for traveling to and from Hong Kong, Macao, or Taiwan
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
     * @var string The identity document type. Valid values: 
1. HK (default): Identity card of Hong Kong (China)
2. ML: Malaysian identity card
3. IndonesiaIDCard: Indonesian identity card
4. PhilippinesVoteID: Philippine voters ID card
5. PhilippinesDrivingLicense: Philippine driver's license
6. PhilippinesTinID: Philippine TIN ID card
7. PhilippinesSSSID: Philippine SSS ID card
8. PhilippinesUMID: Philippine UMID card
9. MLIDPassport: Passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions
10..MacaoIDCard: Macao ID Card
11.ThailandIDCard: Thailand ID Card
12.MainlandIDCard: Mainland ID Card
13.SingaporeIDCard: Singapore ID Card
14.JapanIDCard: Japan ID Card
15.MLDrivingLicense: Malaysian Driving License
16.IndonesiaDrivingLicense: Indonesia Driving License
17.ThailandDrivingLicense: Thailand Driving License
18.SingaporeDrivingLicense: Singapore Driving License
19.JapanDrivingLicense: Japan Driving License
20.TaiWanIDCard:Taiwan ID Card
21.HMTPermit: exit/entry permit (card) for traveling to and from Hong Kong, Macao, or Taiwan
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
     * @param string $IdCardType The identity document type. Valid values: 
1. HK (default): Identity card of Hong Kong (China)
2. ML: Malaysian identity card
3. IndonesiaIDCard: Indonesian identity card
4. PhilippinesVoteID: Philippine voters ID card
5. PhilippinesDrivingLicense: Philippine driver's license
6. PhilippinesTinID: Philippine TIN ID card
7. PhilippinesSSSID: Philippine SSS ID card
8. PhilippinesUMID: Philippine UMID card
9. MLIDPassport: Passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions
10..MacaoIDCard: Macao ID Card
11.ThailandIDCard: Thailand ID Card
12.MainlandIDCard: Mainland ID Card
13.SingaporeIDCard: Singapore ID Card
14.JapanIDCard: Japan ID Card
15.MLDrivingLicense: Malaysian Driving License
16.IndonesiaDrivingLicense: Indonesia Driving License
17.ThailandDrivingLicense: Thailand Driving License
18.SingaporeDrivingLicense: Singapore Driving License
19.JapanDrivingLicense: Japan Driving License
20.TaiWanIDCard:Taiwan ID Card
21.HMTPermit: exit/entry permit (card) for traveling to and from Hong Kong, Macao, or Taiwan
     * @param string $CompareImage The Base64-encoded value of the photo to compare, which is required only when `CheckMode` is set to `2`.
     * @param boolean $NeedVerifyIdCard Whether ID card authentication is required. If not, only document OCR will be performed. Currently, authentication is available only when the value of `IdCardType` is `HK`.
     * @param boolean $DisableChangeOcrResult Whether to forbid the modification of the OCR result by users. Default value: `false` (modification allowed). (Currently, this parameter is not applied.)
     * @param boolean $DisableCheckOcrWarnings Whether to disable the OCR warnings. Default value: `false` (not disable), where OCR warnings are enabled and the OCR result will not be returned if there is a warning.
This feature applies only to Hong Kong (China) identity cards, Malaysian identity cards, and passports.
     * @param string $Extra A passthrough field, which is returned together with the verification result and can contain up to 1,024 bits.
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

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }
    }
}
