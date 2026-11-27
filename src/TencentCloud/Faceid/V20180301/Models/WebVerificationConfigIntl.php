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
 * eKYC Web page related configurations
 *
 * @method boolean getAutoSkipStartPage() Obtain <p>Indicates whether to skip the start verification page when starting verification. If set to true, the verification process starts directly. The default value is false. If a fallback policy is triggered, this configuration does not take effect.</p>
 * @method void setAutoSkipStartPage(boolean $AutoSkipStartPage) Set <p>Indicates whether to skip the start verification page when starting verification. If set to true, the verification process starts directly. The default value is false. If a fallback policy is triggered, this configuration does not take effect.</p>
 * @method boolean getAutoSkip() Obtain <p>Indicates whether to skip the result display page and automatically redirect to RedirectURL when verification succeeds. The default value is false.</p>
 * @method void setAutoSkip(boolean $AutoSkip) Set <p>Indicates whether to skip the result display page and automatically redirect to RedirectURL when verification succeeds. The default value is false.</p>
 * @method integer getCheckMode() Obtain <p>Detection mode. Valid values: <br>1: OCR + liveness detection + face comparison; <br>2: Liveness detection + face comparison; <br>3: Liveness detection; <br>4: OCR. <br>The default value is 2.</p>
 * @method void setCheckMode(integer $CheckMode) Set <p>Detection mode. Valid values: <br>1: OCR + liveness detection + face comparison; <br>2: Liveness detection + face comparison; <br>3: Liveness detection; <br>4: OCR. <br>The default value is 2.</p>
 * @method string getIDCardType() Obtain <p>The type of card used for authentication. Currently supported types: <br>1. HKIDCard: Hong Kong (China) ID card <br>2. MLIDCard: Malaysian ID card <br>3. IndonesiaIDCard: Indonesian ID card <br>4. PhilippinesVoteID: Philippine voter's card <br>5. PhilippinesDrivingLicense: Philippine driving license <br>6. PhilippinesTinID: Philippine TIN ID <br>7. PhilippinesSSSID: Philippine SSS ID <br>8. PhilippinesUMID: Philippine UMID <br>9. InternationalIDPassport: Passports from Hong Kong/Macao/Taiwan (China) and overseas <br>10. ThailandIDCard: Thai ID card <br>11. SingaporeIDCard: Singaporean ID card <br>12. MainlandIDCard: Mainland ID card</p>
 * @method void setIDCardType(string $IDCardType) Set <p>The type of card used for authentication. Currently supported types: <br>1. HKIDCard: Hong Kong (China) ID card <br>2. MLIDCard: Malaysian ID card <br>3. IndonesiaIDCard: Indonesian ID card <br>4. PhilippinesVoteID: Philippine voter's card <br>5. PhilippinesDrivingLicense: Philippine driving license <br>6. PhilippinesTinID: Philippine TIN ID <br>7. PhilippinesSSSID: Philippine SSS ID <br>8. PhilippinesUMID: Philippine UMID <br>9. InternationalIDPassport: Passports from Hong Kong/Macao/Taiwan (China) and overseas <br>10. ThailandIDCard: Thai ID card <br>11. SingaporeIDCard: Singaporean ID card <br>12. MainlandIDCard: Mainland ID card</p>
 * @method boolean getDisableCheckOcrWarnings() Obtain <p>Indicates whether to disable document alerts. The default value is false, which means the alert detection feature is enabled. When enabled, the identity authentication process will be blocked based on document alerts. If you need to use the document authentication feature, please <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) Set <p>Indicates whether to disable document alerts. The default value is false, which means the alert detection feature is enabled. When enabled, the identity authentication process will be blocked based on document alerts. If you need to use the document authentication feature, please <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
 * @method integer getSecurityLevel() Obtain <p>Security level of authentication: <br>1: Silent liveness; <br>2: Motion liveness; <br>3: Light liveness; <br>4: Motion + light liveness; <br>The default value is 3.</p>
 * @method void setSecurityLevel(integer $SecurityLevel) Set <p>Security level of authentication: <br>1: Silent liveness; <br>2: Motion liveness; <br>3: Light liveness; <br>4: Motion + light liveness; <br>The default value is 3.</p>
 * @method boolean getSkipPrivacyPolicy() Obtain <p>Indicates whether to skip the agreement page. The default value is false. When SkipPrivacyPolicy is false, the agreement page is displayed and the privacy agreement must be selected. When SkipPrivacyPolicy is true, the agreement page is skipped and the liveness process starts directly without selecting the privacy agreement.</p>
 * @method void setSkipPrivacyPolicy(boolean $SkipPrivacyPolicy) Set <p>Indicates whether to skip the agreement page. The default value is false. When SkipPrivacyPolicy is false, the agreement page is displayed and the privacy agreement must be selected. When SkipPrivacyPolicy is true, the agreement page is skipped and the liveness process starts directly without selecting the privacy agreement.</p>
 * @method boolean getIdCardCutReturn() Obtain <p>The default value is false. When set to false, the original document image is displayed. When set to true, the cropped document image is displayed.</p>
 * @method void setIdCardCutReturn(boolean $IdCardCutReturn) Set <p>The default value is false. When set to false, the original document image is displayed. When set to true, the cropped document image is displayed.</p>
 * @method string getThemeColor() Obtain <p>Frontend theme color, in the format of an RGB hexadecimal color code. The default value is "#2d72f1". If the format is incorrect, the default color is used.</p>
 * @method void setThemeColor(string $ThemeColor) Set <p>Frontend theme color, in the format of an RGB hexadecimal color code. The default value is "#2d72f1". If the format is incorrect, the default color is used.</p>
 * @method string getLanguage() Obtain <p>Internationalization language. The default value is en (English). Currently supported languages: <br>th: Thai; <br>en: English; <br>zh-cn: Simplified Chinese; <br>zh-tc: Traditional Chinese; <br>id: Indonesian.</p>
 * @method void setLanguage(string $Language) Set <p>Internationalization language. The default value is en (English). Currently supported languages: <br>th: Thai; <br>en: English; <br>zh-cn: Simplified Chinese; <br>zh-tc: Traditional Chinese; <br>id: Indonesian.</p>
 * @method integer getAutoDowngrade() Obtain <p>Automatic fallback mode. Valid values: <br>1: Fall back to silent liveness mode; <br>2: Disable fallback mode. <br>The default value is 1.</p>
 * @method void setAutoDowngrade(integer $AutoDowngrade) Set <p>Automatic fallback mode. Valid values: <br>1: Fall back to silent liveness mode; <br>2: Disable fallback mode. <br>The default value is 1.</p>
 * @method string getActionList() Obtain <p>Controls the action sequence. The action types are as follows: <br>"blink" <br>"mouth" <br>"nod" <br>"shake" <br>You can select 1 to 2 actions from the four. <br>Single action example: "blink" <br>Multiple actions example: "blink,mouth". <br>The default value is blink. <br>This parameter takes effect only when SecurityLevel is 2, 4, or 5. Otherwise, an error is reported.</p>
 * @method void setActionList(string $ActionList) Set <p>Controls the action sequence. The action types are as follows: <br>"blink" <br>"mouth" <br>"nod" <br>"shake" <br>You can select 1 to 2 actions from the four. <br>Single action example: "blink" <br>Multiple actions example: "blink,mouth". <br>The default value is blink. <br>This parameter takes effect only when SecurityLevel is 2, 4, or 5. Otherwise, an error is reported.</p>
 * @method integer getLivenessRetryLimit() Obtain <p>Maximum number of liveness verification attempts. The valid range is 1–99. The default value is 99.</p>
 * @method void setLivenessRetryLimit(integer $LivenessRetryLimit) Set <p>Maximum number of liveness verification attempts. The valid range is 1–99. The default value is 99.</p>
 * @method integer getLivenessTimeout() Obtain <p>Controls the liveness detection timeout in seconds. The valid range is (0, 600]. The default value is 45 seconds.</p>
 * @method void setLivenessTimeout(integer $LivenessTimeout) Set <p>Controls the liveness detection timeout in seconds. The valid range is (0, 600]. The default value is 45 seconds.</p>
 * @method string getSelectedWarningCodes() Obtain <p>Selects the OCR alerts to pay attention to. When a selected OCR alert occurs, the identity authentication process is interrupted. The default value is empty, indicating that all alerts are selected. This feature requires the parameter DisableCheckOcrWarnings=false. If alerts are disabled, this parameter does not take effect.</p><p>List of alert codes and their meanings: <br>-9101 Incomplete border alert <br>-9102 Photocopy alert <br>-9103 Recapture alert <br>-9104 Photoshop alert <br>-9107 Reflection alert <br>-9108 Blur alert <br>-9109 Alert not enabled</p>
 * @method void setSelectedWarningCodes(string $SelectedWarningCodes) Set <p>Selects the OCR alerts to pay attention to. When a selected OCR alert occurs, the identity authentication process is interrupted. The default value is empty, indicating that all alerts are selected. This feature requires the parameter DisableCheckOcrWarnings=false. If alerts are disabled, this parameter does not take effect.</p><p>List of alert codes and their meanings: <br>-9101 Incomplete border alert <br>-9102 Photocopy alert <br>-9103 Recapture alert <br>-9104 Photoshop alert <br>-9107 Reflection alert <br>-9108 Blur alert <br>-9109 Alert not enabled</p>
 * @method boolean getAllowExpiredDocument() Obtain <p>Indicates whether expired identity documents are allowed to enter the liveness detection process. This parameter takes effect only when the document type is Hong Kong (China) identity card (HKID). <br>true (default): Expired Hong Kong (China) identity cards are allowed to enter the liveness detection process. <br>false: Expired Hong Kong (China) identity cards are rejected and cannot enter the liveness detection process.</p>
 * @method void setAllowExpiredDocument(boolean $AllowExpiredDocument) Set <p>Indicates whether expired identity documents are allowed to enter the liveness detection process. This parameter takes effect only when the document type is Hong Kong (China) identity card (HKID). <br>true (default): Expired Hong Kong (China) identity cards are allowed to enter the liveness detection process. <br>false: Expired Hong Kong (China) identity cards are rejected and cannot enter the liveness detection process.</p>
 * @method string getVersion() Obtain <p>Service edition, including the basic edition (BASIC) and the PLUS edition (PLUS).</p><p>Valid values:</p><ul><li>BASIC: Basic edition</li><li>PLUS: PLUS edition</li></ul><p>Default value: BASIC</p>
 * @method void setVersion(string $Version) Set <p>Service edition, including the basic edition (BASIC) and the PLUS edition (PLUS).</p><p>Valid values:</p><ul><li>BASIC: Basic edition</li><li>PLUS: PLUS edition</li></ul><p>Default value: BASIC</p>
 * @method string getOcrWaitPolicy() Obtain <p>When <code>CheckMode = 1</code>, this parameter defines the waiting policy for the OCR recognition result.</p><p>Valid values:</p><ul><li>required: Wait until the OCR verification result is confirmed before proceeding to liveness detection.</li><li>skip: Proceed to liveness detection directly after the document photo is submitted.</li></ul><p>Default value: required</p>
 * @method void setOcrWaitPolicy(string $OcrWaitPolicy) Set <p>When <code>CheckMode = 1</code>, this parameter defines the waiting policy for the OCR recognition result.</p><p>Valid values:</p><ul><li>required: Wait until the OCR verification result is confirmed before proceeding to liveness detection.</li><li>skip: Proceed to liveness detection directly after the document photo is submitted.</li></ul><p>Default value: required</p>
 * @method string getWebhookUrl() Obtain <p>Verification status callback URL. After this URL is configured, the service actively pushes notifications to this URL when the process ends. Leave it empty to disable the callback capability. As callbacks cannot be guaranteed to be 100% reliable, it is recommended to use them together with a polling mechanism to ensure that the final status is obtained.</p>
 * @method void setWebhookUrl(string $WebhookUrl) Set <p>Verification status callback URL. After this URL is configured, the service actively pushes notifications to this URL when the process ends. Leave it empty to disable the callback capability. As callbacks cannot be guaranteed to be 100% reliable, it is recommended to use them together with a polling mechanism to ensure that the final status is obtained.</p>
 */
