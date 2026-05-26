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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * libra instance initialization info
 *
 * @method integer getCpu() Obtain cpu
 * @method void setCpu(integer $Cpu) Set cpu
 * @method integer getMemory() Obtain memory
 * @method void setMemory(integer $Memory) Set memory
 * @method integer getStorageSize() Obtain hard disk
 * @method void setStorageSize(integer $StorageSize) Set hard disk
 * @method string getStorageType() Obtain Storage type
 * @method void setStorageType(string $StorageType) Set Storage type
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getLibraDBVersion() Obtain Instance version
 * @method void setLibraDBVersion(string $LibraDBVersion) Set Instance version
 * @method integer getInstanceCount() Obtain Instance count
 * @method void setInstanceCount(integer $InstanceCount) Set Instance count
 * @method string getVpcId() Obtain vpc id
 * @method void setVpcId(string $VpcId) Set vpc id
 * @method string getSubnetId() Obtain subnet id
 * @method void setSubnetId(string $SubnetId) Set subnet id
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method integer getReplicasNum() Obtain Number of instance replicas to purchase
 * @method void setReplicasNum(integer $ReplicasNum) Set Number of instance replicas to purchase
 */
class LibraDBInstanceInitInfo extends AbstractModel
{
    /**
     * @var integer cpu
     */
    public $Cpu;

    /**
     * @var integer memory
     */
    public $Memory;

    /**
     * @var integer hard disk
     */
    public $StorageSize;

    /**
     * @var string Storage type
     */
    public $StorageType;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Instance version
     */
    public $LibraDBVersion;

    /**
     * @var integer Instance count
     */
    public $InstanceCount;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string subnet id
     */
    public $SubnetId;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var integer Number of instance replicas to purchase
     */
    public $ReplicasNum;

    /**
     * @param integer $Cpu cpu
     * @param integer $Memory memory
     * @param integer $StorageSize hard disk
     * @param string $StorageType Storage type
     * @param string $InstanceType Instance type
     * @param string $LibraDBVersion Instance version
     * @param integer $InstanceCount Instance count
     * @param string $VpcId vpc id
     * @param string $SubnetId subnet id
     * @param integer $Port Port.
     * @param integer $ReplicasNum Number of instance replicas to purchase
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }
    }
}
