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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration Scope for Kubernetes API Exception Event Rules
 *
 * @method string getAction() Obtain <p>Execution action. The blocklist rule only supports RULE_MODE_ALERT (alert) and no longer supports RULE_MODE_RELEASE/PASS (allow). To allow, use the allowlist API ModifyK8sApiAbnormalWhitelist.</p>
 * @method void setAction(string $Action) Set <p>Execution action. The blocklist rule only supports RULE_MODE_ALERT (alert) and no longer supports RULE_MODE_RELEASE/PASS (allow). To allow, use the allowlist API ModifyK8sApiAbnormalWhitelist.</p>
 * @method string getScope() Obtain <p>Scope.<br>System events:<br>ANONYMOUS_ACCESS: anonymous access<br>ABNORMAL_UA_REQ: abnormal UA request<br>ANONYMOUS_ABNORMAL_PERMISSION: anonymous user permission change<br>GET_CREDENTIALS: credential information acquisition<br>MOUNT_SENSITIVE_PATH: sensitive path mounting<br>COMMAND_RUN: command execution<br>PRIVILEGE_CONTAINER: privileged container<br>EXCEPTION_CRONTAB_TASK: abnormal scheduled task<br>STATICS_POD: static Pod creation<br>ABNORMAL_CREATE_POD: abnormal Pod creation<br>USER_DEFINED: user-defined</p>
 * @method void setScope(string $Scope) Set <p>Scope.<br>System events:<br>ANONYMOUS_ACCESS: anonymous access<br>ABNORMAL_UA_REQ: abnormal UA request<br>ANONYMOUS_ABNORMAL_PERMISSION: anonymous user permission change<br>GET_CREDENTIALS: credential information acquisition<br>MOUNT_SENSITIVE_PATH: sensitive path mounting<br>COMMAND_RUN: command execution<br>PRIVILEGE_CONTAINER: privileged container<br>EXCEPTION_CRONTAB_TASK: abnormal scheduled task<br>STATICS_POD: static Pod creation<br>ABNORMAL_CREATE_POD: abnormal Pod creation<br>USER_DEFINED: user-defined</p>
 * @method boolean getIsDelete() Obtain <p>Whether it has been deleted.</p>
 * @method void setIsDelete(boolean $IsDelete) Set <p>Whether it has been deleted.</p>
 * @method string getRiskLevel() Obtain <p>Threat level: HIGH, MIDDLE, LOW, and NOTICE.</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Threat level: HIGH, MIDDLE, LOW, and NOTICE.</p>
 * @method string getRuleTypeZH() Obtain <p>Description of the rule type.</p>
 * @method void setRuleTypeZH(string $RuleTypeZH) Set <p>Description of the rule type.</p>
 * @method boolean getStatus() Obtain <p>Switch status (true: on, false: off) applicable to system rules.</p>
 * @method void setStatus(boolean $Status) Set <p>Switch status (true: on, false: off) applicable to system rules.</p>
 */
class K8sApiAbnormalRuleScopeInfo extends AbstractModel
{
    /**
     * @var string <p>Execution action. The blocklist rule only supports RULE_MODE_ALERT (alert) and no longer supports RULE_MODE_RELEASE/PASS (allow). To allow, use the allowlist API ModifyK8sApiAbnormalWhitelist.</p>
     */
    public $Action;

    /**
     * @var string <p>Scope.<br>System events:<br>ANONYMOUS_ACCESS: anonymous access<br>ABNORMAL_UA_REQ: abnormal UA request<br>ANONYMOUS_ABNORMAL_PERMISSION: anonymous user permission change<br>GET_CREDENTIALS: credential information acquisition<br>MOUNT_SENSITIVE_PATH: sensitive path mounting<br>COMMAND_RUN: command execution<br>PRIVILEGE_CONTAINER: privileged container<br>EXCEPTION_CRONTAB_TASK: abnormal scheduled task<br>STATICS_POD: static Pod creation<br>ABNORMAL_CREATE_POD: abnormal Pod creation<br>USER_DEFINED: user-defined</p>
     */
    public $Scope;

    /**
     * @var boolean <p>Whether it has been deleted.</p>
     */
    public $IsDelete;

    /**
     * @var string <p>Threat level: HIGH, MIDDLE, LOW, and NOTICE.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Description of the rule type.</p>
     */
    public $RuleTypeZH;

    /**
     * @var boolean <p>Switch status (true: on, false: off) applicable to system rules.</p>
     */
    public $Status;

    /**
     * @param string $Action <p>Execution action. The blocklist rule only supports RULE_MODE_ALERT (alert) and no longer supports RULE_MODE_RELEASE/PASS (allow). To allow, use the allowlist API ModifyK8sApiAbnormalWhitelist.</p>
     * @param string $Scope <p>Scope.<br>System events:<br>ANONYMOUS_ACCESS: anonymous access<br>ABNORMAL_UA_REQ: abnormal UA request<br>ANONYMOUS_ABNORMAL_PERMISSION: anonymous user permission change<br>GET_CREDENTIALS: credential information acquisition<br>MOUNT_SENSITIVE_PATH: sensitive path mounting<br>COMMAND_RUN: command execution<br>PRIVILEGE_CONTAINER: privileged container<br>EXCEPTION_CRONTAB_TASK: abnormal scheduled task<br>STATICS_POD: static Pod creation<br>ABNORMAL_CREATE_POD: abnormal Pod creation<br>USER_DEFINED: user-defined</p>
     * @param boolean $IsDelete <p>Whether it has been deleted.</p>
     * @param string $RiskLevel <p>Threat level: HIGH, MIDDLE, LOW, and NOTICE.</p>
     * @param string $RuleTypeZH <p>Description of the rule type.</p>
     * @param boolean $Status <p>Switch status (true: on, false: off) applicable to system rules.</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleTypeZH",$param) and $param["RuleTypeZH"] !== null) {
            $this->RuleTypeZH = $param["RuleTypeZH"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