class WebVerificationConfigIntl extends AbstractModel
{
    /**
     * @var boolean <p>Indicates whether to skip the start verification page when starting verification. If set to true, the verification process starts directly. The default value is false. If a fallback policy is triggered, this configuration does not take effect.</p>
     */
    public $AutoSkipStartPage;

    /**
     * @var boolean <p>Indicates whether to skip the result display page and automatically redirect to RedirectURL when verification succeeds. The default value is false.</p>
     */
    public $AutoSkip;

    /**
     * @var integer <p>Detection mode. Valid values: <br>1: OCR + liveness detection + face comparison; <br>2: Liveness detection + face comparison; <br>3: Liveness detection; <br>4: OCR. <br>The default value is 2.</p>
     */
    public $CheckMode;

    /**
     * @var string <p>The type of card used for authentication. Currently supported types: <br>1. HKIDCard: Hong Kong (China) ID card <br>2. MLIDCard: Malaysian ID card <br>3. IndonesiaIDCard: Indonesian ID card <br>4. PhilippinesVoteID: Philippine voter's card <br>5. PhilippinesDrivingLicense: Philippine driving license <br>6. PhilippinesTinID: Philippine TIN ID <br>7. PhilippinesSSSID: Philippine SSS ID <br>8. PhilippinesUMID: Philippine UMID <br>9. InternationalIDPassport: Passports from Hong Kong/Macao/Taiwan (China) and overseas <br>10. ThailandIDCard: Thai ID card <br>11. SingaporeIDCard: Singaporean ID card <br>12. MainlandIDCard: Mainland ID card</p>
     */
    public $IDCardType;

