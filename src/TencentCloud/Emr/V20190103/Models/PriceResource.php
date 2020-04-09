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
 * Resource queried for price
 *
 * @method string getSpec() Obtain Target specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Target specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(integer $StorageType) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRootSize() Obtain System disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRootSize(integer $RootSize) Set System disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Memory size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Memory size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of cores
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMultiDisks() Obtain List of cloud disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMultiDisks(array $MultiDisks) Set List of cloud disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskCnt() Obtain Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskCnt(integer $DiskCnt) Set Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PriceResource extends AbstractModel
{
    /**
     * @var string Target specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @var integer Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var string Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer System disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RootSize;

    /**
     * @var integer Memory size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var integer Number of cores
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var array List of cloud disks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MultiDisks;

    /**
     * @var integer Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskCnt;

    /**
     * @var string Specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var array Tag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $Spec Target specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RootSize System disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Memory size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of cores
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MultiDisks List of cloud disks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskCnt Number of disks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
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

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
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

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }

        if (array_key_exists("DiskCnt",$param) and $param["DiskCnt"] !== null) {
            $this->DiskCnt = $param["DiskCnt"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
