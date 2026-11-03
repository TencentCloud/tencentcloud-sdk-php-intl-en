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
 * BOT rule structure for Web security.
 *
 * @method string getEnabled() Obtain Whether Bot management is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method void setEnabled(string $Enabled) Set Whether Bot management is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
 * @method BotManagementCustomRules getCustomRules() Obtain Custom rule for Bot management combines various types of crawlers and request behavior characteristics to precisely define bots and configure customized handling methods.
 * @method void setCustomRules(BotManagementCustomRules $CustomRules) Set Custom rule for Bot management combines various types of crawlers and request behavior characteristics to precisely define bots and configure customized handling methods.
 * @method BasicBotSettings getBasicBotSettings() Obtain Basic configuration of Bot management, which takes effect on all domains associated with the policy. It can be customized through CustomRules.
 * @method void setBasicBotSettings(BasicBotSettings $BasicBotSettings) Set Basic configuration of Bot management, which takes effect on all domains associated with the policy. It can be customized through CustomRules.
 * @method ClientAttestationRules getClientAttestationRules() Obtain Definition list of client authentication rules. This feature is in beta test. If needed, submit a ticket.
 * @method void setClientAttestationRules(ClientAttestationRules $ClientAttestationRules) Set Definition list of client authentication rules. This feature is in beta test. If needed, submit a ticket.
 * @method BrowserImpersonationDetection getBrowserImpersonationDetection() Obtain Configure browser spoofing identification rules (formerly active feature detection rules). Set the response page range for JavaScript injection, browser check options, and handling method for non-browser clients.
 * @method void setBrowserImpersonationDetection(BrowserImpersonationDetection $BrowserImpersonationDetection) Set Configure browser spoofing identification rules (formerly active feature detection rules). Set the response page range for JavaScript injection, browser check options, and handling method for non-browser clients.
 */
class BotManagement extends AbstractModel
{
    /**
     * @var string Whether Bot management is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     */
    public $Enabled;

    /**
     * @var BotManagementCustomRules Custom rule for Bot management combines various types of crawlers and request behavior characteristics to precisely define bots and configure customized handling methods.
     */
    public $CustomRules;

    /**
     * @var BasicBotSettings Basic configuration of Bot management, which takes effect on all domains associated with the policy. It can be customized through CustomRules.
     */
    public $BasicBotSettings;

    /**
     * @var ClientAttestationRules Definition list of client authentication rules. This feature is in beta test. If needed, submit a ticket.
     */
    public $ClientAttestationRules;

    /**
     * @var BrowserImpersonationDetection Configure browser spoofing identification rules (formerly active feature detection rules). Set the response page range for JavaScript injection, browser check options, and handling method for non-browser clients.
     */
    public $BrowserImpersonationDetection;

    /**
     * @param string $Enabled Whether Bot management is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li>
     * @param BotManagementCustomRules $CustomRules Custom rule for Bot management combines various types of crawlers and request behavior characteristics to precisely define bots and configure customized handling methods.
     * @param BasicBotSettings $BasicBotSettings Basic configuration of Bot management, which takes effect on all domains associated with the policy. It can be customized through CustomRules.
     * @param ClientAttestationRules $ClientAttestationRules Definition list of client authentication rules. This feature is in beta test. If needed, submit a ticket.
     * @param BrowserImpersonationDetection $BrowserImpersonationDetection Configure browser spoofing identification rules (formerly active feature detection rules). Set the response page range for JavaScript injection, browser check options, and handling method for non-browser clients.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = new BotManagementCustomRules();
            $this->CustomRules->deserialize($param["CustomRules"]);
        }

        if (array_key_exists("BasicBotSettings",$param) and $param["BasicBotSettings"] !== null) {
            $this->BasicBotSettings = new BasicBotSettings();
            $this->BasicBotSettings->deserialize($param["BasicBotSettings"]);
        }

        if (array_key_exists("ClientAttestationRules",$param) and $param["ClientAttestationRules"] !== null) {
            $this->ClientAttestationRules = new ClientAttestationRules();
            $this->ClientAttestationRules->deserialize($param["ClientAttestationRules"]);
        }

        if (array_key_exists("BrowserImpersonationDetection",$param) and $param["BrowserImpersonationDetection"] !== null) {
            $this->BrowserImpersonationDetection = new BrowserImpersonationDetection();
            $this->BrowserImpersonationDetection->deserialize($param["BrowserImpersonationDetection"]);
        }
    }
}
