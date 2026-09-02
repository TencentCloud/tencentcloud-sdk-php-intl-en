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
 * CreateSandboxLLMAuditRule request structure.
 *
 * @method string getRuleName() Obtain Rule name
Input parameter limit: length 1-128
 * @method void setRuleName(string $RuleName) Set Rule name
Input parameter limit: length 1-128
 * @method string getLevel() Obtain Rule level
Enumeration values:
INFO: notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Rule level
Enumeration values:
INFO: notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method string getBelongAssetType() Obtain Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method array getSystemRuleIDList() Obtain Referenced LLM audit system rule ID list (string literal, provided by LLMRules[].RuleID / ToolCallRules[].RuleID returned by DescribeSandboxLLMAuditSystemRuleList)
Input parameter limit: not empty, up to 1000; each element length 1-128.
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set Referenced LLM audit system rule ID list (string literal, provided by LLMRules[].RuleID / ToolCallRules[].RuleID returned by DescribeSandboxLLMAuditSystemRuleList)
Input parameter limit: not empty, up to 1000; each element length 1-128.
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Effective scope
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Effective scope
 * @method string getStatus() Obtain Initial status
Enumeration values:
ON: enabled.
OFF: disabled.
 * @method void setStatus(string $Status) Set Initial status
Enumeration values:
ON: enabled.
OFF: disabled.
 * @method string getRuleAction() Obtain Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
 * @method void setRuleAction(string $RuleAction) Set Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
 */
class CreateSandboxLLMAuditRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name
Input parameter limit: length 1-128
     */
    public $RuleName;

    /**
     * @var string Rule level
Enumeration values:
INFO: notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     */
    public $BelongAssetType;

    /**
     * @var array Referenced LLM audit system rule ID list (string literal, provided by LLMRules[].RuleID / ToolCallRules[].RuleID returned by DescribeSandboxLLMAuditSystemRuleList)
Input parameter limit: not empty, up to 1000; each element length 1-128.
     */
    public $SystemRuleIDList;

    /**
     * @var TrafficSandboxEffectScope Effective scope
     */
    public $EffectScope;

    /**
     * @var string Initial status
Enumeration values:
ON: enabled.
OFF: disabled.
     */
    public $Status;

    /**
     * @var string Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
     */
    public $RuleAction;

    /**
     * @param string $RuleName Rule name
Input parameter limit: length 1-128
     * @param string $Level Rule level
Enumeration values:
INFO: notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     * @param string $BelongAssetType Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     * @param array $SystemRuleIDList Referenced LLM audit system rule ID list (string literal, provided by LLMRules[].RuleID / ToolCallRules[].RuleID returned by DescribeSandboxLLMAuditSystemRuleList)
Input parameter limit: not empty, up to 1000; each element length 1-128.
     * @param TrafficSandboxEffectScope $EffectScope Effective scope
     * @param string $Status Initial status
Enumeration values:
ON: enabled.
OFF: disabled.
     * @param string $RuleAction Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
