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
 * DescribeTimingL4Data request structure.
 *
 * @method string getStartTime() Obtain Client time in RFC 3339 format
 * @method void setStartTime(string $StartTime) Set Client time in RFC 3339 format
 * @method string getEndTime() Obtain Client time in RFC 3339 format
 * @method void setEndTime(string $EndTime) Set Client time in RFC 3339 format
 * @method array getMetricNames() Obtain Supported metrics for data query:
`l4Flow_connections`: Access connections
`l4Flow_flux`: Access traffic
`l4Flow_inFlux`: Inbound traffic
`l4Flow_outFlux`: Outbound traffic
 * @method void setMetricNames(array $MetricNames) Set Supported metrics for data query:
`l4Flow_connections`: Access connections
`l4Flow_flux`: Access traffic
`l4Flow_inFlux`: Inbound traffic
`l4Flow_outFlux`: Outbound traffic
 * @method array getZoneIds() Obtain List of site IDs
 * @method void setZoneIds(array $ZoneIds) Set List of site IDs
 * @method array getInstanceIds() Obtain This field has been disused. Use `ProxyIds` instead.
 * @method void setInstanceIds(array $InstanceIds) Set This field has been disused. Use `ProxyIds` instead.
 * @method string getProtocol() Obtain This field is not supported currently.
 * @method void setProtocol(string $Protocol) Set This field is not supported currently.
 * @method string getInterval() Obtain Time interval. Valid values: {min, 5min, hour, day}
 * @method void setInterval(string $Interval) Set Time interval. Valid values: {min, 5min, hour, day}
 * @method string getRuleId() Obtain This field is not supported currently. Use `Filter` instead.
 * @method void setRuleId(string $RuleId) Set This field is not supported currently. Use `Filter` instead.
 * @method array getFilters() Obtain Supported filters: `proxyd`, `ruleId`
 * @method void setFilters(array $Filters) Set Supported filters: `proxyd`, `ruleId`
 * @method array getProxyIds() Obtain List of layer-4 proxies
 * @method void setProxyIds(array $ProxyIds) Set List of layer-4 proxies
 */
class DescribeTimingL4DataRequest extends AbstractModel
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
`l4Flow_connections`: Access connections
`l4Flow_flux`: Access traffic
`l4Flow_inFlux`: Inbound traffic
`l4Flow_outFlux`: Outbound traffic
     */
    public $MetricNames;

    /**
     * @var array List of site IDs
     */
    public $ZoneIds;

    /**
     * @var array This field has been disused. Use `ProxyIds` instead.
     */
    public $InstanceIds;

    /**
     * @var string This field is not supported currently.
     */
    public $Protocol;

    /**
     * @var string Time interval. Valid values: {min, 5min, hour, day}
     */
    public $Interval;

    /**
     * @var string This field is not supported currently. Use `Filter` instead.
     */
    public $RuleId;

    /**
     * @var array Supported filters: `proxyd`, `ruleId`
     */
    public $Filters;

    /**
     * @var array List of layer-4 proxies
     */
    public $ProxyIds;

    /**
     * @param string $StartTime Client time in RFC 3339 format
     * @param string $EndTime Client time in RFC 3339 format
     * @param array $MetricNames Supported metrics for data query:
`l4Flow_connections`: Access connections
`l4Flow_flux`: Access traffic
`l4Flow_inFlux`: Inbound traffic
`l4Flow_outFlux`: Outbound traffic
     * @param array $ZoneIds List of site IDs
     * @param array $InstanceIds This field has been disused. Use `ProxyIds` instead.
     * @param string $Protocol This field is not supported currently.
     * @param string $Interval Time interval. Valid values: {min, 5min, hour, day}
     * @param string $RuleId This field is not supported currently. Use `Filter` instead.
     * @param array $Filters Supported filters: `proxyd`, `ruleId`
     * @param array $ProxyIds List of layer-4 proxies
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
