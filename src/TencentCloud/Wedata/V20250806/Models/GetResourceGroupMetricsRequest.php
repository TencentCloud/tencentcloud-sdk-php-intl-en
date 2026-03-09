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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResourceGroupMetrics request structure.
 *
 * @method string getResourceGroupId() Obtain Execution resource group id.
 * @method void setResourceGroupId(string $ResourceGroupId) Set Execution resource group id.
 * @method integer getStartTime() Obtain Start time of usage trend (ms). default last hour.
 * @method void setStartTime(integer $StartTime) Set Start time of usage trend (ms). default last hour.
 * @method integer getEndTime() Obtain Usage trend end time (ms), default current.
 * @method void setEndTime(integer $EndTime) Set Usage trend end time (ms), default current.
 * @method string getMetricType() Obtain Metrics and dimensions.

-all.
-task metrics.
-system metrics.
 * @method void setMetricType(string $MetricType) Set Metrics and dimensions.

-all.
-task metrics.
-system metrics.
 * @method integer getGranularity() Obtain Metric collection granularity, in minutes, default 1 minute.
 * @method void setGranularity(integer $Granularity) Set Metric collection granularity, in minutes, default 1 minute.
 */
class GetResourceGroupMetricsRequest extends AbstractModel
{
    /**
     * @var string Execution resource group id.
     */
    public $ResourceGroupId;

    /**
     * @var integer Start time of usage trend (ms). default last hour.
     */
    public $StartTime;

    /**
     * @var integer Usage trend end time (ms), default current.
     */
    public $EndTime;

    /**
     * @var string Metrics and dimensions.

-all.
-task metrics.
-system metrics.
     */
    public $MetricType;

    /**
     * @var integer Metric collection granularity, in minutes, default 1 minute.
     */
    public $Granularity;

    /**
     * @param string $ResourceGroupId Execution resource group id.
     * @param integer $StartTime Start time of usage trend (ms). default last hour.
     * @param integer $EndTime Usage trend end time (ms), default current.
     * @param string $MetricType Metrics and dimensions.

-all.
-task metrics.
-system metrics.
     * @param integer $Granularity Metric collection granularity, in minutes, default 1 minute.
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
