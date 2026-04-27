<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneData request structure.
 *
 * @method string getZone() Obtain Availability zone id
 * @method void setZone(string $Zone) Set Availability zone id
 * @method string getMetricName() Obtain Metric name (inbw: inbound bandwidth, outbw: outbound bandwidth)
 * @method void setMetricName(string $MetricName) Set Metric name (inbw: inbound bandwidth, outbw: outbound bandwidth)
 * @method string getStartTime() Obtain Start time (UTC time)
 * @method void setStartTime(string $StartTime) Set Start time (UTC time)
 * @method string getEndTime() Obtain End time (UTC time), query up to 2 days.
 * @method void setEndTime(string $EndTime) Set End time (UTC time), query up to 2 days.
 */
class DescribeZoneDataRequest extends AbstractModel
{
    /**
     * @var string Availability zone id
     */
    public $Zone;

    /**
     * @var string Metric name (inbw: inbound bandwidth, outbw: outbound bandwidth)
     */
    public $MetricName;

    /**
     * @var string Start time (UTC time)
     */
    public $StartTime;

    /**
     * @var string End time (UTC time), query up to 2 days.
     */
    public $EndTime;

    /**
     * @param string $Zone Availability zone id
     * @param string $MetricName Metric name (inbw: inbound bandwidth, outbw: outbound bandwidth)
     * @param string $StartTime Start time (UTC time)
     * @param string $EndTime End time (UTC time), query up to 2 days.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
