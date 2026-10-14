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
 * Instance-dedicated primary node-related information
 *
 * @method boolean getEnableDedicatedMaster() Obtain Whether the dedicated master node is enabled or not
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) Set Whether the dedicated master node is enabled or not
 * @method string getMasterNodeType() Obtain Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) Set Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
 * @method integer getMasterNodeNum() Obtain Number of dedicated primary nodes
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set Number of dedicated primary nodes
 * @method integer getMasterNodeCpuNum() Obtain Number of CPU cores of the dedicated master node
 * @method void setMasterNodeCpuNum(integer $MasterNodeCpuNum) Set Number of CPU cores of the dedicated master node
 * @method integer getMasterNodeMemSize() Obtain Dedicated primary node memory size, in GB.
 * @method void setMasterNodeMemSize(integer $MasterNodeMemSize) Set Dedicated primary node memory size, in GB.
 * @method integer getMasterNodeDiskSize() Obtain Dedicated primary node disk size in GB
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set Dedicated primary node disk size in GB
 * @method string getMasterNodeDiskType() Obtain Dedicated primary node disk type
 * @method void setMasterNodeDiskType(string $MasterNodeDiskType) Set Dedicated primary node disk type
 */
class MasterNodeInfo extends AbstractModel
{
    /**
     * @var boolean Whether the dedicated master node is enabled or not
     */
    public $EnableDedicatedMaster;

    /**
     * @var string Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
     */
    public $MasterNodeType;

    /**
     * @var integer Number of dedicated primary nodes
     */
    public $MasterNodeNum;

    /**
     * @var integer Number of CPU cores of the dedicated master node
     */
    public $MasterNodeCpuNum;

    /**
     * @var integer Dedicated primary node memory size, in GB.
     */
    public $MasterNodeMemSize;

    /**
     * @var integer Dedicated primary node disk size in GB
     */
    public $MasterNodeDiskSize;

    /**
     * @var string Dedicated primary node disk type
     */
    public $MasterNodeDiskType;

    /**
     * @param boolean $EnableDedicatedMaster Whether the dedicated master node is enabled or not
     * @param string $MasterNodeType Dedicated primary node specification<li>ES.S1.SMALL2: 1-core 2G</li><li>ES.S1.MEDIUM4: 2-core 4G</li><li>ES.S1.MEDIUM8: 2-core 8G</li><li>ES.S1.LARGE16: 4-core 16G</li><li>ES.S1.2XLARGE32: 8-core 32G</li><li>ES.S1.4XLARGE32: 16-core 32G</li><li>ES.S1.4XLARGE64: 16-core 64G</li>
     * @param integer $MasterNodeNum Number of dedicated primary nodes
     * @param integer $MasterNodeCpuNum Number of CPU cores of the dedicated master node
     * @param integer $MasterNodeMemSize Dedicated primary node memory size, in GB.
     * @param integer $MasterNodeDiskSize Dedicated primary node disk size in GB
     * @param string $MasterNodeDiskType Dedicated primary node disk type
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
        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeCpuNum",$param) and $param["MasterNodeCpuNum"] !== null) {
            $this->MasterNodeCpuNum = $param["MasterNodeCpuNum"];
        }

        if (array_key_exists("MasterNodeMemSize",$param) and $param["MasterNodeMemSize"] !== null) {
            $this->MasterNodeMemSize = $param["MasterNodeMemSize"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("MasterNodeDiskType",$param) and $param["MasterNodeDiskType"] !== null) {
            $this->MasterNodeDiskType = $param["MasterNodeDiskType"];
        }
    }
}
