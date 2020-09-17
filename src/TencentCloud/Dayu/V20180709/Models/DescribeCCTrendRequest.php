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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCTrend request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method string getIp() Obtain Resource IP
 * @method void setIp(string $Ip) Set Resource IP
 * @method string getMetricName() Obtain Metric. Valid values: [inqps (total requests peak), dropqps (attack requests peak)]
 * @method void setMetricName(string $MetricName) Set Metric. Valid values: [inqps (total requests peak), dropqps (attack requests peak)]
 * @method integer getPeriod() Obtain Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
 * @method void setPeriod(integer $Period) Set Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
 * @method string getStartTime() Obtain Statistics start time
 * @method void setStartTime(string $StartTime) Set Statistics start time
 * @method string getEndTime() Obtain Statistics end time
 * @method void setEndTime(string $EndTime) Set Statistics end time
 * @method string getId() Obtain Resource instance ID. If `Business` is `basic`, this field is not required (because Anti-DDoS Basic has no resource instance)
 * @method void setId(string $Id) Set Resource instance ID. If `Business` is `basic`, this field is not required (because Anti-DDoS Basic has no resource instance)
 * @method string getDomain() Obtain (Optional) Domain name
 * @method void setDomain(string $Domain) Set (Optional) Domain name
 */
class DescribeCCTrendRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     */
    public $Business;

    /**
     * @var string Resource IP
     */
    public $Ip;

    /**
     * @var string Metric. Valid values: [inqps (total requests peak), dropqps (attack requests peak)]
     */
    public $MetricName;

    /**
     * @var integer Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
     */
    public $Period;

    /**
     * @var string Statistics start time
     */
    public $StartTime;

    /**
     * @var string Statistics end time
     */
    public $EndTime;

    /**
     * @var string Resource instance ID. If `Business` is `basic`, this field is not required (because Anti-DDoS Basic has no resource instance)
     */
    public $Id;

    /**
     * @var string (Optional) Domain name
     */
    public $Domain;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     * @param string $Ip Resource IP
     * @param string $MetricName Metric. Valid values: [inqps (total requests peak), dropqps (attack requests peak)]
     * @param integer $Period Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
     * @param string $StartTime Statistics start time
     * @param string $EndTime Statistics end time
     * @param string $Id Resource instance ID. If `Business` is `basic`, this field is not required (because Anti-DDoS Basic has no resource instance)
     * @param string $Domain (Optional) Domain name
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
