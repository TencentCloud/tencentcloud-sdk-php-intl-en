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
 * Information of the sub-policy of the preset policy for abnormal processes
 *
 * @method string getRuleId() Obtain Sub-policy ID
 * @method void setRuleId(string $RuleId) Set Sub-policy ID
 * @method boolean getIsEnable() Obtain Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
 * @method void setIsEnable(boolean $IsEnable) Set Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
 * @method string getRuleMode() Obtain Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method void setRuleMode(string $RuleMode) Set Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method string getRuleType() Obtain Behavior type detected by the sub-policy
`PROXY_TOOL`: Proxy.
`TRANSFER_CONTROL`: Lateral movement.
`ATTACK_CMD`: Malicious command.
`REVERSE_SHELL`: Reverse shell.
`FILELESS`: Fileless execution.
`RISK_CMD`: High-risk command.
`ABNORMAL_CHILD_PROC`: Unusual start found in the child process of the sensitive service.
 * @method void setRuleType(string $RuleType) Set Behavior type detected by the sub-policy
`PROXY_TOOL`: Proxy.
`TRANSFER_CONTROL`: Lateral movement.
`ATTACK_CMD`: Malicious command.
`REVERSE_SHELL`: Reverse shell.
`FILELESS`: Fileless execution.
`RISK_CMD`: High-risk command.
`ABNORMAL_CHILD_PROC`: Unusual start found in the child process of the sensitive service.
 * @method string getRuleLevel() Obtain Severity. Valid values: `HIGH` (high); `MIDDLE` (medium); `LOW` (low).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleLevel(string $RuleLevel) Set Severity. Valid values: `HIGH` (high); `MIDDLE` (medium); `LOW` (low).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AbnormalProcessSystemChildRuleInfo extends AbstractModel
{
    /**
     * @var string Sub-policy ID
     */
    public $RuleId;

    /**
     * @var boolean Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
     */
    public $IsEnable;

    /**
     * @var string Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     */
    public $RuleMode;

    /**
     * @var string Behavior type detected by the sub-policy
`PROXY_TOOL`: Proxy.
`TRANSFER_CONTROL`: Lateral movement.
`ATTACK_CMD`: Malicious command.
`REVERSE_SHELL`: Reverse shell.
`FILELESS`: Fileless execution.
`RISK_CMD`: High-risk command.
`ABNORMAL_CHILD_PROC`: Unusual start found in the child process of the sensitive service.
     */
    public $RuleType;

    /**
     * @var string Severity. Valid values: `HIGH` (high); `MIDDLE` (medium); `LOW` (low).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleLevel;

    /**
     * @param string $RuleId Sub-policy ID
     * @param boolean $IsEnable Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
     * @param string $RuleMode Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     * @param string $RuleType Behavior type detected by the sub-policy
`PROXY_TOOL`: Proxy.
`TRANSFER_CONTROL`: Lateral movement.
`ATTACK_CMD`: Malicious command.
`REVERSE_SHELL`: Reverse shell.
`FILELESS`: Fileless execution.
`RISK_CMD`: High-risk command.
`ABNORMAL_CHILD_PROC`: Unusual start found in the child process of the sensitive service.
     * @param string $RuleLevel Severity. Valid values: `HIGH` (high); `MIDDLE` (medium); `LOW` (low).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }
    }
}
