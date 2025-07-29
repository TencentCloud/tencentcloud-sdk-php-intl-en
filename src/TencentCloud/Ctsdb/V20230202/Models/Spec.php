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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance specification information (influxdb).
 *
 * @method integer getPayMode() Obtain 1: yearly/monthly subscription; 2: bill by hour.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set 1: yearly/monthly subscription; 2: bill by hour.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRequestUnit() Obtain Request unit. 0 indicates following the resource configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestUnit(integer $RequestUnit) Set Request unit. 0 indicates following the resource configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCpuLimit() Obtain Maximum number of CPU cores.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuLimit(float $CpuLimit) Set Maximum number of CPU cores.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMemoryLimit() Obtain Maximum memory size (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryLimit(float $MemoryLimit) Set Maximum memory size (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskLimit() Obtain Maximum number of disks (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskLimit(integer $DiskLimit) Set Maximum number of disks (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShards() Obtain Number of business shards.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShards(integer $Shards) Set Number of business shards.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReplicas() Obtain Number of business nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicas(integer $Replicas) Set Number of business nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Spec extends AbstractModel
{
    /**
     * @var integer 1: yearly/monthly subscription; 2: bill by hour.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var integer Request unit. 0 indicates following the resource configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestUnit;

    /**
     * @var float Maximum number of CPU cores.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuLimit;

    /**
     * @var float Maximum memory size (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryLimit;

    /**
     * @var integer Maximum number of disks (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskLimit;

    /**
     * @var integer Number of business shards.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Shards;

    /**
     * @var integer Number of business nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Replicas;

    /**
     * @param integer $PayMode 1: yearly/monthly subscription; 2: bill by hour.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RequestUnit Request unit. 0 indicates following the resource configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CpuLimit Maximum number of CPU cores.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MemoryLimit Maximum memory size (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskLimit Maximum number of disks (Gi).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Shards Number of business shards.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Replicas Number of business nodes.
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RequestUnit",$param) and $param["RequestUnit"] !== null) {
            $this->RequestUnit = $param["RequestUnit"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("DiskLimit",$param) and $param["DiskLimit"] !== null) {
            $this->DiskLimit = $param["DiskLimit"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = $param["Shards"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
