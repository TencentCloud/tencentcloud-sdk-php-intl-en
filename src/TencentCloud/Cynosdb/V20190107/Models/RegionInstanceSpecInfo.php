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
 * Instance specifications in this region
 *
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory size.
 * @method void setMemory(integer $Memory) Set Memory size.
 * @method integer getMinStorageSize() Obtain Minimum storage size
 * @method void setMinStorageSize(integer $MinStorageSize) Set Minimum storage size
 * @method integer getMaxStorageSize() Obtain Maximum storage size
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set Maximum storage size
 * @method boolean getHasStock() Obtain Whether there is inventory
 * @method void setHasStock(boolean $HasStock) Set Whether there is inventory
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getStorageType() Obtain Storage type
 * @method void setStorageType(string $StorageType) Set Storage type
 * @method integer getMinReplicaNum() Obtain Minimum replica count
 * @method void setMinReplicaNum(integer $MinReplicaNum) Set Minimum replica count
 * @method integer getMaxReplicaNum() Obtain Maximum number of replicas
 * @method void setMaxReplicaNum(integer $MaxReplicaNum) Set Maximum number of replicas
 * @method array getZoneStockInfos() Obtain Availability zone inventory information list
 * @method void setZoneStockInfos(array $ZoneStockInfos) Set Availability zone inventory information list
 */
class RegionInstanceSpecInfo extends AbstractModel
{
    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory size.
     */
    public $Memory;

    /**
     * @var integer Minimum storage size
     */
    public $MinStorageSize;

    /**
     * @var integer Maximum storage size
     */
    public $MaxStorageSize;

    /**
     * @var boolean Whether there is inventory
     */
    public $HasStock;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Storage type
     */
    public $StorageType;

    /**
     * @var integer Minimum replica count
     */
    public $MinReplicaNum;

    /**
     * @var integer Maximum number of replicas
     */
    public $MaxReplicaNum;

    /**
     * @var array Availability zone inventory information list
     */
    public $ZoneStockInfos;

    /**
     * @param integer $Cpu Number of CPU cores
     * @param integer $Memory Memory size.
     * @param integer $MinStorageSize Minimum storage size
     * @param integer $MaxStorageSize Maximum storage size
     * @param boolean $HasStock Whether there is inventory
     * @param string $InstanceType Instance type
     * @param string $StorageType Storage type
     * @param integer $MinReplicaNum Minimum replica count
     * @param integer $MaxReplicaNum Maximum number of replicas
     * @param array $ZoneStockInfos Availability zone inventory information list
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

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("MinReplicaNum",$param) and $param["MinReplicaNum"] !== null) {
            $this->MinReplicaNum = $param["MinReplicaNum"];
        }

        if (array_key_exists("MaxReplicaNum",$param) and $param["MaxReplicaNum"] !== null) {
            $this->MaxReplicaNum = $param["MaxReplicaNum"];
        }

        if (array_key_exists("ZoneStockInfos",$param) and $param["ZoneStockInfos"] !== null) {
            $this->ZoneStockInfos = [];
            foreach ($param["ZoneStockInfos"] as $key => $value){
                $obj = new ZoneStockInfo4Libra();
                $obj->deserialize($value);
                array_push($this->ZoneStockInfos, $obj);
            }
        }
    }
}
