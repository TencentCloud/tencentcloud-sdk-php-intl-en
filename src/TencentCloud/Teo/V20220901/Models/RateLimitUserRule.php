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
 * Rate limit rule
 *
 * @method integer getThreshold() Obtain The request threshold. Value range: 0-4294967294.
 * @method void setThreshold(integer $Threshold) Set The request threshold. Value range: 0-4294967294.
 * @method integer getPeriod() Obtain The statistical period. The value can be 10, 20, 30, 40, 50, or 60 seconds.
 * @method void setPeriod(integer $Period) Set The statistical period. The value can be 10, 20, 30, 40, 50, or 60 seconds.
 * @method string getRuleName() Obtain The rule name, which consists of only letters, digits, and underscores and cannot start with an underscore.
 * @method void setRuleName(string $RuleName) Set The rule name, which consists of only letters, digits, and underscores and cannot start with an underscore.
 * @method string getAction() Obtain The action. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block</li>
<li>`alg`: JavaScript challenge</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block</li>
<li>`alg`: JavaScript challenge</li>
 * @method integer getPunishTime() Obtain The amount of time taken to perform the action. Value range: 0 seconds - 2 days.
 * @method void setPunishTime(integer $PunishTime) Set The amount of time taken to perform the action. Value range: 0 seconds - 2 days.
 * @method string getPunishTimeUnit() Obtain The time unit. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set The time unit. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default value: on</li>
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default value: on</li>
 * @method array getAclConditions() Obtain The rule details.
 * @method void setAclConditions(array $AclConditions) Set The rule details.
 * @method integer getRulePriority() Obtain The rule weight. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set The rule weight. Value range: 0-100.
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFreqFields() Obtain The filter. Values:
<li>`host`: Domain name</li>
<li>`sip`: Client IP</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFreqFields(array $FreqFields) Set The filter. Values:
<li>`host`: Domain name</li>
<li>`sip`: Client IP</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer The request threshold. Value range: 0-4294967294.
     */
    public $Threshold;

    /**
     * @var integer The statistical period. The value can be 10, 20, 30, 40, 50, or 60 seconds.
     */
    public $Period;

    /**
     * @var string The rule name, which consists of only letters, digits, and underscores and cannot start with an underscore.
     */
    public $RuleName;

    /**
     * @var string The action. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block</li>
<li>`alg`: JavaScript challenge</li>
     */
    public $Action;

    /**
     * @var integer The amount of time taken to perform the action. Value range: 0 seconds - 2 days.
     */
    public $PunishTime;

    /**
     * @var string The time unit. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>
     */
    public $PunishTimeUnit;

    /**
     * @var string The rule status. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default value: on</li>
     */
    public $RuleStatus;

    /**
     * @var array The rule details.
     */
    public $AclConditions;

    /**
     * @var integer The rule weight. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var array The filter. Values:
<li>`host`: Domain name</li>
<li>`sip`: Client IP</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FreqFields;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $Threshold The request threshold. Value range: 0-4294967294.
     * @param integer $Period The statistical period. The value can be 10, 20, 30, 40, 50, or 60 seconds.
     * @param string $RuleName The rule name, which consists of only letters, digits, and underscores and cannot start with an underscore.
     * @param string $Action The action. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block</li>
<li>`alg`: JavaScript challenge</li>
     * @param integer $PunishTime The amount of time taken to perform the action. Value range: 0 seconds - 2 days.
     * @param string $PunishTimeUnit The time unit. Values:
<li>`second`: Second</li>
<li>`minutes`: Minute</li>
<li>`hour`: Hour</li>
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
<li>Default value: on</li>
     * @param array $AclConditions The rule details.
     * @param integer $RulePriority The rule weight. Value range: 0-100.
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FreqFields The filter. Values:
<li>`host`: Domain name</li>
<li>`sip`: Client IP</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
