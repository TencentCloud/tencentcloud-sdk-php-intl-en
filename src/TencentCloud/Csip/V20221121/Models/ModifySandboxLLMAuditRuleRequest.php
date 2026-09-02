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
 * ModifySandboxLLMAuditRule request structure.
 *
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
Input parameter limit: length 1-128
Default value: no modification if not passed
 * @method void setRuleName(string $RuleName) Set Rule name
Input parameter limit: length 1-128
Default value: no modification if not passed
 * @method string getLevel() Obtain Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: medium-risk
HIGH: high risk
CRITICAL: Critical
Default value: no modification if not passed
 * @method void setLevel(string $Level) Set Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: medium-risk
HIGH: high risk
CRITICAL: Critical
Default value: no modification if not passed
 * @method array getSystemRuleIDList() Obtain Referenced LLM audit system rule ID list (string)
Input parameter limit: if not passed, it means no modification; if passed, it overwrites all values, length 1-1000; each element length 1-128.
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set Referenced LLM audit system rule ID list (string)
Input parameter limit: if not passed, it means no modification; if passed, it overwrites all values, length 1-1000; each element length 1-128.
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Effective scope
Default value: no modification if not passed
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Effective scope
Default value: no modification if not passed
 * @method string getRuleAction() Obtain Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
Default value: no modification if not passed
 * @method void setRuleAction(string $RuleAction) Set Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
Default value: no modification if not passed
 * @method string getStatus() Obtain Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: no modification if not passed
 * @method void setStatus(string $Status) Set Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: no modification if not passed
 */
class ModifySandboxLLMAuditRuleRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $ID;

    /**
     * @var string Rule name
Input parameter limit: length 1-128
Default value: no modification if not passed
     */
    public $RuleName;

    /**
     * @var string Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: medium-risk
HIGH: high risk
CRITICAL: Critical
Default value: no modification if not passed
     */
    public $Level;

    /**
     * @var array Referenced LLM audit system rule ID list (string)
Input parameter limit: if not passed, it means no modification; if passed, it overwrites all values, length 1-1000; each element length 1-128.
     */
    public $SystemRuleIDList;

    /**
     * @var TrafficSandboxEffectScope Effective scope
Default value: no modification if not passed
     */
    public $EffectScope;

    /**
     * @var string Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
Default value: no modification if not passed
     */
    public $RuleAction;

    /**
     * @var string Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: no modification if not passed
     */
    public $Status;

    /**
     * @param integer $ID Rule ID
     * @param string $RuleName Rule name
Input parameter limit: length 1-128
Default value: no modification if not passed
     * @param string $Level Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: medium-risk
HIGH: high risk
CRITICAL: Critical
Default value: no modification if not passed
     * @param array $SystemRuleIDList Referenced LLM audit system rule ID list (string)
Input parameter limit: if not passed, it means no modification; if passed, it overwrites all values, length 1-1000; each element length 1-128.
     * @param TrafficSandboxEffectScope $EffectScope Effective scope
Default value: no modification if not passed
     * @param string $RuleAction Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
Default value: no modification if not passed
     * @param string $Status Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: no modification if not passed
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
