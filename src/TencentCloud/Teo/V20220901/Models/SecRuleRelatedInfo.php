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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC/WAF/Bot security rule information
 *
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getAction() Obtain Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method void setAction(string $Action) Set Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method string getRiskLevel() Obtain Risk level (only found in WAF logs). Values:
<li>`high risk`: High risk;</li>
<li>`middle risk`: Middle risk;</li>
<li>`low risk`: Low risk;</li>
<li>`unkonw`: Unknown.</li>
 * @method void setRiskLevel(string $RiskLevel) Set Risk level (only found in WAF logs). Values:
<li>`high risk`: High risk;</li>
<li>`middle risk`: Middle risk;</li>
<li>`low risk`: Low risk;</li>
<li>`unkonw`: Unknown.</li>
 * @method string getRuleLevel() Obtain Rule level. Values:
<li>`normal`: Moderate.</li>
 * @method void setRuleLevel(string $RuleLevel) Set Rule level. Values:
<li>`normal`: Moderate.</li>
 * @method string getDescription() Obtain Rule description.
 * @method void setDescription(string $Description) Set Rule description.
 * @method string getRuleTypeName() Obtain The rule type.
 * @method void setRuleTypeName(string $RuleTypeName) Set The rule type.
 * @method string getAttackContent() Obtain The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackContent(string $AttackContent) Set The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleType() Obtain The rule type. Values:
<li>`waf`: Tencent Cloud-managed rule</li>
<li>`acl`: Custom rule</li>
<li>`rate`: Rate limiting rule</li>
<li>`bot`: Bot rule</li>
 * @method void setRuleType(string $RuleType) Set The rule type. Values:
<li>`waf`: Tencent Cloud-managed rule</li>
<li>`acl`: Custom rule</li>
<li>`rate`: Rate limiting rule</li>
<li>`bot`: Bot rule</li>
 * @method boolean getRuleEnabled() Obtain Whether to enable the rule
 * @method void setRuleEnabled(boolean $RuleEnabled) Set Whether to enable the rule
 * @method boolean getRuleDeleted() Obtain Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
 * @method void setRuleDeleted(boolean $RuleDeleted) Set Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
 * @method boolean getAlarmEnabled() Obtain Whether to enable alerting for this rule
 * @method void setAlarmEnabled(boolean $AlarmEnabled) Set Whether to enable alerting for this rule
 */
class SecRuleRelatedInfo extends AbstractModel
{
    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     */
    public $Action;

    /**
     * @var string Risk level (only found in WAF logs). Values:
<li>`high risk`: High risk;</li>
<li>`middle risk`: Middle risk;</li>
<li>`low risk`: Low risk;</li>
<li>`unkonw`: Unknown.</li>
     */
    public $RiskLevel;

    /**
     * @var string Rule level. Values:
<li>`normal`: Moderate.</li>
     */
    public $RuleLevel;

    /**
     * @var string Rule description.
     */
    public $Description;

    /**
     * @var string The rule type.
     */
    public $RuleTypeName;

    /**
     * @var string The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackContent;

    /**
     * @var string The rule type. Values:
<li>`waf`: Tencent Cloud-managed rule</li>
<li>`acl`: Custom rule</li>
<li>`rate`: Rate limiting rule</li>
<li>`bot`: Bot rule</li>
     */
    public $RuleType;

    /**
     * @var boolean Whether to enable the rule
     */
    public $RuleEnabled;

    /**
     * @var boolean Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
     */
    public $RuleDeleted;

    /**
     * @var boolean Whether to enable alerting for this rule
     */
    public $AlarmEnabled;

    /**
     * @param integer $RuleId The rule ID.
     * @param string $Action Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     * @param string $RiskLevel Risk level (only found in WAF logs). Values:
<li>`high risk`: High risk;</li>
<li>`middle risk`: Middle risk;</li>
<li>`low risk`: Low risk;</li>
<li>`unkonw`: Unknown.</li>
     * @param string $RuleLevel Rule level. Values:
<li>`normal`: Moderate.</li>
     * @param string $Description Rule description.
     * @param string $RuleTypeName The rule type.
     * @param string $AttackContent The attack content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleType The rule type. Values:
<li>`waf`: Tencent Cloud-managed rule</li>
<li>`acl`: Custom rule</li>
<li>`rate`: Rate limiting rule</li>
<li>`bot`: Bot rule</li>
     * @param boolean $RuleEnabled Whether to enable the rule
     * @param boolean $RuleDeleted Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
     * @param boolean $AlarmEnabled Whether to enable alerting for this rule
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleEnabled",$param) and $param["RuleEnabled"] !== null) {
            $this->RuleEnabled = $param["RuleEnabled"];
        }

        if (array_key_exists("RuleDeleted",$param) and $param["RuleDeleted"] !== null) {
            $this->RuleDeleted = $param["RuleDeleted"];
        }

        if (array_key_exists("AlarmEnabled",$param) and $param["AlarmEnabled"] !== null) {
            $this->AlarmEnabled = $param["AlarmEnabled"];
        }
    }
}
