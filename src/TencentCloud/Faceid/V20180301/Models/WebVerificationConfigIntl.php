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
 * eKYC Web related configuration
 *
 * @method boolean getAutoSkipStartPage() Obtain <p>Whether to skip the start verification webpage when starting verification. If true, directly enter the verification process. Default false. If the degradation policy is triggered, this configuration will not take effect.</p>
 * @method void setAutoSkipStartPage(boolean $AutoSkipStartPage) Set <p>Whether to skip the start verification webpage when starting verification. If true, directly enter the verification process. Default false. If the degradation policy is triggered, this configuration will not take effect.</p>
 * @method boolean getAutoSkip() Obtain <p>Whether to skip the result display page and automatically jump to RedirectURL when verification is successful. Default false.</p>
 * @method void setAutoSkip(boolean $AutoSkip) Set <p>Whether to skip the result display page and automatically jump to RedirectURL when verification is successful. Default false.</p>
 * @method integer getCheckMode() Obtain <p>Detection mode. Parameter values are as follows:<br>1: OCR+liveness detection+face comparison;<br>2: liveness detection+face comparison;<br>3: liveness detection;<br>4: OCR;<br>Default value is 2.</p>
 * @method void setCheckMode(integer $CheckMode) Set <p>Detection mode. Parameter values are as follows:<br>1: OCR+liveness detection+face comparison;<br>2: liveness detection+face comparison;<br>3: liveness detection;<br>4: OCR;<br>Default value is 2.</p>
 * @method string getIDCardType() Obtain <p>Identity document type used for authentication. Currently supported:<br>1.HKIDCard: Hong Kong (China) identity card<br>2.MLIDCard: Malaysian identity card<br>3.IndonesiaIDCard: Indonesian Identity Card<br>4.PhilippinesVoteID: Philippines voter card<br>5.PhilippinesDrivingLicense: Philippines driving license<br>6.PhilippinesTinID: Philippines TinID<br>7.PhilippinesSSSID: Philippines SSSID<br>8.PhilippinesUMID: Philippines UMID<br>9.InternationalIDPassport: Passport for Hong Kong (China), Macao (China), and Taiwan (China) as well as overseas passport<br>10.ThailandIDCard: Thai Identity Card<br>11.SingaporeIDCard: Singapore ID card<br>12.MainlandIDCard: Mainland ID card</p>
 * @method void setIDCardType(string $IDCardType) Set <p>Identity document type used for authentication. Currently supported:<br>1.HKIDCard: Hong Kong (China) identity card<br>2.MLIDCard: Malaysian identity card<br>3.IndonesiaIDCard: Indonesian Identity Card<br>4.PhilippinesVoteID: Philippines voter card<br>5.PhilippinesDrivingLicense: Philippines driving license<br>6.PhilippinesTinID: Philippines TinID<br>7.PhilippinesSSSID: Philippines SSSID<br>8.PhilippinesUMID: Philippines UMID<br>9.InternationalIDPassport: Passport for Hong Kong (China), Macao (China), and Taiwan (China) as well as overseas passport<br>10.ThailandIDCard: Thai Identity Card<br>11.SingaporeIDCard: Singapore ID card<br>12.MainlandIDCard: Mainland ID card</p>
 * @method boolean getDisableCheckOcrWarnings() Obtain <p>Want to close document alarm, false by default (enable alarm detection). When enabled, the identity verification process will intercept based on the document alarm status. If you need to use document anti-counterfeiting functionality, <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set <p>Want to close document alarm, false by default (enable alarm detection). When enabled, the identity verification process will intercept based on the document alarm status. If you need to use document anti-counterfeiting functionality, <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
 * @method integer getSecurityLevel() Obtain <p>Security level of authentication:<br>1: Silent liveness;<br>2: Action liveness;<br>3: Light liveness;<br>4: Action + light liveness;<br>Default value is 3.</p>
 * @method void setSecurityLevel(integer $SecurityLevel) Set <p>Security level of authentication:<br>1: Silent liveness;<br>2: Action liveness;<br>3: Light liveness;<br>4: Action + light liveness;<br>Default value is 3.</p>
 * @method boolean getSkipPrivacyPolicy() Obtain <p>Whether to skip the privacy agreement webpage, default false. When SkipPrivacyPolicy is false, the privacy agreement webpage will show and the privacy agreement must be checked. When SkipPrivacyPolicy is true, the privacy agreement webpage will be skipped to directly enter the Live Face Process without the need to check the privacy agreement webpage.</p>
 * @method void setSkipPrivacyPolicy(boolean $SkipPrivacyPolicy) Set <p>Whether to skip the privacy agreement webpage, default false. When SkipPrivacyPolicy is false, the privacy agreement webpage will show and the privacy agreement must be checked. When SkipPrivacyPolicy is true, the privacy agreement webpage will be skipped to directly enter the Live Face Process without the need to check the privacy agreement webpage.</p>
 * @method boolean getIdCardCutReturn() Obtain <p>Default false. When false, show the original document image. When true, show the split document image.</p>
 * @method void setIdCardCutReturn(boolean $IdCardCutReturn) Set <p>Default false. When false, show the original document image. When true, show the split document image.</p>
 * @method string getThemeColor() Obtain <p>Frontend theme color in base 16 RGB format. Defaults to "#2d72f1". Uses default values if the format is incorrect.</p>
 * @method void setThemeColor(string $ThemeColor) Set <p>Frontend theme color in base 16 RGB format. Defaults to "#2d72f1". Uses default values if the format is incorrect.</p>
 * @method string getLanguage() Obtain <p>Internationalized language, defaults to en (English). Currently supported:<br>th: Thai;<br>en: English;<br>zh-cn: Simplified Chinese;<br>zh-tc: Traditional Chinese;<br>id: Indonesia;</p>
 * @method void setLanguage(string $Language) Set <p>Internationalized language, defaults to en (English). Currently supported:<br>th: Thai;<br>en: English;<br>zh-cn: Simplified Chinese;<br>zh-tc: Traditional Chinese;<br>id: Indonesia;</p>
 * @method integer getAutoDowngrade() Obtain <p>Automatic downgrade mode. Parameter values as follows:<br>1: Downgrade to silent liveness mode.<br>2: Disable downgrade mode.<br>Default value: 1.</p>
 * @method void setAutoDowngrade(integer $AutoDowngrade) Set <p>Automatic downgrade mode. Parameter values as follows:<br>1: Downgrade to silent liveness mode.<br>2: Disable downgrade mode.<br>Default value: 1.</p>
 * @method string getActionList() Obtain <p>Control the action sequence. Action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value: blink<br>Input this parameter only when SecurityLevel is 2, 4, or 5 for different action types to take effect; otherwise, an API error occurs.</p>
 * @method void setActionList(string $ActionList) Set <p>Control the action sequence. Action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value: blink<br>Input this parameter only when SecurityLevel is 2, 4, or 5 for different action types to take effect; otherwise, an API error occurs.</p>
 * @method integer getLivenessRetryLimit() Obtain <p>Maximum liveness verification attempts. Value ranges from 1 to 99. Default value is 99.</p>
 * @method void setLivenessRetryLimit(integer $LivenessRetryLimit) Set <p>Maximum liveness verification attempts. Value ranges from 1 to 99. Default value is 99.</p>
 * @method integer getLivenessTimeout() Obtain <p>Control the liveness detection timeout period in seconds. The value ranges from 0 to 600. Default: 45 seconds.</p>
 * @method void setLivenessTimeout(integer $LivenessTimeout) Set <p>Control the liveness detection timeout period in seconds. The value ranges from 0 to 600. Default: 45 seconds.</p>
 * @method string getSelectedWarningCodes() Obtain <p>Select OCR alarms that require attention. When an OCR alarm is generated, the identity verification process will be interrupted. The default value is empty, indicating all alarms are monitored. This feature requires the parameter DisableCheckOcrWarnings=false. If the alarm is disabled, this parameter will not be effective.</p><p>Alarm code list and definitions:<br>-9101 Incomplete border alarm<br>-9102 Photocopies alarm<br>-9103 Alarm for rephotographing<br>-9104 ps alarm<br>-9107 Reflective alarm<br>-9108 Blurry alarm<br>-9109 Alarm not enabled</p>
 * @method void setSelectedWarningCodes(string $SelectedWarningCodes) Set <p>Select OCR alarms that require attention. When an OCR alarm is generated, the identity verification process will be interrupted. The default value is empty, indicating all alarms are monitored. This feature requires the parameter DisableCheckOcrWarnings=false. If the alarm is disabled, this parameter will not be effective.</p><p>Alarm code list and definitions:<br>-9101 Incomplete border alarm<br>-9102 Photocopies alarm<br>-9103 Alarm for rephotographing<br>-9104 ps alarm<br>-9107 Reflective alarm<br>-9108 Blurry alarm<br>-9109 Alarm not enabled</p>
 * @method boolean getAllowExpiredDocument() Obtain <p>Whether to allow expired identity documents to enter the liveness detection process. This parameter is valid only when the document type is Hong Kong identity card (HKID).<br>true (default value): Allow expired Hong Kong identity card to enter the liveness detection process.<br>false: Reject expired Hong Kong identity card, not accessible to the liveness detection process.</p>
 * @method void setAllowExpiredDocument(boolean $AllowExpiredDocument) Set <p>Whether to allow expired identity documents to enter the liveness detection process. This parameter is valid only when the document type is Hong Kong identity card (HKID).<br>true (default value): Allow expired Hong Kong identity card to enter the liveness detection process.<br>false: Reject expired Hong Kong identity card, not accessible to the liveness detection process.</p>
 * @method string getVersion() Obtain <p>Service version, including basic version (BASIC) and PLUS version (PLUS).</p><p>Enumeration value:</p><ul><li>BASIC: Basic version</li><li>PLUS: PLUS version</li></ul><p>Default value: BASIC.</p>
 * @method void setVersion(string $Version) Set <p>Service version, including basic version (BASIC) and PLUS version (PLUS).</p><p>Enumeration value:</p><ul><li>BASIC: Basic version</li><li>PLUS: PLUS version</li></ul><p>Default value: BASIC.</p>
 */
