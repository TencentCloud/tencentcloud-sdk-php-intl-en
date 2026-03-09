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
 * Resource group monitoring metrics.
 *
 * @method integer getCpuNum() Obtain Resource group specification, indicates the number of cpus.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuNum(integer $CpuNum) Set Resource group specification, indicates the number of cpus.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskVolume() Obtain Resource group specification related to disk specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskVolume(integer $DiskVolume) Set Resource group specification related to disk specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Resource group specification related to memory size. unit: gb.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Resource group specification related to memory size. unit: gb.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLifeCycle() Obtain Resource group lifecycle. unit: day.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifeCycle(integer $LifeCycle) Set Resource group lifecycle. unit: day.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaximumConcurrency() Obtain Resource group specification related to highest concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaximumConcurrency(integer $MaximumConcurrency) Set Resource group specification related to highest concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Resource group status

-0 - initializing.
-1. running.
-2 --- operation exception.
-Releasing.
-4 --- released.
-Creating.
-6 --- creation failed.
-7 --- updating.
-8 --- update failed.
-9 --- expired.
- 10 --- release failed.
-11 --- in use.
-12 --- inactive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Resource group status

-0 - initializing.
-1. running.
-2 --- operation exception.
-Releasing.
-4 --- released.
-Creating.
-6 --- creation failed.
-7 --- updating.
-8 --- update failed.
-9 --- expired.
- 10 --- release failed.
-11 --- in use.
-12 --- inactive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetricSnapshots() Obtain Metric detail.
 * @method void setMetricSnapshots(array $MetricSnapshots) Set Metric detail.
 */
class ResourceGroupMetrics extends AbstractModel
{
    /**
     * @var integer Resource group specification, indicates the number of cpus.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuNum;

    /**
     * @var integer Resource group specification related to disk specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskVolume;

    /**
     * @var integer Resource group specification related to memory size. unit: gb.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var integer Resource group lifecycle. unit: day.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifeCycle;

    /**
     * @var integer Resource group specification related to highest concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaximumConcurrency;

    /**
     * @var integer Resource group status

-0 - initializing.
-1. running.
-2 --- operation exception.
-Releasing.
-4 --- released.
-Creating.
-6 --- creation failed.
-7 --- updating.
-8 --- update failed.
-9 --- expired.
- 10 --- release failed.
-11 --- in use.
-12 --- inactive.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Metric detail.
     */
    public $MetricSnapshots;

    /**
     * @param integer $CpuNum Resource group specification, indicates the number of cpus.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskVolume Resource group specification related to disk specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Resource group specification related to memory size. unit: gb.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LifeCycle Resource group lifecycle. unit: day.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaximumConcurrency Resource group specification related to highest concurrency.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Resource group status

-0 - initializing.
-1. running.
-2 --- operation exception.
-Releasing.
-4 --- released.
-Creating.
-6 --- creation failed.
-7 --- updating.
-8 --- update failed.
-9 --- expired.
- 10 --- release failed.
-11 --- in use.
-12 --- inactive.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MetricSnapshots Metric detail.
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
        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("DiskVolume",$param) and $param["DiskVolume"] !== null) {
            $this->DiskVolume = $param["DiskVolume"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = $param["LifeCycle"];
        }

        if (array_key_exists("MaximumConcurrency",$param) and $param["MaximumConcurrency"] !== null) {
            $this->MaximumConcurrency = $param["MaximumConcurrency"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MetricSnapshots",$param) and $param["MetricSnapshots"] !== null) {
            $this->MetricSnapshots = [];
            foreach ($param["MetricSnapshots"] as $key => $value){
                $obj = new MetricData();
                $obj->deserialize($value);
                array_push($this->MetricSnapshots, $obj);
            }
        }
    }
}
