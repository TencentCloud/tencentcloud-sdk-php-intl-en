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
 * Alarm condition
 *
 * @method integer getAlarmNotifyPeriod() Obtain Alarm notification frequency.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm notification frequency.
 * @method integer getAlarmNotifyType() Obtain Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm.
 * @method string getCalcType() Obtain Detection method.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCalcType(string $CalcType) Set Detection method.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCalcValue() Obtain Detection value.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCalcValue(string $CalcValue) Set Detection value.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getContinueTime() Obtain Duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContinueTime(string $ContinueTime) Set Duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMetricID() Obtain Metric ID.
 * @method void setMetricID(integer $MetricID) Set Metric ID.
 * @method string getMetricDisplayName() Obtain Displayed metric name.
 * @method void setMetricDisplayName(string $MetricDisplayName) Set Displayed metric name.
 * @method integer getPeriod() Obtain Statistical period.
 * @method void setPeriod(integer $Period) Set Statistical period.
 * @method integer getRuleID() Obtain Rule ID.
 * @method void setRuleID(integer $RuleID) Set Rule ID.
 * @method string getUnit() Obtain Metric unit.
 * @method void setUnit(string $Unit) Set Metric unit.
 * @method integer getIsAdvanced() Obtain Whether it is an advanced metric. Valid values: `0` (no), `1` (yes).
 * @method void setIsAdvanced(integer $IsAdvanced) Set Whether it is an advanced metric. Valid values: `0` (no), `1` (yes).
 * @method integer getIsOpen() Obtain Whether the advance metric feature is enabled. Valid values: `0` (no), `1` (yes).
 * @method void setIsOpen(integer $IsOpen) Set Whether the advance metric feature is enabled. Valid values: `0` (no), `1` (yes).
 * @method string getProductId() Obtain Product ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductId(string $ProductId) Set Product ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Condition extends AbstractModel
{
    /**
     * @var integer Alarm notification frequency.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm.
     */
    public $AlarmNotifyType;

    /**
     * @var string Detection method.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CalcType;

    /**
     * @var string Detection value.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CalcValue;

    /**
     * @var string Duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContinueTime;

    /**
     * @var integer Metric ID.
     */
    public $MetricID;

    /**
     * @var string Displayed metric name.
     */
    public $MetricDisplayName;

    /**
     * @var integer Statistical period.
     */
    public $Period;

    /**
     * @var integer Rule ID.
     */
    public $RuleID;

    /**
     * @var string Metric unit.
     */
    public $Unit;

    /**
     * @var integer Whether it is an advanced metric. Valid values: `0` (no), `1` (yes).
     */
    public $IsAdvanced;

    /**
     * @var integer Whether the advance metric feature is enabled. Valid values: `0` (no), `1` (yes).
     */
    public $IsOpen;

    /**
     * @var string Product ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductId;

    /**
     * @param integer $AlarmNotifyPeriod Alarm notification frequency.
     * @param integer $AlarmNotifyType Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm.
     * @param string $CalcType Detection method.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CalcValue Detection value.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ContinueTime Duration in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MetricID Metric ID.
     * @param string $MetricDisplayName Displayed metric name.
     * @param integer $Period Statistical period.
     * @param integer $RuleID Rule ID.
     * @param string $Unit Metric unit.
     * @param integer $IsAdvanced Whether it is an advanced metric. Valid values: `0` (no), `1` (yes).
     * @param integer $IsOpen Whether the advance metric feature is enabled. Valid values: `0` (no), `1` (yes).
     * @param string $ProductId Product ID.
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
        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
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

        if (array_key_exists("MetricID",$param) and $param["MetricID"] !== null) {
            $this->MetricID = $param["MetricID"];
        }

        if (array_key_exists("MetricDisplayName",$param) and $param["MetricDisplayName"] !== null) {
            $this->MetricDisplayName = $param["MetricDisplayName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
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
    }
}