class WebVerificationConfigIntl extends AbstractModel
{
    /**
     * @var boolean <p>Whether to skip the start verification webpage when starting verification. If true, directly enter the verification process. Default false. If the degradation policy is triggered, this configuration will not take effect.</p>
     */
    public $AutoSkipStartPage;

    /**
     * @var boolean <p>Whether to skip the result display page and automatically jump to RedirectURL when verification is successful. Default false.</p>
     */
    public $AutoSkip;

    /**
     * @var integer <p>Detection mode. Parameter values are as follows:<br>1: OCR+liveness detection+face comparison;<br>2: liveness detection+face comparison;<br>3: liveness detection;<br>4: OCR;<br>Default value is 2.</p>
     */
    public $CheckMode;

    /**
     * @var string <p>Identity document type used for authentication. Currently supported:<br>1.HKIDCard: Hong Kong (China) identity card<br>2.MLIDCard: Malaysian identity card<br>3.IndonesiaIDCard: Indonesian Identity Card<br>4.PhilippinesVoteID: Philippines voter card<br>5.PhilippinesDrivingLicense: Philippines driving license<br>6.PhilippinesTinID: Philippines TinID<br>7.PhilippinesSSSID: Philippines SSSID<br>8.PhilippinesUMID: Philippines UMID<br>9.InternationalIDPassport: Passport for Hong Kong (China), Macao (China), and Taiwan (China) as well as overseas passport<br>10.ThailandIDCard: Thai Identity Card<br>11.SingaporeIDCard: Singapore ID card<br>12.MainlandIDCard: Mainland ID card</p>
     */
    public $IDCardType;

