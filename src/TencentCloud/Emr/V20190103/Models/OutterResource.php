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
 * Resource details
 *
 * @method string getSpec() Obtain Specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(string $Spec) Set Specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSpecName() Obtain Specification name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Specification name
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
 * @method integer getCpu() Obtain Number of CPUs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPUs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskSize() Obtain Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiskSize(integer $DiskSize) Set Disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Specification
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OutterResource extends AbstractModel
{
    /**
     * @var string Specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Spec;

    /**
     * @var string Specification name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

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
     * @var integer Number of CPUs
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @param string $Spec Specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SpecName Specification name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RootSize System disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Memory size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPUs
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskSize Disk size
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Specification
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

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
