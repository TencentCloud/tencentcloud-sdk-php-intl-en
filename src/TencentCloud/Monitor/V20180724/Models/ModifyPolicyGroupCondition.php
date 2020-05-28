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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modification of the metric threshold condition passed in by the alarm policy group.
 *
 * @method integer getMetricId() Obtain Metric ID.
 * @method void setMetricId(integer $MetricId) Set Metric ID.
 * @method integer getCalcType() Obtain Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to.
 * @method void setCalcType(integer $CalcType) Set Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to.
 * @method string getCalcValue() Obtain Threshold.
 * @method void setCalcValue(string $CalcValue) Set Threshold.
 * @method integer getCalcPeriod() Obtain Data period of the detected metric.
 * @method void setCalcPeriod(integer $CalcPeriod) Set Data period of the detected metric.
 * @method integer getContinuePeriod() Obtain Number of consecutive periods.
 * @method void setContinuePeriod(integer $ContinuePeriod) Set Number of consecutive periods.
 * @method integer getAlarmNotifyType() Obtain Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method integer getAlarmNotifyPeriod() Obtain Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
 * @method integer getRuleId() Obtain Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
 * @method void setRuleId(integer $RuleId) Set Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
 */
class ModifyPolicyGroupCondition extends AbstractModel
{
    /**
     * @var integer Metric ID.
     */
    public $MetricId;

    /**
     * @var integer Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to.
     */
    public $CalcType;

    /**
     * @var string Threshold.
     */
    public $CalcValue;

    /**
     * @var integer Data period of the detected metric.
     */
    public $CalcPeriod;

    /**
     * @var integer Number of consecutive periods.
     */
    public $ContinuePeriod;

    /**
     * @var integer Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     */
    public $AlarmNotifyType;

    /**
     * @var integer Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
     */
    public $RuleId;

    /**
     * @param integer $MetricId Metric ID.
     * @param integer $CalcType Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to.
     * @param string $CalcValue Threshold.
     * @param integer $CalcPeriod Data period of the detected metric.
     * @param integer $ContinuePeriod Number of consecutive periods.
     * @param integer $AlarmNotifyType Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     * @param integer $AlarmNotifyPeriod Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
     * @param integer $RuleId Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
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
        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = $param["CalcValue"];
        }

        if (array_key_exists("CalcPeriod",$param) and $param["CalcPeriod"] !== null) {
            $this->CalcPeriod = $param["CalcPeriod"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
