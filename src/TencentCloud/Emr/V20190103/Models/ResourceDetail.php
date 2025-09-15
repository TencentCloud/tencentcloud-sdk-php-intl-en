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
 * @method string getSpec() Obtain Specifications.
 * @method void setSpec(string $Spec) Set Specifications.
 * @method string getSpecName() Obtain Specifications name.
 * @method void setSpecName(string $SpecName) Set Specifications name.
 * @method integer getStorageType() Obtain Hard disk type.
 * @method void setStorageType(integer $StorageType) Set Hard disk type.
 * @method string getDiskType() Obtain Hard disk type.
 * @method void setDiskType(string $DiskType) Set Hard disk type.
 * @method integer getRootSize() Obtain System disk size.
 * @method void setRootSize(integer $RootSize) Set System disk size.
 * @method integer getMemSize() Obtain Memory size.
 * @method void setMemSize(integer $MemSize) Set Memory size.
 * @method integer getCpu() Obtain Number of CPUs.
 * @method void setCpu(integer $Cpu) Set Number of CPUs.
 * @method integer getDiskSize() Obtain Hard disk size.
 * @method void setDiskSize(integer $DiskSize) Set Hard disk size.
 * @method string getInstanceType() Obtain Specifications.
 * @method void setInstanceType(string $InstanceType) Set Specifications.
 */
class ResourceDetail extends AbstractModel
{
    /**
     * @var string Specifications.
     */
    public $Spec;

    /**
     * @var string Specifications name.
     */
    public $SpecName;

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
     * @var integer Number of CPUs.
     */
    public $Cpu;

    /**
     * @var integer Hard disk size.
     */
    public $DiskSize;

    /**
     * @var string Specifications.
     */
    public $InstanceType;

    /**
     * @param string $Spec Specifications.
     * @param string $SpecName Specifications name.
     * @param integer $StorageType Hard disk type.
     * @param string $DiskType Hard disk type.
     * @param integer $RootSize System disk size.
     * @param integer $MemSize Memory size.
     * @param integer $Cpu Number of CPUs.
     * @param integer $DiskSize Hard disk size.
     * @param string $InstanceType Specifications.
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
