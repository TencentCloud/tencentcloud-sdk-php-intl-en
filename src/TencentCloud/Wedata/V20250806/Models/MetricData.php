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
 * Monitoring metrics
 *
 * @method string getMetricName() Obtain Metric name

-ConcurrencyUsage --- concurrency usage rate.
-CpuCoreUsage --- cpu utilization.
-CpuLoad --- cpu load.
-DevelopQueueTask --- number of tasks in the queue.
-Number of running develop tasks.
-DevelopSchedulingTask --- number of development tasks being scheduled.
-DiskUsage --- disk usage.
-DiskUsed --- disk used amount.
-MaximumConcurrency --- maximum concurrency.
-MemoryLoad --- memory load.
-MemoryUsage --- memory usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricName(string $MetricName) Set Metric name

-ConcurrencyUsage --- concurrency usage rate.
-CpuCoreUsage --- cpu utilization.
-CpuLoad --- cpu load.
-DevelopQueueTask --- number of tasks in the queue.
-Number of running develop tasks.
-DevelopSchedulingTask --- number of development tasks being scheduled.
-DiskUsage --- disk usage.
-DiskUsed --- disk used amount.
-MaximumConcurrency --- maximum concurrency.
-MemoryLoad --- memory load.
-MemoryUsage --- memory usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSnapshotValue() Obtain Current value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotValue(integer $SnapshotValue) Set Current value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTrendList() Obtain Metric trend.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrendList(array $TrendList) Set Metric trend.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricData extends AbstractModel
{
    /**
     * @var string Metric name

-ConcurrencyUsage --- concurrency usage rate.
-CpuCoreUsage --- cpu utilization.
-CpuLoad --- cpu load.
-DevelopQueueTask --- number of tasks in the queue.
-Number of running develop tasks.
-DevelopSchedulingTask --- number of development tasks being scheduled.
-DiskUsage --- disk usage.
-DiskUsed --- disk used amount.
-MaximumConcurrency --- maximum concurrency.
-MemoryLoad --- memory load.
-MemoryUsage --- memory usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricName;

    /**
     * @var integer Current value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotValue;

    /**
     * @var array Metric trend.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrendList;

    /**
     * @param string $MetricName Metric name

-ConcurrencyUsage --- concurrency usage rate.
-CpuCoreUsage --- cpu utilization.
-CpuLoad --- cpu load.
-DevelopQueueTask --- number of tasks in the queue.
-Number of running develop tasks.
-DevelopSchedulingTask --- number of development tasks being scheduled.
-DiskUsage --- disk usage.
-DiskUsed --- disk used amount.
-MaximumConcurrency --- maximum concurrency.
-MemoryLoad --- memory load.
-MemoryUsage --- memory usage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SnapshotValue Current value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TrendList Metric trend.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("SnapshotValue",$param) and $param["SnapshotValue"] !== null) {
            $this->SnapshotValue = $param["SnapshotValue"];
        }

        if (array_key_exists("TrendList",$param) and $param["TrendList"] !== null) {
            $this->TrendList = [];
            foreach ($param["TrendList"] as $key => $value){
                $obj = new TrendData();
                $obj->deserialize($value);
                array_push($this->TrendList, $obj);
            }
        }
    }
}
