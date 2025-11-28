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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQPublicAccessMonitorData request structure.
 *
 * @method string getInstanceId() Obtain Exclusive Edition cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Exclusive Edition cluster ID.
 * @method string getMetricName() Obtain Metric name. Only single-metric pulling is supported. Currently supported metrics: ClientIntraffic and ClientOuttraffic.
 * @method void setMetricName(string $MetricName) Set Metric name. Only single-metric pulling is supported. Currently supported metrics: ClientIntraffic and ClientOuttraffic.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time, current time by default.
 * @method void setEndTime(string $EndTime) Set End time, current time by default.
 * @method integer getPeriod() Obtain Monitoring statistical period, such as 60 (in seconds). The default value is 300.
 * @method void setPeriod(integer $Period) Set Monitoring statistical period, such as 60 (in seconds). The default value is 300.
 */
class DescribeRocketMQPublicAccessMonitorDataRequest extends AbstractModel
{
    /**
     * @var string Exclusive Edition cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Metric name. Only single-metric pulling is supported. Currently supported metrics: ClientIntraffic and ClientOuttraffic.
     */
    public $MetricName;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time, current time by default.
     */
    public $EndTime;

    /**
     * @var integer Monitoring statistical period, such as 60 (in seconds). The default value is 300.
     */
    public $Period;

    /**
     * @param string $InstanceId Exclusive Edition cluster ID.
     * @param string $MetricName Metric name. Only single-metric pulling is supported. Currently supported metrics: ClientIntraffic and ClientOuttraffic.
     * @param string $StartTime Start time.
     * @param string $EndTime End time, current time by default.
     * @param integer $Period Monitoring statistical period, such as 60 (in seconds). The default value is 300.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
