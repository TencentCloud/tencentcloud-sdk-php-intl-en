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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bandwidth cap configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable usage limit. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable usage limit. Values:
`on`: Enable
`off`: Disable
 * @method integer getBpsThreshold() Obtain The upper limit of bandwidth usage (in bps) or traffic usage (in bytes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBpsThreshold(integer $BpsThreshold) Set The upper limit of bandwidth usage (in bps) or traffic usage (in bytes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCounterMeasure() Obtain Action taken when threshold is reached
`RETURN_404`: A 404 error will be returned for all requests.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCounterMeasure(string $CounterMeasure) Set Action taken when threshold is reached
`RETURN_404`: A 404 error will be returned for all requests.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastTriggerTime() Obtain The last time when the usage upper limit in the Chinese mainland was reached
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastTriggerTime(string $LastTriggerTime) Set The last time when the usage upper limit in the Chinese mainland was reached
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAlertSwitch() Obtain Whether to enable alerts for usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlertSwitch(string $AlertSwitch) Set Whether to enable alerts for usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAlertPercentage() Obtain Triggers alarms when the ratio of bandwidth or traffic usage to the usage upper limit reaches the specified value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlertPercentage(integer $AlertPercentage) Set Triggers alarms when the ratio of bandwidth or traffic usage to the usage upper limit reaches the specified value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastTriggerTimeOverseas() Obtain The last time when the usage outside the Chinese mainland reached the upper limit
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastTriggerTimeOverseas(string $LastTriggerTimeOverseas) Set The last time when the usage outside the Chinese mainland reached the upper limit
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMetric() Obtain Dimension of the usage limit
`bandwidth`: Bandwidth
`flux`: Traffic
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMetric(string $Metric) Set Dimension of the usage limit
`bandwidth`: Bandwidth
`flux`: Traffic
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getStatisticItems() Obtain Usage limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatisticItems(array $StatisticItems) Set Usage limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class BandwidthAlert extends AbstractModel
{
    /**
     * @var string Whether to enable usage limit. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var integer The upper limit of bandwidth usage (in bps) or traffic usage (in bytes).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BpsThreshold;

    /**
     * @var string Action taken when threshold is reached
`RETURN_404`: A 404 error will be returned for all requests.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CounterMeasure;

    /**
     * @var string The last time when the usage upper limit in the Chinese mainland was reached
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastTriggerTime;

    /**
     * @var string Whether to enable alerts for usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlertSwitch;

    /**
     * @var integer Triggers alarms when the ratio of bandwidth or traffic usage to the usage upper limit reaches the specified value
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlertPercentage;

    /**
     * @var string The last time when the usage outside the Chinese mainland reached the upper limit
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastTriggerTimeOverseas;

    /**
     * @var string Dimension of the usage limit
`bandwidth`: Bandwidth
`flux`: Traffic
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Metric;

    /**
     * @var array Usage limit configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StatisticItems;

    /**
     * @param string $Switch Whether to enable usage limit. Values:
`on`: Enable
`off`: Disable
     * @param integer $BpsThreshold The upper limit of bandwidth usage (in bps) or traffic usage (in bytes).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CounterMeasure Action taken when threshold is reached
`RETURN_404`: A 404 error will be returned for all requests.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastTriggerTime The last time when the usage upper limit in the Chinese mainland was reached
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AlertSwitch Whether to enable alerts for usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AlertPercentage Triggers alarms when the ratio of bandwidth or traffic usage to the usage upper limit reaches the specified value
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastTriggerTimeOverseas The last time when the usage outside the Chinese mainland reached the upper limit
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Metric Dimension of the usage limit
`bandwidth`: Bandwidth
`flux`: Traffic
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $StatisticItems Usage limit configuration
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("AlertSwitch",$param) and $param["AlertSwitch"] !== null) {
            $this->AlertSwitch = $param["AlertSwitch"];
        }

        if (array_key_exists("AlertPercentage",$param) and $param["AlertPercentage"] !== null) {
            $this->AlertPercentage = $param["AlertPercentage"];
        }

        if (array_key_exists("LastTriggerTimeOverseas",$param) and $param["LastTriggerTimeOverseas"] !== null) {
            $this->LastTriggerTimeOverseas = $param["LastTriggerTimeOverseas"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("StatisticItems",$param) and $param["StatisticItems"] !== null) {
            $this->StatisticItems = [];
            foreach ($param["StatisticItems"] as $key => $value){
                $obj = new StatisticItem();
                $obj->deserialize($value);
                array_push($this->StatisticItems, $obj);
            }
        }
    }
}
