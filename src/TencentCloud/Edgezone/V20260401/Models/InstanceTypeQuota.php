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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account model quota information in the availability zone, including availability zone, model detail and quota quantity.
 *
 * @method string getZone() Obtain Availability zone code.
 * @method void setZone(string $Zone) Set Availability zone code.
 * @method string getInstanceType() Obtain Model specifications.
 * @method void setInstanceType(string $InstanceType) Set Model specifications.
 * @method string getInstanceFamily() Obtain Model family.
 * @method void setInstanceFamily(string $InstanceFamily) Set Model family.
 * @method integer getCpuCores() Obtain Number of CPU cores.
 * @method void setCpuCores(integer $CpuCores) Set Number of CPU cores.
 * @method string getCpuType() Obtain CPU type.
 * @method void setCpuType(string $CpuType) Set CPU type.
 * @method integer getMemoryGb() Obtain Memory size (GB).
 * @method void setMemoryGb(integer $MemoryGb) Set Memory size (GB).
 * @method string getSystemDiskType() Obtain System disk type.
 * @method void setSystemDiskType(string $SystemDiskType) Set System disk type.
 * @method integer getSystemDiskSize() Obtain System disk size (GB).
 * @method void setSystemDiskSize(integer $SystemDiskSize) Set System disk size (GB).
 * @method integer getSystemDiskCount() Obtain Number of system disks.
 * @method void setSystemDiskCount(integer $SystemDiskCount) Set Number of system disks.
 * @method string getDataDiskType() Obtain Data disk type.
 * @method void setDataDiskType(string $DataDiskType) Set Data disk type.
 * @method integer getDataDiskSize() Obtain Data disk size (GB).
 * @method void setDataDiskSize(integer $DataDiskSize) Set Data disk size (GB).
 * @method integer getDataDiskCount() Obtain Number of data disks.
 * @method void setDataDiskCount(integer $DataDiskCount) Set Number of data disks.
 * @method string getDiskType() Obtain Disk description string (backward compatibility).
 * @method void setDiskType(string $DiskType) Set Disk description string (backward compatibility).
 * @method string getNetworkInterfaceType() Obtain Network interface type.
 * @method void setNetworkInterfaceType(string $NetworkInterfaceType) Set Network interface type.
 * @method string getGpuType() Obtain GPU type. Empty string if no GPU is available.
 * @method void setGpuType(string $GpuType) Set GPU type. Empty string if no GPU is available.
 * @method integer getQuota() Obtain Quota quantity. 0 indicates no restriction.
 * @method void setQuota(integer $Quota) Set Quota quantity. 0 indicates no restriction.
 */
class InstanceTypeQuota extends AbstractModel
{
    /**
     * @var string Availability zone code.
     */
    public $Zone;

    /**
     * @var string Model specifications.
     */
    public $InstanceType;

    /**
     * @var string Model family.
     */
    public $InstanceFamily;

    /**
     * @var integer Number of CPU cores.
     */
    public $CpuCores;

    /**
     * @var string CPU type.
     */
    public $CpuType;

    /**
     * @var integer Memory size (GB).
     */
    public $MemoryGb;

    /**
     * @var string System disk type.
     */
    public $SystemDiskType;

    /**
     * @var integer System disk size (GB).
     */
    public $SystemDiskSize;

    /**
     * @var integer Number of system disks.
     */
    public $SystemDiskCount;

    /**
     * @var string Data disk type.
     */
    public $DataDiskType;

    /**
     * @var integer Data disk size (GB).
     */
    public $DataDiskSize;

    /**
     * @var integer Number of data disks.
     */
    public $DataDiskCount;

    /**
     * @var string Disk description string (backward compatibility).
     */
    public $DiskType;

    /**
     * @var string Network interface type.
     */
    public $NetworkInterfaceType;

    /**
     * @var string GPU type. Empty string if no GPU is available.
     */
    public $GpuType;

    /**
     * @var integer Quota quantity. 0 indicates no restriction.
     */
    public $Quota;

    /**
     * @param string $Zone Availability zone code.
     * @param string $InstanceType Model specifications.
     * @param string $InstanceFamily Model family.
     * @param integer $CpuCores Number of CPU cores.
     * @param string $CpuType CPU type.
     * @param integer $MemoryGb Memory size (GB).
     * @param string $SystemDiskType System disk type.
     * @param integer $SystemDiskSize System disk size (GB).
     * @param integer $SystemDiskCount Number of system disks.
     * @param string $DataDiskType Data disk type.
     * @param integer $DataDiskSize Data disk size (GB).
     * @param integer $DataDiskCount Number of data disks.
     * @param string $DiskType Disk description string (backward compatibility).
     * @param string $NetworkInterfaceType Network interface type.
     * @param string $GpuType GPU type. Empty string if no GPU is available.
     * @param integer $Quota Quota quantity. 0 indicates no restriction.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("CpuCores",$param) and $param["CpuCores"] !== null) {
            $this->CpuCores = $param["CpuCores"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("MemoryGb",$param) and $param["MemoryGb"] !== null) {
            $this->MemoryGb = $param["MemoryGb"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("SystemDiskCount",$param) and $param["SystemDiskCount"] !== null) {
            $this->SystemDiskCount = $param["SystemDiskCount"];
        }

        if (array_key_exists("DataDiskType",$param) and $param["DataDiskType"] !== null) {
            $this->DataDiskType = $param["DataDiskType"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("DataDiskCount",$param) and $param["DataDiskCount"] !== null) {
            $this->DataDiskCount = $param["DataDiskCount"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("NetworkInterfaceType",$param) and $param["NetworkInterfaceType"] !== null) {
            $this->NetworkInterfaceType = $param["NetworkInterfaceType"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }
    }
}
