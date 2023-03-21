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
 * Alarm threshold condition passed in when a policy is created.
 *
 * @method integer getMetricId() Obtain Metric ID.
 * @method void setMetricId(integer $MetricId) Set Metric ID.
 * @method integer getAlarmNotifyType() Obtain Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method integer getAlarmNotifyPeriod() Obtain Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
 * @method integer getCalcType() Obtain Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. This parameter is optional if a default comparative type is configured for the metric.
 * @method void setCalcType(integer $CalcType) Set Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. This parameter is optional if a default comparative type is configured for the metric.
 * @method float getCalcValue() Obtain Comparative value. This parameter is optional if the metric has no requirement.
 * @method void setCalcValue(float $CalcValue) Set Comparative value. This parameter is optional if the metric has no requirement.
 * @method integer getCalcPeriod() Obtain Data aggregation period in seconds. This parameter is optional if the metric has a default value.
 * @method void setCalcPeriod(integer $CalcPeriod) Set Data aggregation period in seconds. This parameter is optional if the metric has a default value.
 * @method integer getContinuePeriod() Obtain Number of consecutive periods after which an alarm will be triggered.
 * @method void setContinuePeriod(integer $ContinuePeriod) Set Number of consecutive periods after which an alarm will be triggered.
 * @method integer getRuleId() Obtain If a metric is created based on a template, the `RuleId` of the metric in the template must be passed in.
 * @method void setRuleId(integer $RuleId) Set If a metric is created based on a template, the `RuleId` of the metric in the template must be passed in.
 */
class CreatePolicyGroupCondition extends AbstractModel
{
    /**
     * @var integer Metric ID.
     */
    public $MetricId;

    /**
     * @var integer Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     */
    public $AlarmNotifyType;

    /**
     * @var integer Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. This parameter is optional if a default comparative type is configured for the metric.
     */
    public $CalcType;

    /**
     * @var float Comparative value. This parameter is optional if the metric has no requirement.
     */
    public $CalcValue;

    /**
     * @var integer Data aggregation period in seconds. This parameter is optional if the metric has a default value.
     */
    public $CalcPeriod;

    /**
     * @var integer Number of consecutive periods after which an alarm will be triggered.
     */
    public $ContinuePeriod;

    /**
     * @var integer If a metric is created based on a template, the `RuleId` of the metric in the template must be passed in.
     */
    public $RuleId;

    /**
     * @param integer $MetricId Metric ID.
     * @param integer $AlarmNotifyType Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     * @param integer $AlarmNotifyPeriod Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
     * @param integer $CalcType Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. This parameter is optional if a default comparative type is configured for the metric.
     * @param float $CalcValue Comparative value. This parameter is optional if the metric has no requirement.
     * @param integer $CalcPeriod Data aggregation period in seconds. This parameter is optional if the metric has a default value.
     * @param integer $ContinuePeriod Number of consecutive periods after which an alarm will be triggered.
     * @param integer $RuleId If a metric is created based on a template, the `RuleId` of the metric in the template must be passed in.
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

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
