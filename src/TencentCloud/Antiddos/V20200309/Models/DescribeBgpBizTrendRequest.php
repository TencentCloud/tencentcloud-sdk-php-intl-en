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
 * DescribeBgpBizTrend request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
 * @method void setBusiness(string $Business) Set Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
 * @method string getStartTime() Obtain Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method void setStartTime(string $StartTime) Set Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method string getEndTime() Obtain End of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method void setEndTime(string $EndTime) Set End of the time range for the query, such as `2020-09-22 00:00:00`.
 * @method string getMetricName() Obtain Statistical metric. Values: `intraffic`, `outtraffic`, `inpkg`, and `outpkg`.
 * @method void setMetricName(string $MetricName) Set Statistical metric. Values: `intraffic`, `outtraffic`, `inpkg`, and `outpkg`.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getFlag() Obtain `0`: Fixed time. `1`: Custom time.
 * @method void setFlag(integer $Flag) Set `0`: Fixed time. `1`: Custom time.
 */
class DescribeBgpBizTrendRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
     */
    public $Business;

    /**
     * @var string Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
     */
    public $StartTime;

    /**
     * @var string End of the time range for the query, such as `2020-09-22 00:00:00`.
     */
    public $EndTime;

    /**
     * @var string Statistical metric. Values: `intraffic`, `outtraffic`, `inpkg`, and `outpkg`.
     */
    public $MetricName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer `0`: Fixed time. `1`: Custom time.
     */
    public $Flag;

    /**
     * @param string $Business Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
     * @param string $StartTime Beginning of the time range for the query, such as `2020-09-22 00:00:00`.
     * @param string $EndTime End of the time range for the query, such as `2020-09-22 00:00:00`.
     * @param string $MetricName Statistical metric. Values: `intraffic`, `outtraffic`, `inpkg`, and `outpkg`.
     * @param string $InstanceId Instance ID
     * @param integer $Flag `0`: Fixed time. `1`: Custom time.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
