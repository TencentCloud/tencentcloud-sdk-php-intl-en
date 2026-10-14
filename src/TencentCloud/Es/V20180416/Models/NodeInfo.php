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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification description information of a node type in the cluster (such as hot data node, cold data node, dedicated master node), including node type, number of nodes, node specification, disk type, and disk size. If Type is not specified, it defaults to hot data node. If the node is a master node, the DiskType and DiskSize parameters will be ignored (the primary node has no data disk).
 *
 * @method integer getNodeNum() Obtain <p>Number of nodes.</p>
 * @method void setNodeNum(integer $NodeNum) Set <p>Number of nodes.</p>
 * @method string getNodeType() Obtain <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method void setNodeType(string $NodeType) Set <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
 * @method string getType() Obtain <p>Node type</p><p>Enumeration values:</p><ul><li>hotData: hot data node</li><li>warmData: cold data node</li><li>dedicatedMaster: dedicated master node</li><li>dedicatedCoordinating: dedicated coordinator node</li><li>dedicatedMl: dedicated Machine Learning node</li></ul>
 * @method void setType(string $Type) Set <p>Node type</p><p>Enumeration values:</p><ul><li>hotData: hot data node</li><li>warmData: cold data node</li><li>dedicatedMaster: dedicated master node</li><li>dedicatedCoordinating: dedicated coordinator node</li><li>dedicatedMl: dedicated Machine Learning node</li></ul>
 * @method string getDiskType() Obtain <p>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud disk</li>Default value: CLOUD_SSD</p>
 * @method void setDiskType(string $DiskType) Set <p>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud disk</li>Default value: CLOUD_SSD</p>
 * @method integer getDiskSize() Obtain <p>Node disk capacity (GB)</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Node disk capacity (GB)</p>
 * @method LocalDiskInfo getLocalDiskInfo() Obtain <p>Node local disk information.</p>
 * @method void setLocalDiskInfo(LocalDiskInfo $LocalDiskInfo) Set <p>Node local disk information.</p>
 * @method integer getDiskCount() Obtain <p>Number of node disk blocks</p>
 * @method void setDiskCount(integer $DiskCount) Set <p>Number of node disk blocks</p>
 * @method integer getDiskEncrypt() Obtain <p>Whether the node disk is encrypted. 0: no encryption; 1: encryption; not encrypted by default</p>
 * @method void setDiskEncrypt(integer $DiskEncrypt) Set <p>Whether the node disk is encrypted. 0: no encryption; 1: encryption; not encrypted by default</p>
 * @method string getKmsKeyId() Obtain <p>Custom encryption key id</p>
 * @method void setKmsKeyId(string $KmsKeyId) Set <p>Custom encryption key id</p>
 * @method string getKmsKeyName() Obtain <p>Custom encryption key name</p>
 * @method void setKmsKeyName(string $KmsKeyName) Set <p>Custom encryption key name</p>
 * @method integer getCpuNum() Obtain <p>Number of CPUs</p>
 * @method void setCpuNum(integer $CpuNum) Set <p>Number of CPUs</p>
 * @method integer getMemSize() Obtain <p>Memory size, in GB.</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory size, in GB.</p>
 * @method integer getDiskEnhance() Obtain <p>Additional hard disk performance</p>
 * @method void setDiskEnhance(integer $DiskEnhance) Set <p>Additional hard disk performance</p>
 * @method GpuInfo getGpuInfo() Obtain <p>Gpu information of the node</p>
 * @method void setGpuInfo(GpuInfo $GpuInfo) Set <p>Gpu information of the node</p>
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var integer <p>Number of nodes.</p>
     */
    public $NodeNum;

    /**
     * @var string <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     */
    public $NodeType;

    /**
     * @var string <p>Node type</p><p>Enumeration values:</p><ul><li>hotData: hot data node</li><li>warmData: cold data node</li><li>dedicatedMaster: dedicated master node</li><li>dedicatedCoordinating: dedicated coordinator node</li><li>dedicatedMl: dedicated Machine Learning node</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud disk</li>Default value: CLOUD_SSD</p>
     */
    public $DiskType;

    /**
     * @var integer <p>Node disk capacity (GB)</p>
     */
    public $DiskSize;

    /**
     * @var LocalDiskInfo <p>Node local disk information.</p>
     */
    public $LocalDiskInfo;

    /**
     * @var integer <p>Number of node disk blocks</p>
     */
    public $DiskCount;

    /**
     * @var integer <p>Whether the node disk is encrypted. 0: no encryption; 1: encryption; not encrypted by default</p>
     */
    public $DiskEncrypt;

    /**
     * @var string <p>Custom encryption key id</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>Custom encryption key name</p>
     */
    public $KmsKeyName;

    /**
     * @var integer <p>Number of CPUs</p>
     */
    public $CpuNum;

    /**
     * @var integer <p>Memory size, in GB.</p>
     */
    public $MemSize;

    /**
     * @var integer <p>Additional hard disk performance</p>
     */
    public $DiskEnhance;

    /**
     * @var GpuInfo <p>Gpu information of the node</p>
     */
    public $GpuInfo;

    /**
     * @param integer $NodeNum <p>Number of nodes.</p>
     * @param string $NodeType <p>Node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li></p>
     * @param string $Type <p>Node type</p><p>Enumeration values:</p><ul><li>hotData: hot data node</li><li>warmData: cold data node</li><li>dedicatedMaster: dedicated master node</li><li>dedicatedCoordinating: dedicated coordinator node</li><li>dedicatedMl: dedicated Machine Learning node</li></ul>
     * @param string $DiskType <p>Node disk type<li>CLOUD_SSD: ssd cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud disk</li>Default value: CLOUD_SSD</p>
     * @param integer $DiskSize <p>Node disk capacity (GB)</p>
     * @param LocalDiskInfo $LocalDiskInfo <p>Node local disk information.</p>
     * @param integer $DiskCount <p>Number of node disk blocks</p>
     * @param integer $DiskEncrypt <p>Whether the node disk is encrypted. 0: no encryption; 1: encryption; not encrypted by default</p>
     * @param string $KmsKeyId <p>Custom encryption key id</p>
     * @param string $KmsKeyName <p>Custom encryption key name</p>
     * @param integer $CpuNum <p>Number of CPUs</p>
     * @param integer $MemSize <p>Memory size, in GB.</p>
     * @param integer $DiskEnhance <p>Additional hard disk performance</p>
     * @param GpuInfo $GpuInfo <p>Gpu information of the node</p>
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

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
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

        if (array_key_exists("GpuInfo",$param) and $param["GpuInfo"] !== null) {
            $this->GpuInfo = new GpuInfo();
            $this->GpuInfo->deserialize($param["GpuInfo"]);
        }
    }
}
