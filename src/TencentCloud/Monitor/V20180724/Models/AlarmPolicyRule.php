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
 * @method string getMetricName() Obtain Metric name or event name. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1) and the supported events via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMetricName(string $MetricName) Set Metric name or event name. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1) and the supported events via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getPeriod() Obtain Statistical period in seconds. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setPeriod(integer $Period) Set Statistical period in seconds. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getOperator() Obtain Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = day-on-day increase
day_decrease = day-on-day decrease
day_wave = day-on-day fluctuation
week_increase = week-on-week increase
week_decrease = week-on-week decrease
week_wave = week-on-week fluctuation
cycle_increase = cyclical increase
cycle_decrease = cyclical decrease
cycle_wave = cyclical fluctuation
re = regex match
The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOperator(string $Operator) Set Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = day-on-day increase
day_decrease = day-on-day decrease
day_wave = day-on-day fluctuation
week_increase = week-on-week increase
week_decrease = week-on-week decrease
week_wave = week-on-week fluctuation
cycle_increase = cyclical increase
cycle_decrease = cyclical decrease
cycle_wave = cyclical fluctuation
re = regex match
The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getValue() Obtain Threshold. The valid value range can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setValue(string $Value) Set Threshold. The valid value range can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getContinuePeriod() Obtain Number of periods. `1`: continue for one period; `2`: continue for two periods; and so on. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setContinuePeriod(integer $ContinuePeriod) Set Number of periods. `1`: continue for one period; `2`: continue for two periods; and so on. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
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
 * @method string getRuleType() Obtain Trigger condition type. `STATIC`: static threshold; `dynamic`: dynamic threshold. If you do not specify this parameter when creating or editing a policy, `STATIC` is used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRuleType(string $RuleType) Set Trigger condition type. `STATIC`: static threshold; `dynamic`: dynamic threshold. If you do not specify this parameter when creating or editing a policy, `STATIC` is used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getIsAdvanced() Obtain Whether it is an advanced metric. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsAdvanced(integer $IsAdvanced) Set Whether it is an advanced metric. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsOpen() Obtain Whether the advanced metric feature is enabled. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsOpen(integer $IsOpen) Set Whether the advanced metric feature is enabled. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getProductId() Obtain Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setProductId(string $ProductId) Set Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method float getValueMax() Obtain Maximum value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValueMax(float $ValueMax) Set Maximum value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getValueMin() Obtain Minimum value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValueMin(float $ValueMin) Set Minimum value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AlarmHierarchicalValue getHierarchicalValue() Obtain The configuration of alarm level threshold
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHierarchicalValue(AlarmHierarchicalValue $HierarchicalValue) Set The configuration of alarm level threshold
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmPolicyRule extends AbstractModel
{
    /**
     * @var string Metric name or event name. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1) and the supported events via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MetricName;

    /**
     * @var integer Statistical period in seconds. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
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
day_increase = day-on-day increase
day_decrease = day-on-day decrease
day_wave = day-on-day fluctuation
week_increase = week-on-week increase
week_decrease = week-on-week decrease
week_wave = week-on-week fluctuation
cycle_increase = cyclical increase
cycle_decrease = cyclical decrease
cycle_wave = cyclical fluctuation
re = regex match
The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Operator;

    /**
     * @var string Threshold. The valid value range can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Value;

    /**
     * @var integer Number of periods. `1`: continue for one period; `2`: continue for two periods; and so on. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
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
     * @var string Trigger condition type. `STATIC`: static threshold; `dynamic`: dynamic threshold. If you do not specify this parameter when creating or editing a policy, `STATIC` is used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RuleType;

    /**
     * @var integer Whether it is an advanced metric. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsAdvanced;

    /**
     * @var integer Whether the advanced metric feature is enabled. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsOpen;

    /**
     * @var string Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProductId;

    /**
     * @var float Maximum value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValueMax;

    /**
     * @var float Minimum value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValueMin;

    /**
     * @var AlarmHierarchicalValue The configuration of alarm level threshold
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HierarchicalValue;

    /**
     * @param string $MetricName Metric name or event name. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1) and the supported events via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $Period Statistical period in seconds. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Operator Operator
intelligent = intelligent detection without threshold
eq = equal to
ge = greater than or equal to
gt = greater than
le = less than or equal to
lt = less than
ne = not equal to
day_increase = day-on-day increase
day_decrease = day-on-day decrease
day_wave = day-on-day fluctuation
week_increase = week-on-week increase
week_decrease = week-on-week decrease
week_wave = week-on-week fluctuation
cycle_increase = cyclical increase
cycle_decrease = cyclical decrease
cycle_wave = cyclical fluctuation
re = regex match
The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Value Threshold. The valid value range can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $ContinuePeriod Number of periods. `1`: continue for one period; `2`: continue for two periods; and so on. The valid values can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
Note: this field may return `null`, indicating that no valid value is obtained.
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
     * @param string $RuleType Trigger condition type. `STATIC`: static threshold; `dynamic`: dynamic threshold. If you do not specify this parameter when creating or editing a policy, `STATIC` is used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $IsAdvanced Whether it is an advanced metric. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IsOpen Whether the advanced metric feature is enabled. 0: No; 1: Yes.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProductId Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param float $ValueMax Maximum value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ValueMin Minimum value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AlarmHierarchicalValue $HierarchicalValue The configuration of alarm level threshold
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

        if (array_key_exists("IsAdvanced",$param) and $param["IsAdvanced"] !== null) {
            $this->IsAdvanced = $param["IsAdvanced"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ValueMax",$param) and $param["ValueMax"] !== null) {
            $this->ValueMax = $param["ValueMax"];
        }

        if (array_key_exists("ValueMin",$param) and $param["ValueMin"] !== null) {
            $this->ValueMin = $param["ValueMin"];
        }

        if (array_key_exists("HierarchicalValue",$param) and $param["HierarchicalValue"] !== null) {
            $this->HierarchicalValue = new AlarmHierarchicalValue();
            $this->HierarchicalValue->deserialize($param["HierarchicalValue"]);
        }
    }
}
