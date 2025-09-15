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
 * Resource queried for price
 *
 * @method string getSpec() Obtain Required specifications.
 * @method void setSpec(string $Spec) Set Required specifications.
 * @method integer getStorageType() Obtain Hard disk type.
 * @method void setStorageType(integer $StorageType) Set Hard disk type.
 * @method string getDiskType() Obtain Hard disk type.
 * @method void setDiskType(string $DiskType) Set Hard disk type.
 * @method integer getRootSize() Obtain System disk size.
 * @method void setRootSize(integer $RootSize) Set System disk size.
 * @method integer getMemSize() Obtain Memory size.
 * @method void setMemSize(integer $MemSize) Set Memory size.
 * @method integer getCpu() Obtain Number of cores.
 * @method void setCpu(integer $Cpu) Set Number of cores.
 * @method integer getDiskSize() Obtain Hard disk size.
 * @method void setDiskSize(integer $DiskSize) Set Hard disk size.
 * @method array getMultiDisks() Obtain List of cloud disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMultiDisks(array $MultiDisks) Set List of cloud disks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskCnt() Obtain Number of disks.
 * @method void setDiskCnt(integer $DiskCnt) Set Number of disks.
 * @method string getInstanceType() Obtain Specifications.
 * @method void setInstanceType(string $InstanceType) Set Specifications.
 * @method array getTags() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskNum() Obtain Number of disks.
 * @method void setDiskNum(integer $DiskNum) Set Number of disks.
 * @method integer getLocalDiskNum() Obtain Number of local disks.
 * @method void setLocalDiskNum(integer $LocalDiskNum) Set Number of local disks.
 * @method string getGpuDesc() Obtain GPU information.
 * @method void setGpuDesc(string $GpuDesc) Set GPU information.
 */
class PriceResource extends AbstractModel
{
    /**
     * @var string Required specifications.
     */
    public $Spec;

    /**
     * @var integer Hard disk type.
     */
    public $StorageType;

    /**
     * @var string Hard disk type.
     */
    public $DiskType;

    /**
     * @var integer System disk size.
     */
    public $RootSize;

    /**
     * @var integer Memory size.
     */
    public $MemSize;

    /**
     * @var integer Number of cores.
     */
    public $Cpu;

    /**
     * @var integer Hard disk size.
     */
    public $DiskSize;

    /**
     * @var array List of cloud disks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MultiDisks;

    /**
     * @var integer Number of disks.
     */
    public $DiskCnt;

    /**
     * @var string Specifications.
     */
    public $InstanceType;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Number of disks.
     */
    public $DiskNum;

    /**
     * @var integer Number of local disks.
     */
    public $LocalDiskNum;

    /**
     * @var string GPU information.
     */
    public $GpuDesc;

    /**
     * @param string $Spec Required specifications.
     * @param integer $StorageType Hard disk type.
     * @param string $DiskType Hard disk type.
     * @param integer $RootSize System disk size.
     * @param integer $MemSize Memory size.
     * @param integer $Cpu Number of cores.
     * @param integer $DiskSize Hard disk size.
     * @param array $MultiDisks List of cloud disks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskCnt Number of disks.
     * @param string $InstanceType Specifications.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskNum Number of disks.
     * @param integer $LocalDiskNum Number of local disks.
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

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("LocalDiskNum",$param) and $param["LocalDiskNum"] !== null) {
            $this->LocalDiskNum = $param["LocalDiskNum"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }
    }
}