    /**
     * @var boolean <p>Indicates whether to disable document alerts. The default value is false, which means the alert detection feature is enabled. When enabled, the identity authentication process will be blocked based on document alerts. If you need to use the document authentication feature, please <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var integer <p>Security level of authentication: <br>1: Silent liveness; <br>2: Motion liveness; <br>3: Light liveness; <br>4: Motion + light liveness; <br>The default value is 3.</p>
     */
    public $SecurityLevel;

    /**
     * @var boolean <p>Indicates whether to skip the agreement page. The default value is false. When SkipPrivacyPolicy is false, the agreement page is displayed and the privacy agreement must be selected. When SkipPrivacyPolicy is true, the agreement page is skipped and the liveness process starts directly without selecting the privacy agreement.</p>
     */
    public $SkipPrivacyPolicy;

    /**
     * @var boolean <p>The default value is false. When set to false, the original document image is displayed. When set to true, the cropped document image is displayed.</p>
     */
    public $IdCardCutReturn;

    /**
     * @var string <p>Frontend theme color, in the format of an RGB hexadecimal color code. The default value is "#2d72f1". If the format is incorrect, the default color is used.</p>
     */
    public $ThemeColor;

    /**
     * @var string <p>Internationalization language. The default value is en (English). Currently supported languages: <br>th: Thai; <br>en: English; <br>zh-cn: Simplified Chinese; <br>zh-tc: Traditional Chinese; <br>id: Indonesian.</p>
     */
    public $Language;

