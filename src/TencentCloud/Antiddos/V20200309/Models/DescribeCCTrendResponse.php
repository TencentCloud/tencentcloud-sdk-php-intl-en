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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCTrend response structure.
 *
 * @method integer getCount() Obtain Number of values returned
 * @method void setCount(integer $Count) Set Number of values returned
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method string getIp() Obtain Instance IP
 * @method void setIp(string $Ip) Set Instance IP
 * @method integer getPeriod() Obtain Sampling period. Valid values: `300` (5 minutes), `3600` (one hour), `86400` (one day)
 * @method void setPeriod(integer $Period) Set Sampling period. Valid values: `300` (5 minutes), `3600` (one hour), `86400` (one day)
 * @method string getStartTime() Obtain Beginning of the time range for the query
 * @method void setStartTime(string $StartTime) Set Beginning of the time range for the query
 * @method string getEndTime() Obtain End of the time range for the query
 * @method void setEndTime(string $EndTime) Set End of the time range for the query
 * @method array getData() Obtain Value array
 * @method void setData(array $Data) Set Value array
 * @method string getId() Obtain Instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMetricName() Obtain Metric. Valid values: `inqps` (total QPS peaks), `dropqps` (attack QPS peaks), `incount` (total number of requests), and `dropcount` (number of attack requests).
 * @method void setMetricName(string $MetricName) Set Metric. Valid values: `inqps` (total QPS peaks), `dropqps` (attack QPS peaks), `incount` (total number of requests), and `dropcount` (number of attack requests).
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCCTrendResponse extends AbstractModel
{
    /**
     * @var integer Number of values returned
     */
    public $Count;

    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     */
    public $Business;

    /**
     * @var string Instance IP
     */
    public $Ip;

    /**
     * @var integer Sampling period. Valid values: `300` (5 minutes), `3600` (one hour), `86400` (one day)
     */
    public $Period;

    /**
     * @var string Beginning of the time range for the query
     */
    public $StartTime;

    /**
     * @var string End of the time range for the query
     */
    public $EndTime;

    /**
     * @var array Value array
     */
    public $Data;

    /**
     * @var string Instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Metric. Valid values: `inqps` (total QPS peaks), `dropqps` (attack QPS peaks), `incount` (total number of requests), and `dropcount` (number of attack requests).
     */
    public $MetricName;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Count Number of values returned
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     * @param string $Ip Instance IP
     * @param integer $Period Sampling period. Valid values: `300` (5 minutes), `3600` (one hour), `86400` (one day)
     * @param string $StartTime Beginning of the time range for the query
     * @param string $EndTime End of the time range for the query
     * @param array $Data Value array
     * @param string $Id Instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $MetricName Metric. Valid values: `inqps` (total QPS peaks), `dropqps` (attack QPS peaks), `incount` (total number of requests), and `dropcount` (number of attack requests).
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
