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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rate limit rule
 *
 * @method integer getThreshold() Obtain Rate threshold
 * @method void setThreshold(integer $Threshold) Set Rate threshold
 * @method integer getPeriod() Obtain Data collection time
 * @method void setPeriod(integer $Period) Set Data collection time
 * @method string getRuleName() Obtain Name of the rule
 * @method void setRuleName(string $RuleName) Set Name of the rule
 * @method string getAction() Obtain Action: `monitor` (Observe), `drop` (Block)
 * @method void setAction(string $Action) Set Action: `monitor` (Observe), `drop` (Block)
 * @method integer getPunishTime() Obtain Time it takes to perform the action
 * @method void setPunishTime(integer $PunishTime) Set Time it takes to perform the action
 * @method string getPunishTimeUnit() Obtain Time unit: second
 * @method void setPunishTimeUnit(string $PunishTimeUnit) Set Time unit: second
 * @method string getRuleStatus() Obtain Status of the rule
 * @method void setRuleStatus(string $RuleStatus) Set Status of the rule
 * @method array getConditions() Obtain Rule
 * @method void setConditions(array $Conditions) Set Rule
 * @method integer getRulePriority() Obtain Priority of the rule
 * @method void setRulePriority(integer $RulePriority) Set Priority of the rule
 * @method integer getRuleID() Obtain ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleID(integer $RuleID) Set ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getFreqFields() Obtain Word filter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFreqFields(array $FreqFields) Set Word filter
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer Rate threshold
     */
    public $Threshold;

    /**
     * @var integer Data collection time
     */
    public $Period;

    /**
     * @var string Name of the rule
     */
    public $RuleName;

    /**
     * @var string Action: `monitor` (Observe), `drop` (Block)
     */
    public $Action;

    /**
     * @var integer Time it takes to perform the action
     */
    public $PunishTime;

    /**
     * @var string Time unit: second
     */
    public $PunishTimeUnit;

    /**
     * @var string Status of the rule
     */
    public $RuleStatus;

    /**
     * @var array Rule
     */
    public $Conditions;

    /**
     * @var integer Priority of the rule
     */
    public $RulePriority;

    /**
     * @var integer ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleID;

    /**
     * @var array Word filter
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FreqFields;

    /**
     * @var string Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $Threshold Rate threshold
     * @param integer $Period Data collection time
     * @param string $RuleName Name of the rule
     * @param string $Action Action: `monitor` (Observe), `drop` (Block)
     * @param integer $PunishTime Time it takes to perform the action
     * @param string $PunishTimeUnit Time unit: second
     * @param string $RuleStatus Status of the rule
     * @param array $Conditions Rule
     * @param integer $RulePriority Priority of the rule
     * @param integer $RuleID ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $FreqFields Word filter
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ACLCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
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
