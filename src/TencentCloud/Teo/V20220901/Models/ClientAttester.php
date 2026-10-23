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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the authentication option configuration.
 *
 * @method string getId() Obtain <p>Option ID for certification.</p>
 * @method void setId(string $Id) Set <p>Option ID for certification.</p>
 * @method string getName() Obtain <p>Option name for authentication.</p>
 * @method void setName(string $Name) Set <p>Option name for authentication.</p>
 * @method string getType() Obtain <p>Authentication rule type. Returned only in the response. Valid values:</p><li>PRESET: System preset rule. Only AttesterDuration can be modified.</li><li>CUSTOM: User-defined rule.</li>
 * @method void setType(string $Type) Set <p>Authentication rule type. Returned only in the response. Valid values:</p><li>PRESET: System preset rule. Only AttesterDuration can be modified.</li><li>CUSTOM: User-defined rule.</li>
 * @method string getAttesterSource() Obtain <p>Authentication method. Valid values:</p><li>TC-RCE: Use risk identification RCE for authentication;</li><li>TC-CAPTCHA: Use Tianyu verification code for authentication;</li><li>TC-EO-CAPTCHA: Use EdgeOne human-machine verification for authentication.</li>
 * @method void setAttesterSource(string $AttesterSource) Set <p>Authentication method. Valid values:</p><li>TC-RCE: Use risk identification RCE for authentication;</li><li>TC-CAPTCHA: Use Tianyu verification code for authentication;</li><li>TC-EO-CAPTCHA: Use EdgeOne human-machine verification for authentication.</li>
 * @method string getAttesterDuration() Obtain <p>Authentication validity time. Default value is 60s. Supported measurement units:</p><li>s: second, value ranges from 60 to 43200.</li><li>m: minute, value ranges from 1 to 720.</li><li>h: hour, value ranges from 1 to 12.</li>
 * @method void setAttesterDuration(string $AttesterDuration) Set <p>Authentication validity time. Default value is 60s. Supported measurement units:</p><li>s: second, value ranges from 60 to 43200.</li><li>m: minute, value ranges from 1 to 720.</li><li>h: hour, value ranges from 1 to 12.</li>
 * @method string getUsageLimit() Obtain <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
 * @method void setUsageLimit(string $UsageLimit) Set <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
 * @method integer getMaxUsageCount() Obtain <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
 * @method void setMaxUsageCount(integer $MaxUsageCount) Set <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
 * @method TCRCEOption getTCRCEOption() Obtain <p>Configuration message for TC-RCE certification.</p><li>This field is required when the AttesterSource parameter value is TC-RCE.</li>
 * @method void setTCRCEOption(TCRCEOption $TCRCEOption) Set <p>Configuration message for TC-RCE certification.</p><li>This field is required when the AttesterSource parameter value is TC-RCE.</li>
 * @method TCCaptchaOption getTCCaptchaOption() Obtain <p>Configuration message for TC-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-CAPTCHA.</li>
 * @method void setTCCaptchaOption(TCCaptchaOption $TCCaptchaOption) Set <p>Configuration message for TC-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-CAPTCHA.</li>
 * @method TCEOCaptchaOption getTCEOCaptchaOption() Obtain <p>Configuration message for TC-EO-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-EO-CAPTCHA.</li>
 * @method void setTCEOCaptchaOption(TCEOCaptchaOption $TCEOCaptchaOption) Set <p>Configuration message for TC-EO-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-EO-CAPTCHA.</li>
 */
class ClientAttester extends AbstractModel
{
    /**
     * @var string <p>Option ID for certification.</p>
     */
    public $Id;

    /**
     * @var string <p>Option name for authentication.</p>
     */
    public $Name;

    /**
     * @var string <p>Authentication rule type. Returned only in the response. Valid values:</p><li>PRESET: System preset rule. Only AttesterDuration can be modified.</li><li>CUSTOM: User-defined rule.</li>
     */
    public $Type;

    /**
     * @var string <p>Authentication method. Valid values:</p><li>TC-RCE: Use risk identification RCE for authentication;</li><li>TC-CAPTCHA: Use Tianyu verification code for authentication;</li><li>TC-EO-CAPTCHA: Use EdgeOne human-machine verification for authentication.</li>
     */
    public $AttesterSource;

