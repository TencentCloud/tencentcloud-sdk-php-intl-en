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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewL7Data request structure.
 *
 * @method string getStartTime() Obtain Client time in RFC 3339 format
 * @method void setStartTime(string $StartTime) Set Client time in RFC 3339 format
 * @method string getEndTime() Obtain Client time in RFC 3339 format
 * @method void setEndTime(string $EndTime) Set Client time in RFC 3339 format
 * @method array getMetricNames() Obtain Supported metrics for data query:
`l7Flow_outFlux`: Access traffic
`l7Flow_request`: Access requests
`l7Flow_outBandwidth`: Access bandwidth
 * @method void setMetricNames(array $MetricNames) Set Supported metrics for data query:
`l7Flow_outFlux`: Access traffic
`l7Flow_request`: Access requests
`l7Flow_outBandwidth`: Access bandwidth
 * @method string getInterval() Obtain Time interval. Valid values: {min, 5min, hour, day, week}
 * @method void setInterval(string $Interval) Set Time interval. Valid values: {min, 5min, hour, day, week}
 * @method array getZoneIds() Obtain List of `ZoneId` values. This parameter takes effect only when querying in the zone/domain dimension.
 * @method void setZoneIds(array $ZoneIds) Set List of `ZoneId` values. This parameter takes effect only when querying in the zone/domain dimension.
 * @method array getDomains() Obtain List of `Domain` values. This parameter takes effect only when querying in the domain dimension.
 * @method void setDomains(array $Domains) Set List of `Domain` values. This parameter takes effect only when querying in the domain dimension.
 * @method string getProtocol() Obtain Protocol type. Valid values: {http,http2,https,all}
 * @method void setProtocol(string $Protocol) Set Protocol type. Valid values: {http,http2,https,all}
 */
class DescribeOverviewL7DataRequest extends AbstractModel
{
    /**
     * @var string Client time in RFC 3339 format
     */
    public $StartTime;

    /**
     * @var string Client time in RFC 3339 format
     */
    public $EndTime;

    /**
     * @var array Supported metrics for data query:
`l7Flow_outFlux`: Access traffic
`l7Flow_request`: Access requests
`l7Flow_outBandwidth`: Access bandwidth
     */
    public $MetricNames;

    /**
     * @var string Time interval. Valid values: {min, 5min, hour, day, week}
     */
    public $Interval;

    /**
     * @var array List of `ZoneId` values. This parameter takes effect only when querying in the zone/domain dimension.
     */
    public $ZoneIds;

    /**
     * @var array List of `Domain` values. This parameter takes effect only when querying in the domain dimension.
     */
    public $Domains;

    /**
     * @var string Protocol type. Valid values: {http,http2,https,all}
     */
    public $Protocol;

    /**
     * @param string $StartTime Client time in RFC 3339 format
     * @param string $EndTime Client time in RFC 3339 format
     * @param array $MetricNames Supported metrics for data query:
`l7Flow_outFlux`: Access traffic
`l7Flow_request`: Access requests
`l7Flow_outBandwidth`: Access bandwidth
     * @param string $Interval Time interval. Valid values: {min, 5min, hour, day, week}
     * @param array $ZoneIds List of `ZoneId` values. This parameter takes effect only when querying in the zone/domain dimension.
     * @param array $Domains List of `Domain` values. This parameter takes effect only when querying in the domain dimension.
     * @param string $Protocol Protocol type. Valid values: {http,http2,https,all}
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
