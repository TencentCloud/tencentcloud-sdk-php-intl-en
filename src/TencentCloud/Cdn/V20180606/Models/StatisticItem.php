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
 * Usage limit configuration
 *
 * @method string getType() Obtain Type of usage limit. `total`: Cumulative usage; `moment`: Instantaneous usage.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Type of usage limit. `total`: Cumulative usage; `moment`: Instantaneous usage.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getUnBlockTime() Obtain Unblocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUnBlockTime(integer $UnBlockTime) Set Unblocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getBpsThreshold() Obtain Bandwidth/Traffic threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBpsThreshold(integer $BpsThreshold) Set Bandwidth/Traffic threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCounterMeasure() Obtain Specifies how to disable CDN service when the threshold is exceeded. `RETURN_404`: Return 404; `RESOLVE_DNS_TO_ORIGIN`: Forward to origin server.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCounterMeasure(string $CounterMeasure) Set Specifies how to disable CDN service when the threshold is exceeded. `RETURN_404`: Return 404; `RESOLVE_DNS_TO_ORIGIN`: Forward to origin server.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getAlertPercentage() Obtain Threshold (in percentage) that triggers alarms
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlertPercentage(integer $AlertPercentage) Set Threshold (in percentage) that triggers alarms
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAlertSwitch() Obtain Whether to enable alerts for cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlertSwitch(string $AlertSwitch) Set Whether to enable alerts for cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getMetric() Obtain Metric type. `flux`: Traffic; `bandwidth`: Bandwidth.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMetric(string $Metric) Set Metric type. `flux`: Traffic; `bandwidth`: Bandwidth.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getCycle() Obtain 
 * @method void setCycle(integer $Cycle) Set 
 * @method string getSwitch() Obtain Whether to enable cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class StatisticItem extends AbstractModel
{
    /**
     * @var string Type of usage limit. `total`: Cumulative usage; `moment`: Instantaneous usage.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var integer Unblocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UnBlockTime;

    /**
     * @var integer Bandwidth/Traffic threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BpsThreshold;

    /**
     * @var string Specifies how to disable CDN service when the threshold is exceeded. `RETURN_404`: Return 404; `RESOLVE_DNS_TO_ORIGIN`: Forward to origin server.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CounterMeasure;

    /**
     * @var integer Threshold (in percentage) that triggers alarms
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AlertPercentage;

    /**
     * @var string Whether to enable alerts for cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlertSwitch;

    /**
     * @var string Metric type. `flux`: Traffic; `bandwidth`: Bandwidth.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Metric;

    /**
     * @var integer 
     */
    public $Cycle;

    /**
     * @var string Whether to enable cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @param string $Type Type of usage limit. `total`: Cumulative usage; `moment`: Instantaneous usage.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $UnBlockTime Unblocking time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $BpsThreshold Bandwidth/Traffic threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CounterMeasure Specifies how to disable CDN service when the threshold is exceeded. `RETURN_404`: Return 404; `RESOLVE_DNS_TO_ORIGIN`: Forward to origin server.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $AlertPercentage Threshold (in percentage) that triggers alarms
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $AlertSwitch Whether to enable alerts for cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Metric Metric type. `flux`: Traffic; `bandwidth`: Bandwidth.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Cycle 
     * @param string $Switch Whether to enable cumulative usage limit. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UnBlockTime",$param) and $param["UnBlockTime"] !== null) {
            $this->UnBlockTime = $param["UnBlockTime"];
        }

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("AlertPercentage",$param) and $param["AlertPercentage"] !== null) {
            $this->AlertPercentage = $param["AlertPercentage"];
        }

        if (array_key_exists("AlertSwitch",$param) and $param["AlertSwitch"] !== null) {
            $this->AlertSwitch = $param["AlertSwitch"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
