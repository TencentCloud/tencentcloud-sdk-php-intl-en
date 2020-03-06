<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getSpec() Obtain Node specification description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Node specification description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageType() Obtain Storage class
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(integer $StorageType) Set Storage class
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Memory capacity in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Memory capacity in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain Data disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Data disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRootSize() Obtain System disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRootSize(integer $RootSize) Set System disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMultiDisks() Obtain List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMultiDisks(array $MultiDisks) Set List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Specification type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Specification type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLocalDiskNum() Obtain Number of local disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDiskNum(integer $LocalDiskNum) Set Number of local disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskNum() Obtain Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskNum(integer $DiskNum) Set Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Resource details
 */
class Resource extends AbstractModel
{
    /**
     * @var string Node specification description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @var integer Storage class
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var string Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Memory capacity in MB
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var integer Number of CPU cores
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Data disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var integer System disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
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
     * @var string Specification type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var integer Number of local disks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDiskNum;

    /**
     * @var integer Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskNum;
    /**
     * @param string $Spec Node specification description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageType Storage class
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Memory capacity in MB
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize Data disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RootSize System disk capacity
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MultiDisks List of cloud disks. When the data disk is a cloud disk, `DiskType` and `DiskSize` are used directly; `MultiDisks` will be used for the excessive part
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags List of tags to be bound
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Specification type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LocalDiskNum Number of local disks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskNum Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
