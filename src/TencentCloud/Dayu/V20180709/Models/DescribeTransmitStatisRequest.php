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
 * DescribeTransmitStatis request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP)
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getMetricName() Obtain Metric name. Valid values:
traffic: traffic bandwidth;
pkg: packet rate;
 * @method void setMetricName(string $MetricName) Set Metric name. Valid values:
traffic: traffic bandwidth;
pkg: packet rate;
 * @method integer getPeriod() Obtain Statistical time granularity (300: 5-minute, 3600: hourly, 86400: daily)
 * @method void setPeriod(integer $Period) Set Statistical time granularity (300: 5-minute, 3600: hourly, 86400: daily)
 * @method string getStartTime() Obtain Statistics start time. The second part is kept at 0, and the minute part is a multiple of 5
 * @method void setStartTime(string $StartTime) Set Statistics start time. The second part is kept at 0, and the minute part is a multiple of 5
 * @method string getEndTime() Obtain Statistics end time. The second part is kept at 0, and the minute part is a multiple of 5
 * @method void setEndTime(string $EndTime) Set Statistics end time. The second part is kept at 0, and the minute part is a multiple of 5
 * @method array getIpList() Obtain Resource IP, which is required and only supports one IP if `Business` is `bgp-multip`. If this field is left empty, all IPs of a resource instance will be counted by default. If the resource instance has multiple IPs (such as Anti-DDoS Ultimate), the statistical method is summation;
 * @method void setIpList(array $IpList) Set Resource IP, which is required and only supports one IP if `Business` is `bgp-multip`. If this field is left empty, all IPs of a resource instance will be counted by default. If the resource instance has multiple IPs (such as Anti-DDoS Ultimate), the statistical method is summation;
 */
class DescribeTransmitStatisRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP)
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Metric name. Valid values:
traffic: traffic bandwidth;
pkg: packet rate;
     */
    public $MetricName;

    /**
     * @var integer Statistical time granularity (300: 5-minute, 3600: hourly, 86400: daily)
     */
    public $Period;

    /**
     * @var string Statistics start time. The second part is kept at 0, and the minute part is a multiple of 5
     */
    public $StartTime;

    /**
     * @var string Statistics end time. The second part is kept at 0, and the minute part is a multiple of 5
     */
    public $EndTime;

    /**
     * @var array Resource IP, which is required and only supports one IP if `Business` is `bgp-multip`. If this field is left empty, all IPs of a resource instance will be counted by default. If the resource instance has multiple IPs (such as Anti-DDoS Ultimate), the statistical method is summation;
     */
    public $IpList;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP)
     * @param string $Id Anti-DDoS instance ID
     * @param string $MetricName Metric name. Valid values:
traffic: traffic bandwidth;
pkg: packet rate;
     * @param integer $Period Statistical time granularity (300: 5-minute, 3600: hourly, 86400: daily)
     * @param string $StartTime Statistics start time. The second part is kept at 0, and the minute part is a multiple of 5
     * @param string $EndTime Statistics end time. The second part is kept at 0, and the minute part is a multiple of 5
     * @param array $IpList Resource IP, which is required and only supports one IP if `Business` is `bgp-multip`. If this field is left empty, all IPs of a resource instance will be counted by default. If the resource instance has multiple IPs (such as Anti-DDoS Ultimate), the statistical method is summation;
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
