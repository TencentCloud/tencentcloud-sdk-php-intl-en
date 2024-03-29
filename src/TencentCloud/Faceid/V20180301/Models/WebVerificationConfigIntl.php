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
 * eKYC Web related configuration
 *
 * @method boolean getAutoSkipStartPage() Obtain When starting verification, whether to skip the starting verification page. If true, enter the verification process directly. The default is false. This configuration will not take effect if the downgrade policy is triggered.
 * @method void setAutoSkipStartPage(boolean $AutoSkipStartPage) Set When starting verification, whether to skip the starting verification page. If true, enter the verification process directly. The default is false. This configuration will not take effect if the downgrade policy is triggered.
 * @method boolean getAutoSkip() Obtain When the verification passed, whether to skip the result page and automatically jump to RedirectURL. The default value is false.
Example value: false
 * @method void setAutoSkip(boolean $AutoSkip) Set When the verification passed, whether to skip the result page and automatically jump to RedirectURL. The default value is false.
Example value: false
 * @method integer getCheckMode() Obtain Detection mode, parameter values are as follows:
1: OCR+living detection & face comparison;
2: Living detection & face comparison;
3: Living detection;
The default value is 2.
Example value: 3
 * @method void setCheckMode(integer $CheckMode) Set Detection mode, parameter values are as follows:
1: OCR+living detection & face comparison;
2: Living detection & face comparison;
3: Living detection;
The default value is 2.
Example value: 3
 * @method string getIDCardType() Obtain The type of lisence used for verification. The following types are supported.
1.HKIDCard: Hong Kong (China) ID card
2.MLIDCard: Malaysia ID card
3.IndonesiaIDCard: Indonesia ID card
4.PhilippinesVoteID: Philippines VoteID card
5.PhilippinesDrivingLicense: Philippines driving license
6.PhilippinesTinID: Philippines TinID card
7.PhilippinesSSSID: Philippines SSSID card
8.PhilippinesUMID: Philippines UMID card
9.InternationalIDPassport: ID cards of Hong Kong, Macao and Taiwan (China), and international passport.
Example: HKIDCard
 * @method void setIDCardType(string $IDCardType) Set The type of lisence used for verification. The following types are supported.
1.HKIDCard: Hong Kong (China) ID card
2.MLIDCard: Malaysia ID card
3.IndonesiaIDCard: Indonesia ID card
4.PhilippinesVoteID: Philippines VoteID card
5.PhilippinesDrivingLicense: Philippines driving license
6.PhilippinesTinID: Philippines TinID card
7.PhilippinesSSSID: Philippines SSSID card
8.PhilippinesUMID: Philippines UMID card
9.InternationalIDPassport: ID cards of Hong Kong, Macao and Taiwan (China), and international passport.
Example: HKIDCard
 * @method boolean getDisableCheckOcrWarnings() Obtain Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
 */
class WebVerificationConfigIntl extends AbstractModel
{
    /**
     * @var boolean When starting verification, whether to skip the starting verification page. If true, enter the verification process directly. The default is false. This configuration will not take effect if the downgrade policy is triggered.
     */
    public $AutoSkipStartPage;

    /**
     * @var boolean When the verification passed, whether to skip the result page and automatically jump to RedirectURL. The default value is false.
Example value: false
     */
    public $AutoSkip;

    /**
     * @var integer Detection mode, parameter values are as follows:
1: OCR+living detection & face comparison;
2: Living detection & face comparison;
3: Living detection;
The default value is 2.
Example value: 3
     */
    public $CheckMode;

    /**
     * @var string The type of lisence used for verification. The following types are supported.
1.HKIDCard: Hong Kong (China) ID card
2.MLIDCard: Malaysia ID card
3.IndonesiaIDCard: Indonesia ID card
4.PhilippinesVoteID: Philippines VoteID card
5.PhilippinesDrivingLicense: Philippines driving license
6.PhilippinesTinID: Philippines TinID card
7.PhilippinesSSSID: Philippines SSSID card
8.PhilippinesUMID: Philippines UMID card
9.InternationalIDPassport: ID cards of Hong Kong, Macao and Taiwan (China), and international passport.
Example: HKIDCard
     */
    public $IDCardType;

    /**
     * @var boolean Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
     */
    public $DisableCheckOcrWarnings;

    /**
     * @param boolean $AutoSkipStartPage When starting verification, whether to skip the starting verification page. If true, enter the verification process directly. The default is false. This configuration will not take effect if the downgrade policy is triggered.
     * @param boolean $AutoSkip When the verification passed, whether to skip the result page and automatically jump to RedirectURL. The default value is false.
Example value: false
     * @param integer $CheckMode Detection mode, parameter values are as follows:
1: OCR+living detection & face comparison;
2: Living detection & face comparison;
3: Living detection;
The default value is 2.
Example value: 3
     * @param string $IDCardType The type of lisence used for verification. The following types are supported.
1.HKIDCard: Hong Kong (China) ID card
2.MLIDCard: Malaysia ID card
3.IndonesiaIDCard: Indonesia ID card
4.PhilippinesVoteID: Philippines VoteID card
5.PhilippinesDrivingLicense: Philippines driving license
6.PhilippinesTinID: Philippines TinID card
7.PhilippinesSSSID: Philippines SSSID card
8.PhilippinesUMID: Philippines UMID card
9.InternationalIDPassport: ID cards of Hong Kong, Macao and Taiwan (China), and international passport.
Example: HKIDCard
     * @param boolean $DisableCheckOcrWarnings Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
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
        if (array_key_exists("AutoSkipStartPage",$param) and $param["AutoSkipStartPage"] !== null) {
            $this->AutoSkipStartPage = $param["AutoSkipStartPage"];
        }

        if (array_key_exists("AutoSkip",$param) and $param["AutoSkip"] !== null) {
            $this->AutoSkip = $param["AutoSkip"];
        }

        if (array_key_exists("CheckMode",$param) and $param["CheckMode"] !== null) {
            $this->CheckMode = $param["CheckMode"];
        }

        if (array_key_exists("IDCardType",$param) and $param["IDCardType"] !== null) {
            $this->IDCardType = $param["IDCardType"];
        }

        if (array_key_exists("DisableCheckOcrWarnings",$param) and $param["DisableCheckOcrWarnings"] !== null) {
            $this->DisableCheckOcrWarnings = $param["DisableCheckOcrWarnings"];
        }
    }
}