    /**
     * @var string <p>Authentication validity time. Default value is 60s. Supported measurement units:</p><li>s: second, value ranges from 60 to 43200.</li><li>m: minute, value ranges from 1 to 720.</li><li>h: hour, value ranges from 1 to 12.</li>
     */
    public $AttesterDuration;

    /**
     * @var string <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
     */
    public $UsageLimit;

    /**
     * @var integer <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
     */
    public $MaxUsageCount;

    /**
     * @var TCRCEOption <p>Configuration message for TC-RCE certification.</p><li>This field is required when the AttesterSource parameter value is TC-RCE.</li>
     */
    public $TCRCEOption;

    /**
     * @var TCCaptchaOption <p>Configuration message for TC-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-CAPTCHA.</li>
     */
    public $TCCaptchaOption;

    /**
     * @var TCEOCaptchaOption <p>Configuration message for TC-EO-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-EO-CAPTCHA.</li>
     */
    public $TCEOCaptchaOption;

    /**
     * @param string $Id <p>Option ID for certification.</p>
     * @param string $Name <p>Option name for authentication.</p>
     * @param string $Type <p>Authentication rule type. Returned only in the response. Valid values:</p><li>PRESET: System preset rule. Only AttesterDuration can be modified.</li><li>CUSTOM: User-defined rule.</li>
     * @param string $AttesterSource <p>Authentication method. Valid values:</p><li>TC-RCE: Use risk identification RCE for authentication;</li><li>TC-CAPTCHA: Use Tianyu verification code for authentication;</li><li>TC-EO-CAPTCHA: Use EdgeOne human-machine verification for authentication.</li>
     * @param string $AttesterDuration <p>Authentication validity time. Default value is 60s. Supported measurement units:</p><li>s: second, value ranges from 60 to 43200.</li><li>m: minute, value ranges from 1 to 720.</li><li>h: hour, value ranges from 1 to 12.</li>
     * @param string $UsageLimit <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
     * @param integer $MaxUsageCount <p>Whether to enable the usage limit for attestation results. </p><p>Valid values:</p><ul><li>on: Enabled</li><li>off: Disabled</li></ul><p>Default value: off</p>
     * @param TCRCEOption $TCRCEOption <p>Configuration message for TC-RCE certification.</p><li>This field is required when the AttesterSource parameter value is TC-RCE.</li>
     * @param TCCaptchaOption $TCCaptchaOption <p>Configuration message for TC-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-CAPTCHA.</li>
     * @param TCEOCaptchaOption $TCEOCaptchaOption <p>Configuration message for TC-EO-CAPTCHA certification.</p><li>This field is required when the AttesterSource parameter value is TC-EO-CAPTCHA.</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AttesterSource",$param) and $param["AttesterSource"] !== null) {
            $this->AttesterSource = $param["AttesterSource"];
        }

        if (array_key_exists("AttesterDuration",$param) and $param["AttesterDuration"] !== null) {
            $this->AttesterDuration = $param["AttesterDuration"];
        }

        if (array_key_exists("UsageLimit",$param) and $param["UsageLimit"] !== null) {
            $this->UsageLimit = $param["UsageLimit"];
        }

        if (array_key_exists("MaxUsageCount",$param) and $param["MaxUsageCount"] !== null) {
            $this->MaxUsageCount = $param["MaxUsageCount"];
        }

        if (array_key_exists("TCRCEOption",$param) and $param["TCRCEOption"] !== null) {
            $this->TCRCEOption = new TCRCEOption();
            $this->TCRCEOption->deserialize($param["TCRCEOption"]);
        }

        if (array_key_exists("TCCaptchaOption",$param) and $param["TCCaptchaOption"] !== null) {
            $this->TCCaptchaOption = new TCCaptchaOption();
            $this->TCCaptchaOption->deserialize($param["TCCaptchaOption"]);
        }

        if (array_key_exists("TCEOCaptchaOption",$param) and $param["TCEOCaptchaOption"] !== null) {
            $this->TCEOCaptchaOption = new TCEOCaptchaOption();
            $this->TCEOCaptchaOption->deserialize($param["TCEOCaptchaOption"]);
        }
    }
}