    /**
     * @var boolean <p>Want to close document alarm, false by default (enable alarm detection). When enabled, the identity verification process will intercept based on the document alarm status. If you need to use document anti-counterfeiting functionality, <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var integer <p>Security level of authentication:<br>1: Silent liveness;<br>2: Action liveness;<br>3: Light liveness;<br>4: Action + light liveness;<br>Default value is 3.</p>
     */
    public $SecurityLevel;

    /**
     * @var boolean <p>Whether to skip the privacy agreement webpage, default false. When SkipPrivacyPolicy is false, the privacy agreement webpage will show and the privacy agreement must be checked. When SkipPrivacyPolicy is true, the privacy agreement webpage will be skipped to directly enter the Live Face Process without the need to check the privacy agreement webpage.</p>
     */
    public $SkipPrivacyPolicy;

    /**
     * @var boolean <p>Default false. When false, show the original document image. When true, show the split document image.</p>
     */
    public $IdCardCutReturn;

    /**
     * @var string <p>Frontend theme color in base 16 RGB format. Defaults to "#2d72f1". Uses default values if the format is incorrect.</p>
     */
    public $ThemeColor;

    /**
     * @var string <p>Internationalized language, defaults to en (English). Currently supported:<br>th: Thai;<br>en: English;<br>zh-cn: Simplified Chinese;<br>zh-tc: Traditional Chinese;<br>id: Indonesia;</p>
     */
    public $Language;

