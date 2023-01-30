<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Description of the abnormal container process event at runtime
 *
 * @method string getDescription() Obtain Event rule
 * @method void setDescription(string $Description) Set Event rule
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getRemark() Obtain Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AbnormalProcessChildRuleInfo getMatchRule() Obtain Details of the hit rule
 * @method void setMatchRule(AbnormalProcessChildRuleInfo $MatchRule) Set Details of the hit rule
 * @method string getRuleName() Obtain Name of the hit rule. Valid values: `PROXY_TOOL` (proxy); `TRANSFER_CONTROL` (lateral movement); `ATTACK_CMD` (malicious command); `REVERSE_SHELL` (reverse shell); `FILELESS` (fileless execution); `RISK_CMD` (high-risk command); `ABNORMAL_CHILD_PROC` (unusual start found in the child process of the sensitive service); `USER_DEFINED_RULE` (custom rule).
 * @method void setRuleName(string $RuleName) Set Name of the hit rule. Valid values: `PROXY_TOOL` (proxy); `TRANSFER_CONTROL` (lateral movement); `ATTACK_CMD` (malicious command); `REVERSE_SHELL` (reverse shell); `FILELESS` (fileless execution); `RISK_CMD` (high-risk command); `ABNORMAL_CHILD_PROC` (unusual start found in the child process of the sensitive service); `USER_DEFINED_RULE` (custom rule).
 * @method string getRuleId() Obtain ID of the hit rule
 * @method void setRuleId(string $RuleId) Set ID of the hit rule
 * @method string getOperationTime() Obtain Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationTime(string $OperationTime) Set Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain Name of the hit policy. Valid values: `SYSTEM_DEFINED_RULE` (preset policy); name of the custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Name of the hit policy. Valid values: `SYSTEM_DEFINED_RULE` (preset policy); name of the custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AbnormalProcessEventDescription extends AbstractModel
{
    /**
     * @var string Event rule
     */
    public $Description;

    /**
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var AbnormalProcessChildRuleInfo Details of the hit rule
     */
    public $MatchRule;

    /**
     * @var string Name of the hit rule. Valid values: `PROXY_TOOL` (proxy); `TRANSFER_CONTROL` (lateral movement); `ATTACK_CMD` (malicious command); `REVERSE_SHELL` (reverse shell); `FILELESS` (fileless execution); `RISK_CMD` (high-risk command); `ABNORMAL_CHILD_PROC` (unusual start found in the child process of the sensitive service); `USER_DEFINED_RULE` (custom rule).
     */
    public $RuleName;

    /**
     * @var string ID of the hit rule
     */
    public $RuleId;

    /**
     * @var string Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationTime;

    /**
     * @var string Name of the hit policy. Valid values: `SYSTEM_DEFINED_RULE` (preset policy); name of the custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @param string $Description Event rule
     * @param string $Solution Solution
     * @param string $Remark Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AbnormalProcessChildRuleInfo $MatchRule Details of the hit rule
     * @param string $RuleName Name of the hit rule. Valid values: `PROXY_TOOL` (proxy); `TRANSFER_CONTROL` (lateral movement); `ATTACK_CMD` (malicious command); `REVERSE_SHELL` (reverse shell); `FILELESS` (fileless execution); `RISK_CMD` (high-risk command); `ABNORMAL_CHILD_PROC` (unusual start found in the child process of the sensitive service); `USER_DEFINED_RULE` (custom rule).
     * @param string $RuleId ID of the hit rule
     * @param string $OperationTime Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName Name of the hit policy. Valid values: `SYSTEM_DEFINED_RULE` (preset policy); name of the custom policy.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new AbnormalProcessChildRuleInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
