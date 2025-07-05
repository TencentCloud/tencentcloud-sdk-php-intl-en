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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBizTrend request structure.
 *
 * @method string getStatistics() Obtain Statistical method. Valid values: `max`, `min`, `avg`, `sum`. It can only be `max` if the statistical dimension is traffic rate or packet rate.
 * @method void setStatistics(string $Statistics) Set Statistical method. Valid values: `max`, `min`, `avg`, `sum`. It can only be `max` if the statistical dimension is traffic rate or packet rate.
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method integer getPeriod() Obtain Sampling interval in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, `86400`
 * @method void setPeriod(integer $Period) Set Sampling interval in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, `86400`
 * @method string getStartTime() Obtain Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method void setStartTime(string $StartTime) Set Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method string getEndTime() Obtain End of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method void setEndTime(string $EndTime) Set End of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method string getId() Obtain Instance ID
 * @method void setId(string $Id) Set Instance ID
 * @method string getMetricName() Obtain Metric. Valid values: `connum`, `new_conn`, `inactive_conn`, `intraffic`, `outtraffic`, `inpkg`, `outpkg`, `qps`
 * @method void setMetricName(string $MetricName) Set Metric. Valid values: `connum`, `new_conn`, `inactive_conn`, `intraffic`, `outtraffic`, `inpkg`, `outpkg`, `qps`
 * @method string getDomain() Obtain You can query data by specifying a domain name when the metric is `qps`.
 * @method void setDomain(string $Domain) Set You can query data by specifying a domain name when the metric is `qps`.
 * @method array getProtoInfo() Obtain Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
 * @method void setProtoInfo(array $ProtoInfo) Set Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
 */
class DescribeBizTrendRequest extends AbstractModel
{
    /**
     * @var string Statistical method. Valid values: `max`, `min`, `avg`, `sum`. It can only be `max` if the statistical dimension is traffic rate or packet rate.
     */
    public $Statistics;

    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     */
    public $Business;

    /**
     * @var integer Sampling interval in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, `86400`
     */
    public $Period;

    /**
     * @var string Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
     */
    public $StartTime;

    /**
     * @var string End of the time range for the query, such as `2020-09-22 00:00:00`.
     */
    public $EndTime;

    /**
     * @var string Instance ID
     */
    public $Id;

    /**
     * @var string Metric. Valid values: `connum`, `new_conn`, `inactive_conn`, `intraffic`, `outtraffic`, `inpkg`, `outpkg`, `qps`
     */
    public $MetricName;

    /**
     * @var string You can query data by specifying a domain name when the metric is `qps`.
     */
    public $Domain;

    /**
     * @var array Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
     */
    public $ProtoInfo;

    /**
     * @param string $Statistics Statistical method. Valid values: `max`, `min`, `avg`, `sum`. It can only be `max` if the statistical dimension is traffic rate or packet rate.
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     * @param integer $Period Sampling interval in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, `86400`
     * @param string $StartTime Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
     * @param string $EndTime End of the time range for the query, such as `2020-09-22 00:00:00`.
     * @param string $Id Instance ID
     * @param string $MetricName Metric. Valid values: `connum`, `new_conn`, `inactive_conn`, `intraffic`, `outtraffic`, `inpkg`, `outpkg`, `qps`
     * @param string $Domain You can query data by specifying a domain name when the metric is `qps`.
     * @param array $ProtoInfo Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
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
        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = $param["Statistics"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProtoInfo",$param) and $param["ProtoInfo"] !== null) {
            $this->ProtoInfo = [];
            foreach ($param["ProtoInfo"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtoInfo, $obj);
            }
        }
    }
}
