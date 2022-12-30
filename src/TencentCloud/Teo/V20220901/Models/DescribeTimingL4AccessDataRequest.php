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
 * DescribeTimingL4AccessData request structure.
 *
 * @method string getStartTime() Obtain Query start time
 * @method void setStartTime(string $StartTime) Set Query start time
 * @method string getEndTime() Obtain Query end time
 * @method void setEndTime(string $EndTime) Set Query end time
 * @method array getMetricNames() Obtain Metric to query. Values:
<li>`l4Flow_connections`: Number of connections</li>
 * @method void setMetricNames(array $MetricNames) Set Metric to query. Values:
<li>`l4Flow_connections`: Number of connections</li>
 * @method array getZoneIds() Obtain IDs of sites to be queried. All sites will be selected if this field is not specified.
 * @method void setZoneIds(array $ZoneIds) Set IDs of sites to be queried. All sites will be selected if this field is not specified.
 * @method string getInterval() Obtain The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
 * @method void setInterval(string $Interval) Set The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
 * @method array getQueryConditions() Obtain Filter conditions. See below for details: 
<li>`ruleId`:<br>   Filter by the <strong>forwarding rule ID</strong><br>   Type: String<br>   Required: No</li>
<li>`proxyId`:<br>   Filter by the <strong>L4 proxy ID</strong><br>   Type: String<br>   Required: No</li>
 * @method void setQueryConditions(array $QueryConditions) Set Filter conditions. See below for details: 
<li>`ruleId`:<br>   Filter by the <strong>forwarding rule ID</strong><br>   Type: String<br>   Required: No</li>
<li>`proxyId`:<br>   Filter by the <strong>L4 proxy ID</strong><br>   Type: String<br>   Required: No</li>
 * @method string getArea() Obtain Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 * @method void setArea(string $Area) Set Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
 */
class DescribeTimingL4AccessDataRequest extends AbstractModel
{
    /**
     * @var string Query start time
     */
    public $StartTime;

    /**
     * @var string Query end time
     */
    public $EndTime;

    /**
     * @var array Metric to query. Values:
<li>`l4Flow_connections`: Number of connections</li>
     */
    public $MetricNames;

    /**
     * @var array IDs of sites to be queried. All sites will be selected if this field is not specified.
     */
    public $ZoneIds;

    /**
     * @var string The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
     */
    public $Interval;

    /**
     * @var array Filter conditions. See below for details: 
<li>`ruleId`:<br>   Filter by the <strong>forwarding rule ID</strong><br>   Type: String<br>   Required: No</li>
<li>`proxyId`:<br>   Filter by the <strong>L4 proxy ID</strong><br>   Type: String<br>   Required: No</li>
     */
    public $QueryConditions;

    /**
     * @var string Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
     */
    public $Area;

    /**
     * @param string $StartTime Query start time
     * @param string $EndTime Query end time
     * @param array $MetricNames Metric to query. Values:
<li>`l4Flow_connections`: Number of connections</li>
     * @param array $ZoneIds IDs of sites to be queried. All sites will be selected if this field is not specified.
     * @param string $Interval The query granularity. Values:
<li>`min`: 1 minute</li>
<li>`5min`: 5 minutes</li>
<li>`hour`: 1 hour</li>
<li>`day`: 1 day</li>If this field is not specified, the granularity will be determined based on the interval between the start time and end time as follows: 1-minute granularity applies for a 1-hour interval, 5-minute granularity for a 2-day interval, 1-hour granularity for a 7-day interval, and 1-day granularity for an interval of over 7 days.
     * @param array $QueryConditions Filter conditions. See below for details: 
<li>`ruleId`:<br>   Filter by the <strong>forwarding rule ID</strong><br>   Type: String<br>   Required: No</li>
<li>`proxyId`:<br>   Filter by the <strong>L4 proxy ID</strong><br>   Type: String<br>   Required: No</li>
     * @param string $Area Geolocation scope. Values:
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
<li>`global`: Global</li>If this field is not specified, the default value `global` is used.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("QueryConditions",$param) and $param["QueryConditions"] !== null) {
            $this->QueryConditions = [];
            foreach ($param["QueryConditions"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->QueryConditions, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
