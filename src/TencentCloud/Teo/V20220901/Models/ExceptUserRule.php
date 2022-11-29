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
 * The settings of the exception rule
 *
 * @method string getRuleName() Obtain The rule name.
 * @method void setRuleName(string $RuleName) Set The rule name.
 * @method string getAction() Obtain The rule action. It only supports the value `skip`, which indicates skipping all managed rules.
 * @method void setAction(string $Action) Set The rule action. It only supports the value `skip`, which indicates skipping all managed rules.
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
 * @method integer getRuleID() Obtain The rule ID, which is automatically created and only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is automatically created and only used as an output parameter.
 * @method string getUpdateTime() Obtain The update time. If it is null, the current date and time is recorded.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The update time. If it is null, the current date and time is recorded.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getExceptUserRuleConditions() Obtain The matching condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptUserRuleConditions(array $ExceptUserRuleConditions) Set The matching condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExceptUserRuleScope getExceptUserRuleScope() Obtain The scope to which the exception rule applies.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptUserRuleScope(ExceptUserRuleScope $ExceptUserRuleScope) Set The scope to which the exception rule applies.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRulePriority() Obtain The rule priority. Value range: 0-100. If it is null, it defaults to 0.
 * @method void setRulePriority(integer $RulePriority) Set The rule priority. Value range: 0-100. If it is null, it defaults to 0.
 */
class ExceptUserRule extends AbstractModel
{
    /**
     * @var string The rule name.
     */
    public $RuleName;

    /**
     * @var string The rule action. It only supports the value `skip`, which indicates skipping all managed rules.
     */
    public $Action;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     */
    public $RuleStatus;

    /**
     * @var integer The rule ID, which is automatically created and only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var string The update time. If it is null, the current date and time is recorded.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array The matching condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptUserRuleConditions;

    /**
     * @var ExceptUserRuleScope The scope to which the exception rule applies.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptUserRuleScope;

    /**
     * @var integer The rule priority. Value range: 0-100. If it is null, it defaults to 0.
     */
    public $RulePriority;

    /**
     * @param string $RuleName The rule name.
     * @param string $Action The rule action. It only supports the value `skip`, which indicates skipping all managed rules.
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
     * @param integer $RuleID The rule ID, which is automatically created and only used as an output parameter.
     * @param string $UpdateTime The update time. If it is null, the current date and time is recorded.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $ExceptUserRuleConditions The matching condition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExceptUserRuleScope $ExceptUserRuleScope The scope to which the exception rule applies.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RulePriority The rule priority. Value range: 0-100. If it is null, it defaults to 0.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExceptUserRuleConditions",$param) and $param["ExceptUserRuleConditions"] !== null) {
            $this->ExceptUserRuleConditions = [];
            foreach ($param["ExceptUserRuleConditions"] as $key => $value){
                $obj = new ExceptUserRuleCondition();
                $obj->deserialize($value);
                array_push($this->ExceptUserRuleConditions, $obj);
            }
        }

        if (array_key_exists("ExceptUserRuleScope",$param) and $param["ExceptUserRuleScope"] !== null) {
            $this->ExceptUserRuleScope = new ExceptUserRuleScope();
            $this->ExceptUserRuleScope->deserialize($param["ExceptUserRuleScope"]);
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }
    }
}
