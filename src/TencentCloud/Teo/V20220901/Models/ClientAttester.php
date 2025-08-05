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
 * @method string getId() Obtain Authentication option ID.
 * @method void setId(string $Id) Set Authentication option ID.
 * @method string getName() Obtain Specifies the authentication option name.
 * @method void setName(string $Name) Set Specifies the authentication option name.
 * @method string getType() Obtain Authentication rule type. only returned in the response. valid values:.
<li>PRESET: system PRESET rule. only AttesterDuration can be modified.</li>.
<Li>CUSTOM: user-defined rules.</li>.
 * @method void setType(string $Type) Set Authentication rule type. only returned in the response. valid values:.
<li>PRESET: system PRESET rule. only AttesterDuration can be modified.</li>.
<Li>CUSTOM: user-defined rules.</li>.
 * @method string getAttesterSource() Obtain Authentication method. valid values:.
<Li>TC-RCE: uses the full-stack risk control engine for authentication.</li>.
<Li>TC-CAPTCHA-Intl: specifies authentication using captcha-intl.</li>.
 * @method void setAttesterSource(string $AttesterSource) Set Authentication method. valid values:.
<Li>TC-RCE: uses the full-stack risk control engine for authentication.</li>.
<Li>TC-CAPTCHA-Intl: specifies authentication using captcha-intl.</li>.
 * @method string getAttesterDuration() Obtain Validity time of the authentication. defaults to 60s. supported measurement units:.
<Li>S: specifies seconds. value range: 60–43200.</li>.
<Li>M: specifies minutes. value range: 1–720.</li>.
<Li>H. specifies the hour. value range: 1–12.</li>.
 * @method void setAttesterDuration(string $AttesterDuration) Set Validity time of the authentication. defaults to 60s. supported measurement units:.
<Li>S: specifies seconds. value range: 60–43200.</li>.
<Li>M: specifies minutes. value range: 1–720.</li>.
<Li>H. specifies the hour. value range: 1–12.</li>.
 * @method TCRCEOption getTCRCEOption() Obtain TC-RCE authentication configuration message.
<li>Specifies the required field when the AttesterSource parameter value is TC-RCE.</li>.
 * @method void setTCRCEOption(TCRCEOption $TCRCEOption) Set TC-RCE authentication configuration message.
<li>Specifies the required field when the AttesterSource parameter value is TC-RCE.</li>.
 * @method TCCaptchaOption getTCCaptchaOption() Obtain Specifies the configuration message for TC-CAPTCHA certification.
<li>Specifies the required field when the AttesterSource parameter value is TC-CAPTCHA.</li>.
 * @method void setTCCaptchaOption(TCCaptchaOption $TCCaptchaOption) Set Specifies the configuration message for TC-CAPTCHA certification.
<li>Specifies the required field when the AttesterSource parameter value is TC-CAPTCHA.</li>.
 */
class ClientAttester extends AbstractModel
{
    /**
     * @var string Authentication option ID.
     */
    public $Id;

    /**
     * @var string Specifies the authentication option name.
     */
    public $Name;

    /**
     * @var string Authentication rule type. only returned in the response. valid values:.
<li>PRESET: system PRESET rule. only AttesterDuration can be modified.</li>.
<Li>CUSTOM: user-defined rules.</li>.
     */
    public $Type;

    /**
     * @var string Authentication method. valid values:.
<Li>TC-RCE: uses the full-stack risk control engine for authentication.</li>.
<Li>TC-CAPTCHA-Intl: specifies authentication using captcha-intl.</li>.
     */
    public $AttesterSource;

    /**
     * @var string Validity time of the authentication. defaults to 60s. supported measurement units:.
<Li>S: specifies seconds. value range: 60–43200.</li>.
<Li>M: specifies minutes. value range: 1–720.</li>.
<Li>H. specifies the hour. value range: 1–12.</li>.
     */
    public $AttesterDuration;

    /**
     * @var TCRCEOption TC-RCE authentication configuration message.
<li>Specifies the required field when the AttesterSource parameter value is TC-RCE.</li>.
     */
    public $TCRCEOption;

    /**
     * @var TCCaptchaOption Specifies the configuration message for TC-CAPTCHA certification.
<li>Specifies the required field when the AttesterSource parameter value is TC-CAPTCHA.</li>.
     */
    public $TCCaptchaOption;

    /**
     * @param string $Id Authentication option ID.
     * @param string $Name Specifies the authentication option name.
     * @param string $Type Authentication rule type. only returned in the response. valid values:.
<li>PRESET: system PRESET rule. only AttesterDuration can be modified.</li>.
<Li>CUSTOM: user-defined rules.</li>.
     * @param string $AttesterSource Authentication method. valid values:.
<Li>TC-RCE: uses the full-stack risk control engine for authentication.</li>.
<Li>TC-CAPTCHA-Intl: specifies authentication using captcha-intl.</li>.
     * @param string $AttesterDuration Validity time of the authentication. defaults to 60s. supported measurement units:.
<Li>S: specifies seconds. value range: 60–43200.</li>.
<Li>M: specifies minutes. value range: 1–720.</li>.
<Li>H. specifies the hour. value range: 1–12.</li>.
     * @param TCRCEOption $TCRCEOption TC-RCE authentication configuration message.
<li>Specifies the required field when the AttesterSource parameter value is TC-RCE.</li>.
     * @param TCCaptchaOption $TCCaptchaOption Specifies the configuration message for TC-CAPTCHA certification.
<li>Specifies the required field when the AttesterSource parameter value is TC-CAPTCHA.</li>.
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

        if (array_key_exists("TCRCEOption",$param) and $param["TCRCEOption"] !== null) {
            $this->TCRCEOption = new TCRCEOption();
            $this->TCRCEOption->deserialize($param["TCRCEOption"]);
        }

        if (array_key_exists("TCCaptchaOption",$param) and $param["TCCaptchaOption"] !== null) {
            $this->TCCaptchaOption = new TCCaptchaOption();
            $this->TCCaptchaOption->deserialize($param["TCCaptchaOption"]);
        }
    }
}