    /**
     * @var integer <p>Automatic fallback mode. Valid values: <br>1: Fall back to silent liveness mode; <br>2: Disable fallback mode. <br>The default value is 1.</p>
     */
    public $AutoDowngrade;

    /**
     * @var string <p>Controls the action sequence. The action types are as follows: <br>"blink" <br>"mouth" <br>"nod" <br>"shake" <br>You can select 1 to 2 actions from the four. <br>Single action example: "blink" <br>Multiple actions example: "blink,mouth". <br>The default value is blink. <br>This parameter takes effect only when SecurityLevel is 2, 4, or 5. Otherwise, an error is reported.</p>
     */
    public $ActionList;

    /**
     * @var integer <p>Maximum number of liveness verification attempts. The valid range is 1–99. The default value is 99.</p>
     */
    public $LivenessRetryLimit;

    /**
     * @var integer <p>Controls the liveness detection timeout in seconds. The valid range is (0, 600]. The default value is 45 seconds.</p>
     */
    public $LivenessTimeout;

    /**
     * @var string <p>Selects the OCR alerts to pay attention to. When a selected OCR alert occurs, the identity authentication process is interrupted. The default value is empty, indicating that all alerts are selected. This feature requires the parameter DisableCheckOcrWarnings=false. If alerts are disabled, this parameter does not take effect.</p><p>List of alert codes and their meanings: <br>-9101 Incomplete border alert <br>-9102 Photocopy alert <br>-9103 Recapture alert <br>-9104 Photoshop alert <br>-9107 Reflection alert <br>-9108 Blur alert <br>-9109 Alert not enabled</p>
     */
    public $SelectedWarningCodes;

