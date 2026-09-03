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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource configuration.
 *
 * @method string getRole() Obtain Role. For example, PS, WORKER, DRIVER, and EXECUTOR.
 * @method void setRole(string $Role) Set Role. For example, PS, WORKER, DRIVER, and EXECUTOR.
 * @method integer getCpu() Obtain Number of CPU cores, which is required to be configured when resource groups are used. Unit: 1/1000, where 1000 represents 1 core.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores, which is required to be configured when resource groups are used. Unit: 1/1000, where 1000 represents 1 core.
 * @method integer getMemory() Obtain Memory size, in MB. This parameter needs to be configured when resource groups are used.
 * @method void setMemory(integer $Memory) Set Memory size, in MB. This parameter needs to be configured when resource groups are used.
 * @method string getGpuType() Obtain GPU card type, which is required to be configured when resource groups are used.
 * @method void setGpuType(string $GpuType) Set GPU card type, which is required to be configured when resource groups are used.
 * @method integer getGpu() Obtain Number of GPU cards, which is required to be configured when resource groups are used. Unit: 1/100, where 100 represents 1 card.
 * @method void setGpu(integer $Gpu) Set Number of GPU cards, which is required to be configured when resource groups are used. Unit: 1/100, where 100 represents 1 card.
 * @method string getInstanceType() Obtain CVM instance specification ID.
CVM instance specification (for postpaid billing). Valid values:
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C32
 * @method void setInstanceType(string $InstanceType) Set CVM instance specification ID.
CVM instance specification (for postpaid billing). Valid values:
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C32
 * @method integer getInstanceNum() Obtain Number of compute nodes.
 * @method void setInstanceNum(integer $InstanceNum) Set Number of compute nodes.
 * @method string getInstanceTypeAlias() Obtain CVM instance specification name.
CVM instance specification (for postpaid billing). Valid values:
4C8G 
8C16G 
8C32G 
16C32G
6C64G
24C48G
24C96G
32C64G
32C128G
8C40G V100*1 
8C80G V100*2 
32C160G V100*4
72C320G V100*8
32C128G T4*1 
40C160G T4*2 
80C32
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) Set CVM instance specification name.
CVM instance specification (for postpaid billing). Valid values:
4C8G 
8C16G 
8C32G 
16C32G
6C64G
24C48G
24C96G
32C64G
32C128G
8C40G V100*1 
8C80G V100*2 
32C160G V100*4
72C320G V100*8
32C128G T4*1 
40C160G T4*2 
80C32
 * @method RDMAConfig getRDMAConfig() Obtain RDMA configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRDMAConfig(RDMAConfig $RDMAConfig) Set RDMA configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceConfigInfo extends AbstractModel
{
    /**
     * @var string Role. For example, PS, WORKER, DRIVER, and EXECUTOR.
     */
    public $Role;

    /**
     * @var integer Number of CPU cores, which is required to be configured when resource groups are used. Unit: 1/1000, where 1000 represents 1 core.
     */
    public $Cpu;

    /**
     * @var integer Memory size, in MB. This parameter needs to be configured when resource groups are used.
     */
    public $Memory;

    /**
     * @var string GPU card type, which is required to be configured when resource groups are used.
     */
    public $GpuType;

    /**
     * @var integer Number of GPU cards, which is required to be configured when resource groups are used. Unit: 1/100, where 100 represents 1 card.
     */
    public $Gpu;

    /**
     * @var string CVM instance specification ID.
CVM instance specification (for postpaid billing). Valid values:
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C32
     */
    public $InstanceType;

    /**
     * @var integer Number of compute nodes.
     */
    public $InstanceNum;

    /**
     * @var string CVM instance specification name.
CVM instance specification (for postpaid billing). Valid values:
4C8G 
8C16G 
8C32G 
16C32G
6C64G
24C48G
24C96G
32C64G
32C128G
8C40G V100*1 
8C80G V100*2 
32C160G V100*4
72C320G V100*8
32C128G T4*1 
40C160G T4*2 
80C32
     */
    public $InstanceTypeAlias;

    /**
     * @var RDMAConfig RDMA configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RDMAConfig;

    /**
     * @param string $Role Role. For example, PS, WORKER, DRIVER, and EXECUTOR.
     * @param integer $Cpu Number of CPU cores, which is required to be configured when resource groups are used. Unit: 1/1000, where 1000 represents 1 core.
     * @param integer $Memory Memory size, in MB. This parameter needs to be configured when resource groups are used.
     * @param string $GpuType GPU card type, which is required to be configured when resource groups are used.
     * @param integer $Gpu Number of GPU cards, which is required to be configured when resource groups are used. Unit: 1/100, where 100 represents 1 card.
     * @param string $InstanceType CVM instance specification ID.
CVM instance specification (for postpaid billing). Valid values:
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C32
     * @param integer $InstanceNum Number of compute nodes.
     * @param string $InstanceTypeAlias CVM instance specification name.
CVM instance specification (for postpaid billing). Valid values:
4C8G 
8C16G 
8C32G 
16C32G
6C64G
24C48G
24C96G
32C64G
32C128G
8C40G V100*1 
8C80G V100*2 
32C160G V100*4
72C320G V100*8
32C128G T4*1 
40C160G T4*2 
80C32
     * @param RDMAConfig $RDMAConfig RDMA configuration.
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("InstanceTypeAlias",$param) and $param["InstanceTypeAlias"] !== null) {
            $this->InstanceTypeAlias = $param["InstanceTypeAlias"];
        }

        if (array_key_exists("RDMAConfig",$param) and $param["RDMAConfig"] !== null) {
            $this->RDMAConfig = new RDMAConfig();
            $this->RDMAConfig->deserialize($param["RDMAConfig"]);
        }
    }
}
