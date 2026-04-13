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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exclusive cluster-related information, used for querying the user's exclusive cluster list.
 *
 * @method string getDedicatedClusterId() Obtain CDC ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC ID.
 * @method string getName() Obtain Dedicated cluster name.
 * @method void setName(string $Name) Set Dedicated cluster name.
 * @method string getZone() Obtain Specifies the AZ of the exclusive cluster.
 * @method void setZone(string $Zone) Set Specifies the AZ of the exclusive cluster.
 * @method array getStandbyDedicatedClusterSet() Obtain Disaster recovery cluster.
 * @method void setStandbyDedicatedClusterSet(array $StandbyDedicatedClusterSet) Set Disaster recovery cluster.
 * @method integer getInstanceCount() Obtain Specifies the instance count.
 * @method void setInstanceCount(integer $InstanceCount) Set Specifies the instance count.
 * @method integer getCpuTotal() Obtain Total number of cpus.
 * @method void setCpuTotal(integer $CpuTotal) Set Total number of cpus.
 * @method integer getCpuAvailable() Obtain Specifies the available amount of Cpu.
 * @method void setCpuAvailable(integer $CpuAvailable) Set Specifies the available amount of Cpu.
 * @method integer getMemTotal() Obtain Total memory capacity in GB.
 * @method void setMemTotal(integer $MemTotal) Set Total memory capacity in GB.
 * @method integer getMemAvailable() Obtain Available memory in GB.
 * @method void setMemAvailable(integer $MemAvailable) Set Available memory in GB.
 * @method integer getDiskTotal() Obtain Total disk capacity (unit: GB).
 * @method void setDiskTotal(integer $DiskTotal) Set Total disk capacity (unit: GB).
 * @method integer getDiskAvailable() Obtain Disk availability (unit: GB).
 * @method void setDiskAvailable(integer $DiskAvailable) Set Disk availability (unit: GB).
 */
class DedicatedCluster extends AbstractModel
{
    /**
     * @var string CDC ID.
     */
    public $DedicatedClusterId;

    /**
     * @var string Dedicated cluster name.
     */
    public $Name;

    /**
     * @var string Specifies the AZ of the exclusive cluster.
     */
    public $Zone;

    /**
     * @var array Disaster recovery cluster.
     */
    public $StandbyDedicatedClusterSet;

    /**
     * @var integer Specifies the instance count.
     */
    public $InstanceCount;

    /**
     * @var integer Total number of cpus.
     */
    public $CpuTotal;

    /**
     * @var integer Specifies the available amount of Cpu.
     */
    public $CpuAvailable;

    /**
     * @var integer Total memory capacity in GB.
     */
    public $MemTotal;

    /**
     * @var integer Available memory in GB.
     */
    public $MemAvailable;

    /**
     * @var integer Total disk capacity (unit: GB).
     */
    public $DiskTotal;

    /**
     * @var integer Disk availability (unit: GB).
     */
    public $DiskAvailable;

    /**
     * @param string $DedicatedClusterId CDC ID.
     * @param string $Name Dedicated cluster name.
     * @param string $Zone Specifies the AZ of the exclusive cluster.
     * @param array $StandbyDedicatedClusterSet Disaster recovery cluster.
     * @param integer $InstanceCount Specifies the instance count.
     * @param integer $CpuTotal Total number of cpus.
     * @param integer $CpuAvailable Specifies the available amount of Cpu.
     * @param integer $MemTotal Total memory capacity in GB.
     * @param integer $MemAvailable Available memory in GB.
     * @param integer $DiskTotal Total disk capacity (unit: GB).
     * @param integer $DiskAvailable Disk availability (unit: GB).
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StandbyDedicatedClusterSet",$param) and $param["StandbyDedicatedClusterSet"] !== null) {
            $this->StandbyDedicatedClusterSet = $param["StandbyDedicatedClusterSet"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }
    }
}
