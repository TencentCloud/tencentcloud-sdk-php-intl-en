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
 * Alarm threshold conditions output by the policy query.
 *
 * @method string getMetricShowName() Obtain Metric name.
 * @method void setMetricShowName(string $MetricShowName) Set Metric name.
 * @method integer getPeriod() Obtain Data aggregation period in seconds.
 * @method void setPeriod(integer $Period) Set Data aggregation period in seconds.
 * @method integer getMetricId() Obtain Metric ID.
 * @method void setMetricId(integer $MetricId) Set Metric ID.
 * @method integer getRuleId() Obtain Threshold rule ID.
 * @method void setRuleId(integer $RuleId) Set Threshold rule ID.
 * @method string getUnit() Obtain Metric unit.
 * @method void setUnit(string $Unit) Set Metric unit.
 * @method integer getAlarmNotifyType() Obtain Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method integer getAlarmNotifyPeriod() Obtain Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of `triggerTime`.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of `triggerTime`.
 * @method integer getCalcType() Obtain Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. The value 7 indicates day-on-day increase. The value 8 indicates day-on-day decrease. The value 9 indicates week-on-week increase. The value 10 indicates week-on-week decrease. The value 11 indicates periodical increase. The value 12 indicates periodical decrease.
 * @method void setCalcType(integer $CalcType) Set Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. The value 7 indicates day-on-day increase. The value 8 indicates day-on-day decrease. The value 9 indicates week-on-week increase. The value 10 indicates week-on-week decrease. The value 11 indicates periodical increase. The value 12 indicates periodical decrease.
 * @method string getCalcValue() Obtain Threshold.
 * @method void setCalcValue(string $CalcValue) Set Threshold.
 * @method integer getContinueTime() Obtain Duration at which an alarm will be triggered in seconds.
 * @method void setContinueTime(integer $ContinueTime) Set Duration at which an alarm will be triggered in seconds.
 * @method string getMetricName() Obtain Alarm metric name.
 * @method void setMetricName(string $MetricName) Set Alarm metric name.
 */
class DescribePolicyGroupInfoCondition extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $MetricShowName;

    /**
     * @var integer Data aggregation period in seconds.
     */
    public $Period;

    /**
     * @var integer Metric ID.
     */
    public $MetricId;

    /**
     * @var integer Threshold rule ID.
     */
    public $RuleId;

    /**
     * @var string Metric unit.
     */
    public $Unit;

    /**
     * @var integer Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     */
    public $AlarmNotifyType;

    /**
     * @var integer Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of `triggerTime`.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. The value 7 indicates day-on-day increase. The value 8 indicates day-on-day decrease. The value 9 indicates week-on-week increase. The value 10 indicates week-on-week decrease. The value 11 indicates periodical increase. The value 12 indicates periodical decrease.
     */
    public $CalcType;

    /**
     * @var string Threshold.
     */
    public $CalcValue;

    /**
     * @var integer Duration at which an alarm will be triggered in seconds.
     */
    public $ContinueTime;

    /**
     * @var string Alarm metric name.
     */
    public $MetricName;

    /**
     * @param string $MetricShowName Metric name.
     * @param integer $Period Data aggregation period in seconds.
     * @param integer $MetricId Metric ID.
     * @param integer $RuleId Threshold rule ID.
     * @param string $Unit Metric unit.
     * @param integer $AlarmNotifyType Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     * @param integer $AlarmNotifyPeriod Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of `triggerTime`.
     * @param integer $CalcType Comparative type. The value 1 indicates greater than. The value 2 indicates greater than or equal to. The value 3 indicates smaller than. The value 4 indicates smaller than or equal to. The value 5 indicates equal to. The value 6 indicates not equal to. The value 7 indicates day-on-day increase. The value 8 indicates day-on-day decrease. The value 9 indicates week-on-week increase. The value 10 indicates week-on-week decrease. The value 11 indicates periodical increase. The value 12 indicates periodical decrease.
     * @param string $CalcValue Threshold.
     * @param integer $ContinueTime Duration at which an alarm will be triggered in seconds.
     * @param string $MetricName Alarm metric name.
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
        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
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

        if (array_key_exists("ContinueTime",$param) and $param["ContinueTime"] !== null) {
            $this->ContinueTime = $param["ContinueTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
