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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Memory size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinStorageSize() Obtain Minimum storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinStorageSize(integer $MinStorageSize) Set Minimum storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStorageSize() Obtain Maximum storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set Maximum storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHasStock() Obtain Whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasStock(boolean $HasStock) Set Whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain Storage type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set Storage type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinReplicaNum() Obtain minimum replica count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinReplicaNum(integer $MinReplicaNum) Set minimum replica count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxReplicaNum() Obtain Maximum number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReplicaNum(integer $MaxReplicaNum) Set Maximum number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneStockInfos() Obtain Availability zone inventory information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneStockInfos(array $ZoneStockInfos) Set Availability zone inventory information list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionInstanceSpecInfo extends AbstractModel
{
    /**
     * @var integer Number of CPU cores
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Memory size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var integer Minimum storage size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinStorageSize;

    /**
     * @var integer Maximum storage size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStorageSize;

    /**
     * @var boolean Whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasStock;

    /**
     * @var string Instance type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Storage type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var integer minimum replica count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinReplicaNum;

    /**
     * @var integer Maximum number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxReplicaNum;

    /**
     * @var array Availability zone inventory information list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneStockInfos;

    /**
     * @param integer $Cpu Number of CPU cores
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Memory size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinStorageSize Minimum storage size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStorageSize Maximum storage size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HasStock Whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType Storage type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinReplicaNum minimum replica count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxReplicaNum Maximum number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneStockInfos Availability zone inventory information list
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
