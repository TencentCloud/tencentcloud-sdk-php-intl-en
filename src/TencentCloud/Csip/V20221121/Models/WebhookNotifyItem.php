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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A single notification item
 *
 * @method string getModule() Obtain <p>Module code (shares enumeration with ModifyNotifySettingAlert)<br>Enumeration values:<br>Vul: vulnerability and cloud security posture<br>Alert: alarm center<br>AkSk: Cloud API Risk Governance<br>Agent: client/host asset<br>LogAnalysis: log analysis</p>
 * @method void setModule(string $Module) Set <p>Module code (shares enumeration with ModifyNotifySettingAlert)<br>Enumeration values:<br>Vul: vulnerability and cloud security posture<br>Alert: alarm center<br>AkSk: Cloud API Risk Governance<br>Agent: client/host asset<br>LogAnalysis: log analysis</p>
 * @method string getSubModule() Obtain <p>Submodule code<br>Enumeration values (partial):<br>MALWARE_FILE: MALICIOUS FILE<br>MALWARE_PROCESS: MALICIOUS PROCESS<br>RISK_LOGIN: abnormal LOGIN<br>BRUTE_FORCE: password cracking<br>MALICIOUS_REQUEST: MALICIOUS REQUEST<br>HIGH_RISK_COMMAND: HIGH-RISK COMMAND<br>PRIVILEGE_ESCALATION: local PRIVILEGE ESCALATION<br>REVERSE_SHELL: REVERSE SHELL<br>NETWORK_ATTACK: NETWORK ATTACK<br>MULTI_BEHAVIOR_ATTACK: MULTI-BEHAVIOR ATTACK<br>AGENT_OFFLINE: client OFFLINE<br>AGENT_UNINSTALL: client uninstallation<br>For the complete enumeration, see DescribeWebhookNotifyItemTree</p>
 * @method void setSubModule(string $SubModule) Set <p>Submodule code<br>Enumeration values (partial):<br>MALWARE_FILE: MALICIOUS FILE<br>MALWARE_PROCESS: MALICIOUS PROCESS<br>RISK_LOGIN: abnormal LOGIN<br>BRUTE_FORCE: password cracking<br>MALICIOUS_REQUEST: MALICIOUS REQUEST<br>HIGH_RISK_COMMAND: HIGH-RISK COMMAND<br>PRIVILEGE_ESCALATION: local PRIVILEGE ESCALATION<br>REVERSE_SHELL: REVERSE SHELL<br>NETWORK_ATTACK: NETWORK ATTACK<br>MULTI_BEHAVIOR_ATTACK: MULTI-BEHAVIOR ATTACK<br>AGENT_OFFLINE: client OFFLINE<br>AGENT_UNINSTALL: client uninstallation<br>For the complete enumeration, see DescribeWebhookNotifyItemTree</p>
 * @method array getLevels() Obtain <p>Risk level collection<br>Enumeration values:<br>CRITICAL: Critical<br>HIGH: High risk<br>MEDIUM: Medium risk<br>LOW: Low risk<br>INFO: Notification<br>Submodules with unsupported levels pass an empty array</p>
 * @method void setLevels(array $Levels) Set <p>Risk level collection<br>Enumeration values:<br>CRITICAL: Critical<br>HIGH: High risk<br>MEDIUM: Medium risk<br>LOW: Low risk<br>INFO: Notification<br>Submodules with unsupported levels pass an empty array</p>
 * @method array getItems() Obtain <p>Processing status</p>
 * @method void setItems(array $Items) Set <p>Processing status</p>
 */
class WebhookNotifyItem extends AbstractModel
{
    /**
     * @var string <p>Module code (shares enumeration with ModifyNotifySettingAlert)<br>Enumeration values:<br>Vul: vulnerability and cloud security posture<br>Alert: alarm center<br>AkSk: Cloud API Risk Governance<br>Agent: client/host asset<br>LogAnalysis: log analysis</p>
     */
    public $Module;

    /**
     * @var string <p>Submodule code<br>Enumeration values (partial):<br>MALWARE_FILE: MALICIOUS FILE<br>MALWARE_PROCESS: MALICIOUS PROCESS<br>RISK_LOGIN: abnormal LOGIN<br>BRUTE_FORCE: password cracking<br>MALICIOUS_REQUEST: MALICIOUS REQUEST<br>HIGH_RISK_COMMAND: HIGH-RISK COMMAND<br>PRIVILEGE_ESCALATION: local PRIVILEGE ESCALATION<br>REVERSE_SHELL: REVERSE SHELL<br>NETWORK_ATTACK: NETWORK ATTACK<br>MULTI_BEHAVIOR_ATTACK: MULTI-BEHAVIOR ATTACK<br>AGENT_OFFLINE: client OFFLINE<br>AGENT_UNINSTALL: client uninstallation<br>For the complete enumeration, see DescribeWebhookNotifyItemTree</p>
     */
    public $SubModule;

    /**
     * @var array <p>Risk level collection<br>Enumeration values:<br>CRITICAL: Critical<br>HIGH: High risk<br>MEDIUM: Medium risk<br>LOW: Low risk<br>INFO: Notification<br>Submodules with unsupported levels pass an empty array</p>
     */
    public $Levels;

    /**
     * @var array <p>Processing status</p>
     */
    public $Items;

    /**
     * @param string $Module <p>Module code (shares enumeration with ModifyNotifySettingAlert)<br>Enumeration values:<br>Vul: vulnerability and cloud security posture<br>Alert: alarm center<br>AkSk: Cloud API Risk Governance<br>Agent: client/host asset<br>LogAnalysis: log analysis</p>
     * @param string $SubModule <p>Submodule code<br>Enumeration values (partial):<br>MALWARE_FILE: MALICIOUS FILE<br>MALWARE_PROCESS: MALICIOUS PROCESS<br>RISK_LOGIN: abnormal LOGIN<br>BRUTE_FORCE: password cracking<br>MALICIOUS_REQUEST: MALICIOUS REQUEST<br>HIGH_RISK_COMMAND: HIGH-RISK COMMAND<br>PRIVILEGE_ESCALATION: local PRIVILEGE ESCALATION<br>REVERSE_SHELL: REVERSE SHELL<br>NETWORK_ATTACK: NETWORK ATTACK<br>MULTI_BEHAVIOR_ATTACK: MULTI-BEHAVIOR ATTACK<br>AGENT_OFFLINE: client OFFLINE<br>AGENT_UNINSTALL: client uninstallation<br>For the complete enumeration, see DescribeWebhookNotifyItemTree</p>
     * @param array $Levels <p>Risk level collection<br>Enumeration values:<br>CRITICAL: Critical<br>HIGH: High risk<br>MEDIUM: Medium risk<br>LOW: Low risk<br>INFO: Notification<br>Submodules with unsupported levels pass an empty array</p>
     * @param array $Items <p>Processing status</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("SubModule",$param) and $param["SubModule"] !== null) {
            $this->SubModule = $param["SubModule"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = $param["Levels"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = $param["Items"];
        }
    }
}