    /**
     * @var boolean <p>Indicates whether expired identity documents are allowed to enter the liveness detection process. This parameter takes effect only when the document type is Hong Kong (China) identity card (HKID). <br>true (default): Expired Hong Kong (China) identity cards are allowed to enter the liveness detection process. <br>false: Expired Hong Kong (China) identity cards are rejected and cannot enter the liveness detection process.</p>
     */
    public $AllowExpiredDocument;

    /**
     * @var string <p>Service edition, including the basic edition (BASIC) and the PLUS edition (PLUS).</p><p>Valid values:</p><ul><li>BASIC: Basic edition</li><li>PLUS: PLUS edition</li></ul><p>Default value: BASIC</p>
     */
    public $Version;

    /**
     * @var string <p>When <code>CheckMode = 1</code>, this parameter defines the waiting policy for the OCR recognition result.</p><p>Valid values:</p><ul><li>required: Wait until the OCR verification result is confirmed before proceeding to liveness detection.</li><li>skip: Proceed to liveness detection directly after the document photo is submitted.</li></ul><p>Default value: required</p>
     */
    public $OcrWaitPolicy;

    /**
     * @var string <p>Verification status callback URL. After this URL is configured, the service actively pushes notifications to this URL when the process ends. Leave it empty to disable the callback capability. As callbacks cannot be guaranteed to be 100% reliable, it is recommended to use them together with a polling mechanism to ensure that the final status is obtained.</p>
     */
    public $WebhookUrl;