    /**
     * @var integer <p>Automatic downgrade mode. Parameter values as follows:<br>1: Downgrade to silent liveness mode.<br>2: Disable downgrade mode.<br>Default value: 1.</p>
     */
    public $AutoDowngrade;

    /**
     * @var string <p>Control the action sequence. Action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value: blink<br>Input this parameter only when SecurityLevel is 2, 4, or 5 for different action types to take effect; otherwise, an API error occurs.</p>
     */
    public $ActionList;

    /**
     * @var integer <p>Maximum liveness verification attempts. Value ranges from 1 to 99. Default value is 99.</p>
     */
    public $LivenessRetryLimit;

    /**
     * @var integer <p>Control the liveness detection timeout period in seconds. The value ranges from 0 to 600. Default: 45 seconds.</p>
     */
    public $LivenessTimeout;

    /**
     * @var string <p>Select OCR alarms that require attention. When an OCR alarm is generated, the identity verification process will be interrupted. The default value is empty, indicating all alarms are monitored. This feature requires the parameter DisableCheckOcrWarnings=false. If the alarm is disabled, this parameter will not be effective.</p><p>Alarm code list and definitions:<br>-9101 Incomplete border alarm<br>-9102 Photocopies alarm<br>-9103 Alarm for rephotographing<br>-9104 ps alarm<br>-9107 Reflective alarm<br>-9108 Blurry alarm<br>-9109 Alarm not enabled</p>
     */
    public $SelectedWarningCodes;

    /**
     * @var boolean <p>Whether to allow expired identity documents to enter the liveness detection process. This parameter is valid only when the document type is Hong Kong identity card (HKID).<br>true (default value): Allow expired Hong Kong identity card to enter the liveness detection process.<br>false: Reject expired Hong Kong identity card, not accessible to the liveness detection process.</p>
     */
    public $AllowExpiredDocument;

    /**
     * @var string <p>Service version, including basic version (BASIC) and PLUS version (PLUS).</p><p>Enumeration value:</p><ul><li>BASIC: Basic version</li><li>PLUS: PLUS version</li></ul><p>Default value: BASIC.</p>
     */
    public $Version;

