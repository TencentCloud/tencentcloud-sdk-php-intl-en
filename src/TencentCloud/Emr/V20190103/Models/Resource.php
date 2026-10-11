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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource details.
 *
 * @method string getSpec() Obtain <p>Node specification description, such as CVM.SA2.</p>
 * @method void setSpec(string $Spec) Set <p>Node specification description, such as CVM.SA2.</p>
 * @method integer getStorageType() Obtain <p>Valid values:<br>&quot;LOCAL_SSD&quot;   3     // Local SSD<br>&quot;CLOUD_SSD&quot;   4     // Cloud SSD<br>&quot;CLOUD_PREMIUM&quot;  5  // Premium Disk<br>&quot;CLOUD_HSSD&quot;   6    // Enhanced SSD<br>&quot;CLOUD_THROUGHPUT&quot; 11// Throughput-Optimized Cloud Disk<br>&quot;CLOUD_TSSD&quot;  12     // Tremendous SSD<br>&quot;CLOUD_BSSD&quot;    13   // Balanced SSD<br>&quot;CLOUD_BIGDATA&quot; 14   // Big Data Cloud Disk<br>&quot;CLOUD_HIGHIO&quot;  15   // High-IO Cloud Disk </p><p>This field is invalid. The actual system disk type is determined based on the data disk type and node type. If the node supports the selected data disk type, the system disk type is consistent with the data disk. It is recommended to use the CreateCluster API.</p>
 * @method void setStorageType(integer $StorageType) Set <p>Valid values:<br>&quot;LOCAL_SSD&quot;   3     // Local SSD<br>&quot;CLOUD_SSD&quot;   4     // Cloud SSD<br>&quot;CLOUD_PREMIUM&quot;  5  // Premium Disk<br>&quot;CLOUD_HSSD&quot;   6    // Enhanced SSD<br>&quot;CLOUD_THROUGHPUT&quot; 11// Throughput-Optimized Cloud Disk<br>&quot;CLOUD_TSSD&quot;  12     // Tremendous SSD<br>&quot;CLOUD_BSSD&quot;    13   // Balanced SSD<br>&quot;CLOUD_BIGDATA&quot; 14   // Big Data Cloud Disk<br>&quot;CLOUD_HIGHIO&quot;  15   // High-IO Cloud Disk </p><p>This field is invalid. The actual system disk type is determined based on the data disk type and node type. If the node supports the selected data disk type, the system disk type is consistent with the data disk. It is recommended to use the CreateCluster API.</p>
 * @method string getDiskType() Obtain <p>Data disk type. Valid values:</p><p>CLOUD_SSD: Cloud SSD</p><p>CLOUD_PREMIUM: Premium Disk</p><p>CLOUD_BASIC: Cloud Basic Disk</p><p>LOCAL_BASIC: Local Basic Disk</p><p>LOCAL_SSD: Local SSD</p><p>CLOUD_HSSD: Enhanced SSD</p><p>CLOUD_THROUGHPUT: Throughput-Optimized Cloud Disk</p><p>CLOUD_TSSD: Tremendous SSD</p><p>CLOUD_BIGDATA: Big Data Cloud Disk</p><p>CLOUD_HIGHIO: High-IO Cloud Disk</p><p>CLOUD_BSSD: Balanced SSD</p><p>REMOTE_SSD: Remote SSD Disk</p>
 * @method void setDiskType(string $DiskType) Set <p>Data disk type. Valid values:</p><p>CLOUD_SSD: Cloud SSD</p><p>CLOUD_PREMIUM: Premium Disk</p><p>CLOUD_BASIC: Cloud Basic Disk</p><p>LOCAL_BASIC: Local Basic Disk</p><p>LOCAL_SSD: Local SSD</p><p>CLOUD_HSSD: Enhanced SSD</p><p>CLOUD_THROUGHPUT: Throughput-Optimized Cloud Disk</p><p>CLOUD_TSSD: Tremendous SSD</p><p>CLOUD_BIGDATA: Big Data Cloud Disk</p><p>CLOUD_HIGHIO: High-IO Cloud Disk</p><p>CLOUD_BSSD: Balanced SSD</p><p>REMOTE_SSD: Remote SSD Disk</p>
 * @method integer getMemSize() Obtain <p>Memory capacity (MB).</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory capacity (MB).</p>
 * @method integer getCpu() Obtain <p>Number of CPU cores.</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of CPU cores.</p>
 * @method integer getDiskSize() Obtain <p>Data disk capacity.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Data disk capacity.</p>
 * @method integer getRootSize() Obtain <p>System disk capacity.</p>
 * @method void setRootSize(integer $RootSize) Set <p>System disk capacity.</p>
 * @method array getMultiDisks() Obtain <p>Cloud disk list. When the data disk is a single cloud disk, use the DiskType and DiskSize parameters directly. Use MultiDisks for extra disks.</p>
 * @method void setMultiDisks(array $MultiDisks) Set <p>Cloud disk list. When the data disk is a single cloud disk, use the DiskType and DiskSize parameters directly. Use MultiDisks for extra disks.</p>
 * @method array getTags() Obtain <p>List of tags to be bound.</p>
 * @method void setTags(array $Tags) Set <p>List of tags to be bound.</p>
 * @method string getInstanceType() Obtain <p>Specifications type, such as S2.MEDIUM8.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Specifications type, such as S2.MEDIUM8.</p>
 * @method integer getLocalDiskNum() Obtain <p>Number of local disks. This field has been deprecated.</p>
 * @method void setLocalDiskNum(integer $LocalDiskNum) Set <p>Number of local disks. This field has been deprecated.</p>
 * @method integer getDiskNum() Obtain <p>Number of local disks, such as 2.</p>
 * @method void setDiskNum(integer $DiskNum) Set <p>Number of local disks, such as 2.</p>
 * @method string getGpuDesc() Obtain <p>GPU information.</p>
 * @method void setGpuDesc(string $GpuDesc) Set <p>GPU information.</p>
 * @method integer getPartitionNumber() Obtain <p>Number of partitions in a placement group.</p>
 * @method void setPartitionNumber(integer $PartitionNumber) Set <p>Number of partitions in a placement group.</p>
 * @method string getHCCHpcClusterId() Obtain <p>High-performance cluster ID.</p>
 * @method void setHCCHpcClusterId(string $HCCHpcClusterId) Set <p>High-performance cluster ID.</p>
 * @method string getCustomNodeName() Obtain <p>Custom hostname.</p>
 * @method void setCustomNodeName(string $CustomNodeName) Set <p>Custom hostname.</p>
 * @method GpuImageDriverSpec getGpuImageDriver() Obtain <p>GPU image driver configuration.</p>
 * @method void setGpuImageDriver(GpuImageDriverSpec $GpuImageDriver) Set <p>GPU image driver configuration.</p>
 */
