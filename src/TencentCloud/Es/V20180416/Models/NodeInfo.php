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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification information of a node type in the cluster (such as hot data node, warm data node, or dedicated primary node), including node type, number of nodes, node specification, disk type, and disk size. If `Type` is not specified, it will be a hot data node by default; if the node is a primary node, then the `DiskType` and `DiskSize` parameters will be ignored (as a primary node has no data disks)
 *
 * @method integer getNodeNum() Obtain Number of nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes
 * @method string getNodeType() Obtain Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method void setNodeType(string $NodeType) Set Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method string getType() Obtain Node type<li>`hotData`: hot data node</li>
<li>`warmData`: warm data node</li>
<li>`dedicatedMaster`: dedicated master node</li>
Default value: `hotData`
 * @method void setType(string $Type) Set Node type<li>`hotData`: hot data node</li>
<li>`warmData`: warm data node</li>
<li>`dedicatedMaster`: dedicated master node</li>
Default value: `hotData`
 * @method string getDiskType() Obtain Node disk type <li>CLOUD_SSD: SSD cloud storage </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
 * @method void setDiskType(string $DiskType) Set Node disk type <li>CLOUD_SSD: SSD cloud storage </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
 * @method integer getDiskSize() Obtain Node disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Node disk size in GB
 * @method LocalDiskInfo getLocalDiskInfo() Obtain Local disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDiskInfo(LocalDiskInfo $LocalDiskInfo) Set Local disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskCount() Obtain Number of node disks
 * @method void setDiskCount(integer $DiskCount) Set Number of node disks
 * @method integer getDiskEncrypt() Obtain Whether to encrypt node disk. 0: no (default); 1: yes.
 * @method void setDiskEncrypt(integer $DiskEncrypt) Set Whether to encrypt node disk. 0: no (default); 1: yes.
 * @method integer getCpuNum() Obtain CPU number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuNum(integer $CpuNum) Set CPU number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Memory size in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Memory size in GB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDiskEnhance() Obtain /
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskEnhance(integer $DiskEnhance) Set /
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var integer Number of nodes
     */
    public $NodeNum;

    /**
     * @var string Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     */
    public $NodeType;

    /**
     * @var string Node type<li>`hotData`: hot data node</li>
<li>`warmData`: warm data node</li>
<li>`dedicatedMaster`: dedicated master node</li>
Default value: `hotData`
     */
    public $Type;

    /**
     * @var string Node disk type <li>CLOUD_SSD: SSD cloud storage </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
     */
    public $DiskType;

    /**
     * @var integer Node disk size in GB
     */
    public $DiskSize;

    /**
     * @var LocalDiskInfo Local disk information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDiskInfo;

    /**
     * @var integer Number of node disks
     */
    public $DiskCount;

    /**
     * @var integer Whether to encrypt node disk. 0: no (default); 1: yes.
     */
    public $DiskEncrypt;

    /**
     * @var integer CPU number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuNum;

    /**
     * @var integer Memory size in GB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var integer /
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskEnhance;

    /**
     * @param integer $NodeNum Number of nodes
     * @param string $NodeType Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     * @param string $Type Node type<li>`hotData`: hot data node</li>
<li>`warmData`: warm data node</li>
<li>`dedicatedMaster`: dedicated master node</li>
Default value: `hotData`
     * @param string $DiskType Node disk type <li>CLOUD_SSD: SSD cloud storage </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
     * @param integer $DiskSize Node disk size in GB
     * @param LocalDiskInfo $LocalDiskInfo Local disk information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskCount Number of node disks
     * @param integer $DiskEncrypt Whether to encrypt node disk. 0: no (default); 1: yes.
     * @param integer $CpuNum CPU number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Memory size in GB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DiskEnhance /
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
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("LocalDiskInfo",$param) and $param["LocalDiskInfo"] !== null) {
            $this->LocalDiskInfo = new LocalDiskInfo();
            $this->LocalDiskInfo->deserialize($param["LocalDiskInfo"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskEncrypt",$param) and $param["DiskEncrypt"] !== null) {
            $this->DiskEncrypt = $param["DiskEncrypt"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskEnhance",$param) and $param["DiskEnhance"] !== null) {
            $this->DiskEnhance = $param["DiskEnhance"];
        }
    }
}
