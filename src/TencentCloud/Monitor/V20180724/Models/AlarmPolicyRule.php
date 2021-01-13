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
 * Trigger condition of alarm policy
 *
 * @method string getMetricName() Obtain Metric name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetricName(string $MetricName) Set Metric name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPeriod() Obtain Statistical period in seconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPeriod(integer $Period) Set Statistical period in seconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOperator() Obtain Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = daily increase
day_decrease = daily decrease
day_wave = daily fluctuation
week_increase = weekly increase
week_decrease = weekly decrease
week_wave = weekly fluctuation
cycle_increase = periodical increase
cycle_decrease = periodical decrease
cycle_wave = periodical fluctuation
re = regex match
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOperator(string $Operator) Set Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = daily increase
day_decrease = daily decrease
day_wave = daily fluctuation
week_increase = weekly increase
week_decrease = weekly decrease
week_wave = weekly fluctuation
cycle_increase = periodical increase
cycle_decrease = periodical decrease
cycle_wave = periodical fluctuation
re = regex match
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Threshold
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Threshold
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getContinuePeriod() Obtain Number of cycles for continuous notification. Valid values: 1 (1 cycle), 2 (2 cycles), and so on.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContinuePeriod(integer $ContinuePeriod) Set Number of cycles for continuous notification. Valid values: 1 (1 cycle), 2 (2 cycles), and so on.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNoticeFrequency() Obtain Alarm interval in seconds. Valid values: 0 (do not repeat), 300 (alarm once every 5 minutes), 600 (alarm once every 10 minutes), 900 (alarm once every 15 minutes), 1800 (alarm once every 30 minutes), 3600 (alarm once every hour), 7200 (alarm once every 2 hours), 10800 (alarm once every 3 hours), 21600 (alarm once every 6 hours),  43200 (alarm once every 12 hours), 86400 (alarm once every day)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeFrequency(integer $NoticeFrequency) Set Alarm interval in seconds. Valid values: 0 (do not repeat), 300 (alarm once every 5 minutes), 600 (alarm once every 10 minutes), 900 (alarm once every 15 minutes), 1800 (alarm once every 30 minutes), 3600 (alarm once every hour), 7200 (alarm once every 2 hours), 10800 (alarm once every 3 hours), 21600 (alarm once every 6 hours),  43200 (alarm once every 12 hours), 86400 (alarm once every day)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsPowerNotice() Obtain Whether the alarm frequency increases exponentially. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsPowerNotice(integer $IsPowerNotice) Set Whether the alarm frequency increases exponentially. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AlarmPolicyFilter getFilter() Obtain Filter condition for one single trigger rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilter(AlarmPolicyFilter $Filter) Set Filter condition for one single trigger rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Metric display name, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Metric display name, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Unit, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Unit, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRuleType() Obtain Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic threshold)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic threshold)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AlarmPolicyRule extends AbstractModel
{
    /**
     * @var string Metric name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetricName;

    /**
     * @var integer Statistical period in seconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Period;

    /**
     * @var string Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = daily increase
day_decrease = daily decrease
day_wave = daily fluctuation
week_increase = weekly increase
week_decrease = weekly decrease
week_wave = weekly fluctuation
cycle_increase = periodical increase
cycle_decrease = periodical decrease
cycle_wave = periodical fluctuation
re = regex match
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Operator;

    /**
     * @var string Threshold
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var integer Number of cycles for continuous notification. Valid values: 1 (1 cycle), 2 (2 cycles), and so on.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContinuePeriod;

    /**
     * @var integer Alarm interval in seconds. Valid values: 0 (do not repeat), 300 (alarm once every 5 minutes), 600 (alarm once every 10 minutes), 900 (alarm once every 15 minutes), 1800 (alarm once every 30 minutes), 3600 (alarm once every hour), 7200 (alarm once every 2 hours), 10800 (alarm once every 3 hours), 21600 (alarm once every 6 hours),  43200 (alarm once every 12 hours), 86400 (alarm once every day)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeFrequency;

    /**
     * @var integer Whether the alarm frequency increases exponentially. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsPowerNotice;

    /**
     * @var AlarmPolicyFilter Filter condition for one single trigger rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Filter;

    /**
     * @var string Metric display name, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Unit, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var string Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic threshold)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @param string $MetricName Metric name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Period Statistical period in seconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Operator Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = daily increase
day_decrease = daily decrease
day_wave = daily fluctuation
week_increase = weekly increase
week_decrease = weekly decrease
week_wave = weekly fluctuation
cycle_increase = periodical increase
cycle_decrease = periodical decrease
cycle_wave = periodical fluctuation
re = regex match
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Value Threshold
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ContinuePeriod Number of cycles for continuous notification. Valid values: 1 (1 cycle), 2 (2 cycles), and so on.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NoticeFrequency Alarm interval in seconds. Valid values: 0 (do not repeat), 300 (alarm once every 5 minutes), 600 (alarm once every 10 minutes), 900 (alarm once every 15 minutes), 1800 (alarm once every 30 minutes), 3600 (alarm once every hour), 7200 (alarm once every 2 hours), 10800 (alarm once every 3 hours), 21600 (alarm once every 6 hours),  43200 (alarm once every 12 hours), 86400 (alarm once every day)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsPowerNotice Whether the alarm frequency increases exponentially. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AlarmPolicyFilter $Filter Filter condition for one single trigger rule
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Metric display name, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Unit Unit, which is used in the output parameter
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RuleType Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic threshold)
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("NoticeFrequency",$param) and $param["NoticeFrequency"] !== null) {
            $this->NoticeFrequency = $param["NoticeFrequency"];
        }

        if (array_key_exists("IsPowerNotice",$param) and $param["IsPowerNotice"] !== null) {
            $this->IsPowerNotice = $param["IsPowerNotice"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
