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
 * 
 *
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method integer getStorageLimit() Obtain 
 * @method void setStorageLimit(integer $StorageLimit) Set 
 * @method integer getOldCpu() Obtain 
 * @method void setOldCpu(integer $OldCpu) Set 
 * @method integer getOldMemory() Obtain 
 * @method void setOldMemory(integer $OldMemory) Set 
 * @method integer getOldStorageLimit() Obtain 
 * @method void setOldStorageLimit(integer $OldStorageLimit) Set 
 * @method string getOldDeviceType() Obtain Instance machine type before scaling.
 * @method void setOldDeviceType(string $OldDeviceType) Set Instance machine type before scaling.
 * @method string getDeviceType() Obtain Instance machine type after scaling.
 * @method void setDeviceType(string $DeviceType) Set Instance machine type after scaling.
 * @method string getUpgradeType() Obtain 
 * @method void setUpgradeType(string $UpgradeType) Set 
 * @method integer getLibraNodeCount() Obtain Specifies the quantity of libra nodes.
 * @method void setLibraNodeCount(integer $LibraNodeCount) Set Specifies the quantity of libra nodes.
 * @method integer getOldLibraNodeCount() Obtain Specifies the original quantity of libra nodes.
 * @method void setOldLibraNodeCount(integer $OldLibraNodeCount) Set Specifies the original quantity of libra nodes.
 */
class ModifyInstanceData extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var integer 
     */
    public $StorageLimit;

    /**
     * @var integer 
     */
    public $OldCpu;

    /**
     * @var integer 
     */
    public $OldMemory;

    /**
     * @var integer 
     */
    public $OldStorageLimit;

    /**
     * @var string Instance machine type before scaling.
     */
    public $OldDeviceType;

    /**
     * @var string Instance machine type after scaling.
     */
    public $DeviceType;

    /**
     * @var string 
     */
    public $UpgradeType;

    /**
     * @var integer Specifies the quantity of libra nodes.
     */
    public $LibraNodeCount;

    /**
     * @var integer Specifies the original quantity of libra nodes.
     */
    public $OldLibraNodeCount;

    /**
     * @param integer $Cpu 
     * @param integer $Memory 
     * @param integer $StorageLimit 
     * @param integer $OldCpu 
     * @param integer $OldMemory 
     * @param integer $OldStorageLimit 
     * @param string $OldDeviceType Instance machine type before scaling.
     * @param string $DeviceType Instance machine type after scaling.
     * @param string $UpgradeType 
     * @param integer $LibraNodeCount Specifies the quantity of libra nodes.
     * @param integer $OldLibraNodeCount Specifies the original quantity of libra nodes.
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

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("OldCpu",$param) and $param["OldCpu"] !== null) {
            $this->OldCpu = $param["OldCpu"];
        }

        if (array_key_exists("OldMemory",$param) and $param["OldMemory"] !== null) {
            $this->OldMemory = $param["OldMemory"];
        }

        if (array_key_exists("OldStorageLimit",$param) and $param["OldStorageLimit"] !== null) {
            $this->OldStorageLimit = $param["OldStorageLimit"];
        }

        if (array_key_exists("OldDeviceType",$param) and $param["OldDeviceType"] !== null) {
            $this->OldDeviceType = $param["OldDeviceType"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("LibraNodeCount",$param) and $param["LibraNodeCount"] !== null) {
            $this->LibraNodeCount = $param["LibraNodeCount"];
        }

        if (array_key_exists("OldLibraNodeCount",$param) and $param["OldLibraNodeCount"] !== null) {
            $this->OldLibraNodeCount = $param["OldLibraNodeCount"];
        }
    }
}