    /**
     * @param boolean $AutoSkipStartPage <p>Indicates whether to skip the start verification page when starting verification. If set to true, the verification process starts directly. The default value is false. If a fallback policy is triggered, this configuration does not take effect.</p>
     * @param boolean $AutoSkip <p>Indicates whether to skip the result display page and automatically redirect to RedirectURL when verification succeeds. The default value is false.</p>
     * @param integer $CheckMode <p>Detection mode. Valid values: <br>1: OCR + liveness detection + face comparison; <br>2: Liveness detection + face comparison; <br>3: Liveness detection; <br>4: OCR. <br>The default value is 2.</p>
     * @param string $IDCardType <p>The type of card used for authentication. Currently supported types: <br>1. HKIDCard: Hong Kong (China) ID card <br>2. MLIDCard: Malaysian ID card <br>3. IndonesiaIDCard: Indonesian ID card <br>4. PhilippinesVoteID: Philippine voter's card <br>5. PhilippinesDrivingLicense: Philippine driving license <br>6. PhilippinesTinID: Philippine TIN ID <br>7. PhilippinesSSSID: Philippine SSS ID <br>8. PhilippinesUMID: Philippine UMID <br>9. InternationalIDPassport: Passports from Hong Kong/Macao/Taiwan (China) and overseas <br>10. ThailandIDCard: Thai ID card <br>11. SingaporeIDCard: Singaporean ID card <br>12. MainlandIDCard: Mainland ID card</p>
     * @param boolean $DisableCheckOcrWarnings <p>Indicates whether to disable document alerts. The default value is false, which means the alert detection feature is enabled. When enabled, the identity authentication process will be blocked based on document alerts. If you need to use the document authentication feature, please <a href="https://www.tencentcloud.com/zh/contact-us">contact us</a>.</p>
     * @param integer $SecurityLevel <p>Security level of authentication: <br>1: Silent liveness; <br>2: Motion liveness; <br>3: Light liveness; <br>4: Motion + light liveness; <br>The default value is 3.</p>
     * @param boolean $SkipPrivacyPolicy <p>Indicates whether to skip the agreement page. The default value is false. When SkipPrivacyPolicy is false, the agreement page is displayed and the privacy agreement must be selected. When SkipPrivacyPolicy is true, the agreement page is skipped and the liveness process starts directly without selecting the privacy agreement.</p>
     * @param boolean $IdCardCutReturn <p>The default value is false. When set to false, the original document image is displayed. When set to true, the cropped document image is displayed.</p>
     * @param string $ThemeColor <p>Frontend theme color, in the format of an RGB hexadecimal color code. The default value is "#2d72f1". If the format is incorrect, the default color is used.</p>
     * @param string $Language <p>Internationalization language. The default value is en (English). Currently supported languages: <br>th: Thai; <br>en: English; <br>zh-cn: Simplified Chinese; <br>zh-tc: Traditional Chinese; <br>id: Indonesian.</p>
     * @param integer $AutoDowngrade <p>Automatic fallback mode. Valid values: <br>1: Fall back to silent liveness mode; <br>2: Disable fallback mode. <br>The default value is 1.</p>
     * @param string $ActionList <p>Controls the action sequence. The action types are as follows: <br>"blink" <br>"mouth" <br>"nod" <br>"shake" <br>You can select 1 to 2 actions from the four. <br>Single action example: "blink" <br>Multiple actions example: "blink,mouth". <br>The default value is blink. <br>This parameter takes effect only when SecurityLevel is 2, 4, or 5. Otherwise, an error is reported.</p>
     * @param integer $LivenessRetryLimit <p>Maximum number of liveness verification attempts. The valid range is 1–99. The default value is 99.</p>
     * @param integer $LivenessTimeout <p>Controls the liveness detection timeout in seconds. The valid range is (0, 600]. The default value is 45 seconds.</p>
     * @param string $SelectedWarningCodes <p>Selects the OCR alerts to pay attention to. When a selected OCR alert occurs, the identity authentication process is interrupted. The default value is empty, indicating that all alerts are selected. This feature requires the parameter DisableCheckOcrWarnings=false. If alerts are disabled, this parameter does not take effect.</p><p>List of alert codes and their meanings: <br>-9101 Incomplete border alert <br>-9102 Photocopy alert <br>-9103 Recapture alert <br>-9104 Photoshop alert <br>-9107 Reflection alert <br>-9108 Blur alert <br>-9109 Alert not enabled</p>
     * @param boolean $AllowExpiredDocument <p>Indicates whether expired identity documents are allowed to enter the liveness detection process. This parameter takes effect only when the document type is Hong Kong (China) identity card (HKID). <br>true (default): Expired Hong Kong (China) identity cards are allowed to enter the liveness detection process. <br>false: Expired Hong Kong (China) identity cards are rejected and cannot enter the liveness detection process.</p>
     * @param string $Version <p>Service edition, including the basic edition (BASIC) and the PLUS edition (PLUS).</p><p>Valid values:</p><ul><li>BASIC: Basic edition</li><li>PLUS: PLUS edition</li></ul><p>Default value: BASIC</p>
     * @param string $OcrWaitPolicy <p>When <code>CheckMode = 1</code>, this parameter defines the waiting policy for the OCR recognition result.</p><p>Valid values:</p><ul><li>required: Wait until the OCR verification result is confirmed before proceeding to liveness detection.</li><li>skip: Proceed to liveness detection directly after the document photo is submitted.</li></ul><p>Default value: required</p>
     * @param string $WebhookUrl <p>Verification status callback URL. After this URL is configured, the service actively pushes notifications to this URL when the process ends. Leave it empty to disable the callback capability. As callbacks cannot be guaranteed to be 100% reliable, it is recommended to use them together with a polling mechanism to ensure that the final status is obtained.</p>
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

        if (array_key_exists("OcrWaitPolicy",$param) and $param["OcrWaitPolicy"] !== null) {
            $this->OcrWaitPolicy = $param["OcrWaitPolicy"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }
    }
}
