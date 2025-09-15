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
 * Resource details
 *
 * @method string getSpec() Obtain Node specifications description, such as CVM.SA2.
 * @method void setSpec(string $Spec) Set Node specifications description, such as CVM.SA2.
 * @method integer getStorageType() Obtain Storage type.
Valid values:
<li>4: Cloud SSD.</li>
<li>5: Premium Cloud Disk.</li>
<li>6: Enhanced SSD.</li>
<li>11: Throughput HDD.</li>
<li>12: Tremendous SSD.</li>: this type is invalid upon creation, and automatic judgment will be conducted based on data disk type and node type.
 * @method void setStorageType(integer $StorageType) Set Storage type.
Valid values:
<li>4: Cloud SSD.</li>
<li>5: Premium Cloud Disk.</li>
<li>6: Enhanced SSD.</li>
<li>11: Throughput HDD.</li>
<li>12: Tremendous SSD.</li>: this type is invalid upon creation, and automatic judgment will be conducted based on data disk type and node type.
 * @method string getDiskType() Obtain Disk type.
Valid values.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
 * @method void setDiskType(string $DiskType) Set Disk type.
Valid values.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
 * @method integer getMemSize() Obtain Memory capacity, in MB.
 * @method void setMemSize(integer $MemSize) Set Memory capacity, in MB.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getDiskSize() Obtain Data disk capacity.
 * @method void setDiskSize(integer $DiskSize) Set Data disk capacity.
 * @method integer getRootSize() Obtain System disk capacity.
 * @method void setRootSize(integer $RootSize) Set System disk capacity.
 * @method array getMultiDisks() Obtain List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMultiDisks(array $MultiDisks) Set List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Specifications type, such as S2.MEDIUM8.
 * @method void setInstanceType(string $InstanceType) Set Specifications type, such as S2.MEDIUM8.
 * @method integer getLocalDiskNum() Obtain Number of local disks. This field is deprecated.
 * @method void setLocalDiskNum(integer $LocalDiskNum) Set Number of local disks. This field is deprecated.
 * @method integer getDiskNum() Obtain Number of local disks, such as 2.
 * @method void setDiskNum(integer $DiskNum) Set Number of local disks, such as 2.
 * @method string getGpuDesc() Obtain GPU information.
 * @method void setGpuDesc(string $GpuDesc) Set GPU information.
 */
class Resource extends AbstractModel
{
    /**
     * @var string Node specifications description, such as CVM.SA2.
     */
    public $Spec;

    /**
     * @var integer Storage type.
Valid values:
<li>4: Cloud SSD.</li>
<li>5: Premium Cloud Disk.</li>
<li>6: Enhanced SSD.</li>
<li>11: Throughput HDD.</li>
<li>12: Tremendous SSD.</li>: this type is invalid upon creation, and automatic judgment will be conducted based on data disk type and node type.
     */
    public $StorageType;

    /**
     * @var string Disk type.
Valid values.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
     */
    public $DiskType;

    /**
     * @var integer Memory capacity, in MB.
     */
    public $MemSize;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Data disk capacity.
     */
    public $DiskSize;

    /**
     * @var integer System disk capacity.
     */
    public $RootSize;

    /**
     * @var array List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MultiDisks;

    /**
     * @var array List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Specifications type, such as S2.MEDIUM8.
     */
    public $InstanceType;

    /**
     * @var integer Number of local disks. This field is deprecated.
     */
    public $LocalDiskNum;

    /**
     * @var integer Number of local disks, such as 2.
     */
    public $DiskNum;

    /**
     * @var string GPU information.
     */
    public $GpuDesc;

    /**
     * @param string $Spec Node specifications description, such as CVM.SA2.
     * @param integer $StorageType Storage type.
Valid values:
<li>4: Cloud SSD.</li>
<li>5: Premium Cloud Disk.</li>
<li>6: Enhanced SSD.</li>
<li>11: Throughput HDD.</li>
<li>12: Tremendous SSD.</li>: this type is invalid upon creation, and automatic judgment will be conducted based on data disk type and node type.
     * @param string $DiskType Disk type.
Valid values.
<li>CLOUD_SSD: Cloud SSD.</li>
<li>CLOUD_PREMIUM: Premium Cloud Disk.</li>
<li>CLOUD_BASIC: Cloud Disk.</li>
     * @param integer $MemSize Memory capacity, in MB.
     * @param integer $Cpu Number of CPU cores.
     * @param integer $DiskSize Data disk capacity.
     * @param integer $RootSize System disk capacity.
     * @param array $MultiDisks List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Specifications type, such as S2.MEDIUM8.
     * @param integer $LocalDiskNum Number of local disks. This field is deprecated.
     * @param integer $DiskNum Number of local disks, such as 2.
     * @param string $GpuDesc GPU information.
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
    }
}