    /**
     * @param boolean $AutoSkipStartPage <p>Whether to skip the start verification webpage when starting verification. If true, directly enter the verification process. Default false. If the degradation policy is triggered, this configuration will not take effect.</p>
     * @param boolean $AutoSkip <p>Whether to skip the result display page and automatically jump to RedirectURL when verification is successful. Default false.</p>
     * @param integer $CheckMode <p>Detection mode. Parameter values are as follows:<br>1: OCR+liveness detection+face comparison;<br>2: liveness detection+face comparison;<br>3: liveness detection;<br>4: OCR;<br>Default value is 2.</p>
     * @param string $IDCardType <p>Identity document type used for authentication. Currently supported:<br>1.HKIDCard: Hong Kong (China) identity card<br>2.MLIDCard: Malaysian identity card<br>3.IndonesiaIDCard: Indonesian Identity Card<br>4.PhilippinesVoteID: Philippines voter card<br>5.PhilippinesDrivingLicense: Philippines driving license<br>6.PhilippinesTinID: Philippines TinID<br>7.PhilippinesSSSID: Philippines SSSID<br>8.PhilippinesUMID: Philippines UMID<br>9.InternationalIDPassport: Passport for Hong Kong (China), Macao (China), and Taiwan (China) as well as overseas passport<br>10.ThailandIDCard: Thai Identity Card<br>11.SingaporeIDCard: Singapore ID card<br>12.MainlandIDCard: Mainland ID card</p>
     * @param boolean $DisableCheckOcrWarnings <p>Want to close document alarm, false by default (enable alarm detection). When enabled, the identity verification process will intercept based on the document alarm status. If you need to use document anti-counterfeiting functionality, <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
     * @param integer $SecurityLevel <p>Security level of authentication:<br>1: Silent liveness;<br>2: Action liveness;<br>3: Light liveness;<br>4: Action + light liveness;<br>Default value is 3.</p>
     * @param boolean $SkipPrivacyPolicy <p>Whether to skip the privacy agreement webpage, default false. When SkipPrivacyPolicy is false, the privacy agreement webpage will show and the privacy agreement must be checked. When SkipPrivacyPolicy is true, the privacy agreement webpage will be skipped to directly enter the Live Face Process without the need to check the privacy agreement webpage.</p>
     * @param boolean $IdCardCutReturn <p>Default false. When false, show the original document image. When true, show the split document image.</p>
     * @param string $ThemeColor <p>Frontend theme color in base 16 RGB format. Defaults to "#2d72f1". Uses default values if the format is incorrect.</p>
     * @param string $Language <p>Internationalized language, defaults to en (English). Currently supported:<br>th: Thai;<br>en: English;<br>zh-cn: Simplified Chinese;<br>zh-tc: Traditional Chinese;<br>id: Indonesia;</p>
     * @param integer $AutoDowngrade <p>Automatic downgrade mode. Parameter values as follows:<br>1: Downgrade to silent liveness mode.<br>2: Disable downgrade mode.<br>Default value: 1.</p>
     * @param string $ActionList <p>Control the action sequence. Action types are as follows:<br>"blink"<br>"mouth"<br>"nod"<br>"shake"<br>Choose 1-2 actions from the four.<br>Single action example: "blink"<br>Multi-action example: "blink,mouth".<br>Default value: blink<br>Input this parameter only when SecurityLevel is 2, 4, or 5 for different action types to take effect; otherwise, an API error occurs.</p>
     * @param integer $LivenessRetryLimit <p>Maximum liveness verification attempts. Value ranges from 1 to 99. Default value is 99.</p>
     * @param integer $LivenessTimeout <p>Control the liveness detection timeout period in seconds. The value ranges from 0 to 600. Default: 45 seconds.</p>
     * @param string $SelectedWarningCodes <p>Select OCR alarms that require attention. When an OCR alarm is generated, the identity verification process will be interrupted. The default value is empty, indicating all alarms are monitored. This feature requires the parameter DisableCheckOcrWarnings=false. If the alarm is disabled, this parameter will not be effective.</p><p>Alarm code list and definitions:<br>-9101 Incomplete border alarm<br>-9102 Photocopies alarm<br>-9103 Alarm for rephotographing<br>-9104 ps alarm<br>-9107 Reflective alarm<br>-9108 Blurry alarm<br>-9109 Alarm not enabled</p>
     * @param boolean $AllowExpiredDocument <p>Whether to allow expired identity documents to enter the liveness detection process. This parameter is valid only when the document type is Hong Kong identity card (HKID).<br>true (default value): Allow expired Hong Kong identity card to enter the liveness detection process.<br>false: Reject expired Hong Kong identity card, not accessible to the liveness detection process.</p>
     * @param string $Version <p>Service version, including basic version (BASIC) and PLUS version (PLUS).</p><p>Enumeration value:</p><ul><li>BASIC: Basic version</li><li>PLUS: PLUS version</li></ul><p>Default value: BASIC.</p>
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

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }

        if (array_key_exists("LivenessRetryLimit",$param) and $param["LivenessRetryLimit"] !== null) {
            $this->LivenessRetryLimit = $param["LivenessRetryLimit"];
        }

        if (array_key_exists("LivenessTimeout",$param) and $param["LivenessTimeout"] !== null) {
            $this->LivenessTimeout = $param["LivenessTimeout"];
        }

        if (array_key_exists("SelectedWarningCodes",$param) and $param["SelectedWarningCodes"] !== null) {
            $this->SelectedWarningCodes = $param["SelectedWarningCodes"];
        }

        if (array_key_exists("AllowExpiredDocument",$param) and $param["AllowExpiredDocument"] !== null) {
            $this->AllowExpiredDocument = $param["AllowExpiredDocument"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
