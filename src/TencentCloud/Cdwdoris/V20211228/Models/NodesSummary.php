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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node role description information
 *
 * @method string getSpec() Obtain Model, such as S1
 * @method void setSpec(string $Spec) Set Model, such as S1
 * @method integer getNodeSize() Obtain Number of nodes
 * @method void setNodeSize(integer $NodeSize) Set Number of nodes
 * @method integer getCore() Obtain Number of CPU cores, in counts
 * @method void setCore(integer $Core) Set Number of CPU cores, in counts
 * @method integer getMemory() Obtain Memory size, in GB
 * @method void setMemory(integer $Memory) Set Memory size, in GB
 * @method integer getDisk() Obtain Disk size, in GB
 * @method void setDisk(integer $Disk) Set Disk size, in GB
 * @method string getDiskType() Obtain Disk type
 * @method void setDiskType(string $DiskType) Set Disk type
 * @method string getDiskDesc() Obtain Disk description
 * @method void setDiskDesc(string $DiskDesc) Set Disk description
 * @method AttachCBSSpec getAttachCBSSpec() Obtain Information of mounted cloud disks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttachCBSSpec(AttachCBSSpec $AttachCBSSpec) Set Information of mounted cloud disks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubProductType() Obtain Sub-product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubProductType(string $SubProductType) Set Sub-product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSpecCore() Obtain Specified cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecCore(integer $SpecCore) Set Specified cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSpecMemory() Obtain Specified memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecMemory(integer $SpecMemory) Set Specified memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskCount() Obtain Disk size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskCount(integer $DiskCount) Set Disk size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEncrypt() Obtain Whether it is encrypted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncrypt(integer $Encrypt) Set Whether it is encrypted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDiskSize() Obtain Maximum disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Maximum disk
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodesSummary extends AbstractModel
{
    /**
     * @var string Model, such as S1
     */
    public $Spec;

    /**
     * @var integer Number of nodes
     */
    public $NodeSize;

    /**
     * @var integer Number of CPU cores, in counts
     */
    public $Core;

    /**
     * @var integer Memory size, in GB
     */
    public $Memory;

    /**
     * @var integer Disk size, in GB
     */
    public $Disk;

    /**
     * @var string Disk type
     */
    public $DiskType;

    /**
     * @var string Disk description
     */
    public $DiskDesc;

    /**
     * @var AttachCBSSpec Information of mounted cloud disks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttachCBSSpec;

    /**
     * @var string Sub-product name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubProductType;

    /**
     * @var integer Specified cores
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecCore;

    /**
     * @var integer Specified memory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecMemory;

    /**
     * @var integer Disk size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskCount;

    /**
     * @var integer Whether it is encrypted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Encrypt;

    /**
     * @var integer Maximum disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDiskSize;

    /**
     * @param string $Spec Model, such as S1
     * @param integer $NodeSize Number of nodes
     * @param integer $Core Number of CPU cores, in counts
     * @param integer $Memory Memory size, in GB
     * @param integer $Disk Disk size, in GB
     * @param string $DiskType Disk type
     * @param string $DiskDesc Disk description
     * @param AttachCBSSpec $AttachCBSSpec Information of mounted cloud disks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubProductType Sub-product name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SpecCore Specified cores
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SpecMemory Specified memory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskCount Disk size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Encrypt Whether it is encrypted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDiskSize Maximum disk
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("NodeSize",$param) and $param["NodeSize"] !== null) {
            $this->NodeSize = $param["NodeSize"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("AttachCBSSpec",$param) and $param["AttachCBSSpec"] !== null) {
            $this->AttachCBSSpec = new AttachCBSSpec();
            $this->AttachCBSSpec->deserialize($param["AttachCBSSpec"]);
        }

        if (array_key_exists("SubProductType",$param) and $param["SubProductType"] !== null) {
            $this->SubProductType = $param["SubProductType"];
        }

        if (array_key_exists("SpecCore",$param) and $param["SpecCore"] !== null) {
            $this->SpecCore = $param["SpecCore"];
        }

        if (array_key_exists("SpecMemory",$param) and $param["SpecMemory"] !== null) {
            $this->SpecMemory = $param["SpecMemory"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }
    }
}