class Resource extends AbstractModel
{
    /**
     * @var string <p>Node specification description, such as CVM.SA2.</p>
     */
    public $Spec;

    /**
     * @var integer <p>Valid values:<br>&quot;LOCAL_SSD&quot;   3     // Local SSD<br>&quot;CLOUD_SSD&quot;   4     // Cloud SSD<br>&quot;CLOUD_PREMIUM&quot;  5  // Premium Disk<br>&quot;CLOUD_HSSD&quot;   6    // Enhanced SSD<br>&quot;CLOUD_THROUGHPUT&quot; 11// Throughput-Optimized Cloud Disk<br>&quot;CLOUD_TSSD&quot;  12     // Tremendous SSD<br>&quot;CLOUD_BSSD&quot;    13   // Balanced SSD<br>&quot;CLOUD_BIGDATA&quot; 14   // Big Data Cloud Disk<br>&quot;CLOUD_HIGHIO&quot;  15   // High-IO Cloud Disk </p><p>This field is invalid. The actual system disk type is determined based on the data disk type and node type. If the node supports the selected data disk type, the system disk type is consistent with the data disk. It is recommended to use the CreateCluster API.</p>
     */
    public $StorageType;

    /**
     * @var string <p>Data disk type. Valid values:</p><p>CLOUD_SSD: Cloud SSD</p><p>CLOUD_PREMIUM: Premium Disk</p><p>CLOUD_BASIC: Cloud Basic Disk</p><p>LOCAL_BASIC: Local Basic Disk</p><p>LOCAL_SSD: Local SSD</p><p>CLOUD_HSSD: Enhanced SSD</p><p>CLOUD_THROUGHPUT: Throughput-Optimized Cloud Disk</p><p>CLOUD_TSSD: Tremendous SSD</p><p>CLOUD_BIGDATA: Big Data Cloud Disk</p><p>CLOUD_HIGHIO: High-IO Cloud Disk</p><p>CLOUD_BSSD: Balanced SSD</p><p>REMOTE_SSD: Remote SSD Disk</p>
     */
    public $DiskType;

    /**
     * @var integer <p>Memory capacity (MB).</p>
     */
    public $MemSize;

    /**
     * @var integer <p>Number of CPU cores.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Data disk capacity.</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>System disk capacity.</p>
     */
    public $RootSize;

    /**
     * @var array <p>Cloud disk list. When the data disk is a single cloud disk, use the DiskType and DiskSize parameters directly. Use MultiDisks for extra disks.</p>
     */
    public $MultiDisks;

    /**
     * @var array <p>List of tags to be bound.</p>
     */
    public $Tags;

