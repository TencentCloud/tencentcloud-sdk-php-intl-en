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
 * DescribeDDoSNetTrend request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getMetricName() Obtain Metric. Valid values: [bps (attack traffic bandwidth), pps (attack packet rate)]
 * @method void setMetricName(string $MetricName) Set Metric. Valid values: [bps (attack traffic bandwidth), pps (attack packet rate)]
 * @method integer getPeriod() Obtain Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
 * @method void setPeriod(integer $Period) Set Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
 * @method string getStartTime() Obtain Statistics start time
 * @method void setStartTime(string $StartTime) Set Statistics start time
 * @method string getEndTime() Obtain Statistics end time
 * @method void setEndTime(string $EndTime) Set Statistics end time
 */
class DescribeDDoSNetTrendRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Metric. Valid values: [bps (attack traffic bandwidth), pps (attack packet rate)]
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
     * @param string $Business Anti-DDoS service type (`net`: Anti-DDoS Ultimate)
     * @param string $Id Anti-DDoS instance ID
     * @param string $MetricName Metric. Valid values: [bps (attack traffic bandwidth), pps (attack packet rate)]
     * @param integer $Period Statistical granularity. Valid values: [300 (5-minute), 3600 (hourly), 86400 (daily)]
     * @param string $StartTime Statistics start time
     * @param string $EndTime Statistics end time
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
    }
}
