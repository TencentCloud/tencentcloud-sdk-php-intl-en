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
10.IndonesiaDrivingLicense:Indonesia driving license
11.ThailandIDCard: Thailand ID card
12.ThailandDrivingLicense: Thailand driving license
13.MLDrivingLicense: Malaysia driving license
14.SingaporeIDCard: Singapore ID card
15.SingaporeDrivingLicense: Singapore driving license
16.JapanIDCard: Japan ID card
17.JapanDrivingLicense: Japan driving license
18.PhilippinesIDCard: Philippines ID card
19.MainlandIDCard: Mainland ID card
20.MacaoIDCard: Macao ID card
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
10.IndonesiaDrivingLicense:Indonesia driving license
11.ThailandIDCard: Thailand ID card
12.ThailandDrivingLicense: Thailand driving license
13.MLDrivingLicense: Malaysia driving license
14.SingaporeIDCard: Singapore ID card
15.SingaporeDrivingLicense: Singapore driving license
16.JapanIDCard: Japan ID card
17.JapanDrivingLicense: Japan driving license
18.PhilippinesIDCard: Philippines ID card
19.MainlandIDCard: Mainland ID card
20.MacaoIDCard: Macao ID card
Example: HKIDCard
 * @method boolean getDisableCheckOcrWarnings() Obtain Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
 * @method integer getSecurityLevel() Obtain Liveness security level: 1:Silent mode;2:Action mode;3:Lighting mode;4:Action+Lighting mode;5:Action+Lighting(High security) mode; default value is 3
 * @method void setSecurityLevel(integer $SecurityLevel) Set Liveness security level: 1:Silent mode;2:Action mode;3:Lighting mode;4:Action+Lighting mode;5:Action+Lighting(High security) mode; default value is 3
 * @method boolean getSkipPrivacyPolicy() Obtain Whether to skip the agreement page, the default is false. When SkipPrivacyPolicy is false, the agreement page will be displayed and the privacy agreement needs to be checked; when SkipPrivacyPolicy is true, the agreement page will be skipped and the liveness process will be entered directly without checking the privacy agreement page.
 * @method void setSkipPrivacyPolicy(boolean $SkipPrivacyPolicy) Set Whether to skip the agreement page, the default is false. When SkipPrivacyPolicy is false, the agreement page will be displayed and the privacy agreement needs to be checked; when SkipPrivacyPolicy is true, the agreement page will be skipped and the liveness process will be entered directly without checking the privacy agreement page.
 * @method boolean getIdCardCutReturn() Obtain The default value is false. If it is false, the original ID image will be displayed. If it is true, the cut ID image will be displayed.
 * @method void setIdCardCutReturn(boolean $IdCardCutReturn) Set The default value is false. If it is false, the original ID image will be displayed. If it is true, the cut ID image will be displayed.
 * @method string getThemeColor() Obtain Front-end theme color, in the format of RGB hexadecimal color code. The default value is "#2d72+1". If the format is incorrect, the default value color will be used.
 * @method void setThemeColor(string $ThemeColor) Set Front-end theme color, in the format of RGB hexadecimal color code. The default value is "#2d72+1". If the format is incorrect, the default value color will be used.
 * @method string getLanguage() Obtain International language, the default value is en (English). Currently supported: th: Thai; en: English; zh-cn: Simplified Chinese; zh-tc: Tradionnal Chinese; id: Bahasa Indonesia.
 * @method void setLanguage(string $Language) Set International language, the default value is en (English). Currently supported: th: Thai; en: English; zh-cn: Simplified Chinese; zh-tc: Tradionnal Chinese; id: Bahasa Indonesia.
 * @method integer getAutoDowngrade() Obtain Automatic downgrade mode, with the following parameter values: 1: Downgrade to silent live mode; 2: Disable downgrade mode. The default value is 1.
 * @method void setAutoDowngrade(integer $AutoDowngrade) Set Automatic downgrade mode, with the following parameter values: 1: Downgrade to silent live mode; 2: Disable downgrade mode. The default value is 1.
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
10.IndonesiaDrivingLicense:Indonesia driving license
11.ThailandIDCard: Thailand ID card
12.ThailandDrivingLicense: Thailand driving license
13.MLDrivingLicense: Malaysia driving license
14.SingaporeIDCard: Singapore ID card
15.SingaporeDrivingLicense: Singapore driving license
16.JapanIDCard: Japan ID card
17.JapanDrivingLicense: Japan driving license
18.PhilippinesIDCard: Philippines ID card
19.MainlandIDCard: Mainland ID card
20.MacaoIDCard: Macao ID card
Example: HKIDCard
     */
    public $IDCardType;

    /**
     * @var boolean Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var integer Liveness security level: 1:Silent mode;2:Action mode;3:Lighting mode;4:Action+Lighting mode;5:Action+Lighting(High security) mode; default value is 3
     */
    public $SecurityLevel;

    /**
     * @var boolean Whether to skip the agreement page, the default is false. When SkipPrivacyPolicy is false, the agreement page will be displayed and the privacy agreement needs to be checked; when SkipPrivacyPolicy is true, the agreement page will be skipped and the liveness process will be entered directly without checking the privacy agreement page.
     */
    public $SkipPrivacyPolicy;

    /**
     * @var boolean The default value is false. If it is false, the original ID image will be displayed. If it is true, the cut ID image will be displayed.
     */
    public $IdCardCutReturn;

    /**
     * @var string Front-end theme color, in the format of RGB hexadecimal color code. The default value is "#2d72+1". If the format is incorrect, the default value color will be used.
     */
    public $ThemeColor;

    /**
     * @var string International language, the default value is en (English). Currently supported: th: Thai; en: English; zh-cn: Simplified Chinese; zh-tc: Tradionnal Chinese; id: Bahasa Indonesia.
     */
    public $Language;

    /**
     * @var integer Automatic downgrade mode, with the following parameter values: 1: Downgrade to silent live mode; 2: Disable downgrade mode. The default value is 1.
     */
    public $AutoDowngrade;

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
10.IndonesiaDrivingLicense:Indonesia driving license
11.ThailandIDCard: Thailand ID card
12.ThailandDrivingLicense: Thailand driving license
13.MLDrivingLicense: Malaysia driving license
14.SingaporeIDCard: Singapore ID card
15.SingaporeDrivingLicense: Singapore driving license
16.JapanIDCard: Japan ID card
17.JapanDrivingLicense: Japan driving license
18.PhilippinesIDCard: Philippines ID card
19.MainlandIDCard: Mainland ID card
20.MacaoIDCard: Macao ID card
Example: HKIDCard
     * @param boolean $DisableCheckOcrWarnings Whether to turn off document alarms, the default is false (the alarm detection function is turned on). When enabled, the identity authentication process will be intercepted based on the alarm status of the certificate. If you need to use the document authentication function, please contact us.
     * @param integer $SecurityLevel Liveness security level: 1:Silent mode;2:Action mode;3:Lighting mode;4:Action+Lighting mode;5:Action+Lighting(High security) mode; default value is 3
     * @param boolean $SkipPrivacyPolicy Whether to skip the agreement page, the default is false. When SkipPrivacyPolicy is false, the agreement page will be displayed and the privacy agreement needs to be checked; when SkipPrivacyPolicy is true, the agreement page will be skipped and the liveness process will be entered directly without checking the privacy agreement page.
     * @param boolean $IdCardCutReturn The default value is false. If it is false, the original ID image will be displayed. If it is true, the cut ID image will be displayed.
     * @param string $ThemeColor Front-end theme color, in the format of RGB hexadecimal color code. The default value is "#2d72+1". If the format is incorrect, the default value color will be used.
     * @param string $Language International language, the default value is en (English). Currently supported: th: Thai; en: English; zh-cn: Simplified Chinese; zh-tc: Tradionnal Chinese; id: Bahasa Indonesia.
     * @param integer $AutoDowngrade Automatic downgrade mode, with the following parameter values: 1: Downgrade to silent live mode; 2: Disable downgrade mode. The default value is 1.
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

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }

        if (array_key_exists("SkipPrivacyPolicy",$param) and $param["SkipPrivacyPolicy"] !== null) {
            $this->SkipPrivacyPolicy = $param["SkipPrivacyPolicy"];
        }

        if (array_key_exists("IdCardCutReturn",$param) and $param["IdCardCutReturn"] !== null) {
            $this->IdCardCutReturn = $param["IdCardCutReturn"];
        }

        if (array_key_exists("ThemeColor",$param) and $param["ThemeColor"] !== null) {
            $this->ThemeColor = $param["ThemeColor"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("AutoDowngrade",$param) and $param["AutoDowngrade"] !== null) {
            $this->AutoDowngrade = $param["AutoDowngrade"];
        }
    }
}