    /**
     * @var string <p>Specifications type, such as S2.MEDIUM8.</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Number of local disks. This field has been deprecated.</p>
     */
    public $LocalDiskNum;

    /**
     * @var integer <p>Number of local disks, such as 2.</p>
     */
    public $DiskNum;

    /**
     * @var string <p>GPU information.</p>
     */
    public $GpuDesc;

    /**
     * @var integer <p>Number of partitions in a placement group.</p>
     */
    public $PartitionNumber;

    /**
     * @var string <p>High-performance cluster ID.</p>
     */
    public $HCCHpcClusterId;

    /**
     * @var string <p>Custom hostname.</p>
     */
    public $CustomNodeName;

    /**
     * @var GpuImageDriverSpec <p>GPU image driver configuration.</p>
     */
    public $GpuImageDriver;

    /**
     * @param string $Spec <p>Node specification description, such as CVM.SA2.</p>
     * @param integer $StorageType <p>Valid values:<br>&quot;LOCAL_SSD&quot;   3     // Local SSD<br>&quot;CLOUD_SSD&quot;   4     // Cloud SSD<br>&quot;CLOUD_PREMIUM&quot;  5  // Premium Disk<br>&quot;CLOUD_HSSD&quot;   6    // Enhanced SSD<br>&quot;CLOUD_THROUGHPUT&quot; 11// Throughput-Optimized Cloud Disk<br>&quot;CLOUD_TSSD&quot;  12     // Tremendous SSD<br>&quot;CLOUD_BSSD&quot;    13   // Balanced SSD<br>&quot;CLOUD_BIGDATA&quot; 14   // Big Data Cloud Disk<br>&quot;CLOUD_HIGHIO&quot;  15   // High-IO Cloud Disk </p><p>This field is invalid. The actual system disk type is determined based on the data disk type and node type. If the node supports the selected data disk type, the system disk type is consistent with the data disk. It is recommended to use the CreateCluster API.</p>
     * @param string $DiskType <p>Data disk type. Valid values:</p><p>CLOUD_SSD: Cloud SSD</p><p>CLOUD_PREMIUM: Premium Disk</p><p>CLOUD_BASIC: Cloud Basic Disk</p><p>LOCAL_BASIC: Local Basic Disk</p><p>LOCAL_SSD: Local SSD</p><p>CLOUD_HSSD: Enhanced SSD</p><p>CLOUD_THROUGHPUT: Throughput-Optimized Cloud Disk</p><p>CLOUD_TSSD: Tremendous SSD</p><p>CLOUD_BIGDATA: Big Data Cloud Disk</p><p>CLOUD_HIGHIO: High-IO Cloud Disk</p><p>CLOUD_BSSD: Balanced SSD</p><p>REMOTE_SSD: Remote SSD Disk</p>
     * @param integer $MemSize <p>Memory capacity (MB).</p>
     * @param integer $Cpu <p>Number of CPU cores.</p>
     * @param integer $DiskSize <p>Data disk capacity.</p>
     * @param integer $RootSize <p>System disk capacity.</p>
     * @param array $MultiDisks <p>Cloud disk list. When the data disk is a single cloud disk, use the DiskType and DiskSize parameters directly. Use MultiDisks for extra disks.</p>
     * @param array $Tags <p>List of tags to be bound.</p>
     * @param string $InstanceType <p>Specifications type, such as S2.MEDIUM8.</p>
     * @param integer $LocalDiskNum <p>Number of local disks. This field has been deprecated.</p>
     * @param integer $DiskNum <p>Number of local disks, such as 2.</p>
     * @param string $GpuDesc <p>GPU information.</p>
     * @param integer $PartitionNumber <p>Number of partitions in a placement group.</p>
     * @param string $HCCHpcClusterId <p>High-performance cluster ID.</p>
     * @param string $CustomNodeName <p>Custom hostname.</p>
     * @param GpuImageDriverSpec $GpuImageDriver <p>GPU image driver configuration.</p>
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LocalDiskNum",$param) and $param["LocalDiskNum"] !== null) {
            $this->LocalDiskNum = $param["LocalDiskNum"];
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }

        if (array_key_exists("HCCHpcClusterId",$param) and $param["HCCHpcClusterId"] !== null) {
            $this->HCCHpcClusterId = $param["HCCHpcClusterId"];
        }

        if (array_key_exists("CustomNodeName",$param) and $param["CustomNodeName"] !== null) {
            $this->CustomNodeName = $param["CustomNodeName"];
        }

        if (array_key_exists("GpuImageDriver",$param) and $param["GpuImageDriver"] !== null) {
            $this->GpuImageDriver = new GpuImageDriverSpec();
            $this->GpuImageDriver->deserialize($param["GpuImageDriver"]);
        }
    }
}
