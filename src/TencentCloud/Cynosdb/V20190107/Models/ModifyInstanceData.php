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
 * Instance configuration change task information
 *
 * @method integer getCpu() Obtain CPU after configuration change
 * @method void setCpu(integer $Cpu) Set CPU after configuration change
 * @method integer getMemory() Obtain Memory after configuration change
 * @method void setMemory(integer $Memory) Set Memory after configuration change
 * @method integer getStorageLimit() Obtain Storage limit after configuration change
 * @method void setStorageLimit(integer $StorageLimit) Set Storage limit after configuration change
 * @method integer getOldCpu() Obtain CPU before specification adjustment
 * @method void setOldCpu(integer $OldCpu) Set CPU before specification adjustment
 * @method integer getOldMemory() Obtain Memory before specification modification
 * @method void setOldMemory(integer $OldMemory) Set Memory before specification modification
 * @method integer getOldStorageLimit() Obtain Storage limit before configuration change
 * @method void setOldStorageLimit(integer $OldStorageLimit) Set Storage limit before configuration change
 * @method string getOldDeviceType() Obtain Instance machine type before scaling
1. common: universal type.
2. exclusive: dedicated.
 * @method void setOldDeviceType(string $OldDeviceType) Set Instance machine type before scaling
1. common: universal type.
2. exclusive: dedicated.
 * @method string getDeviceType() Obtain Instance machine type after scaling
1. common: universal type.
2. exclusive: dedicated.
 * @method void setDeviceType(string $DeviceType) Set Instance machine type after scaling
1. common: universal type.
2. exclusive: dedicated.
 * @method string getUpgradeType() Obtain Upgrade method. Switch after the upgrade is completed or switch during the maintenance window.
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade method. Switch after the upgrade is completed or switch during the maintenance window.
 * @method integer getLibraNodeCount() Obtain Number of libra nodes
 * @method void setLibraNodeCount(integer $LibraNodeCount) Set Number of libra nodes
 * @method integer getOldLibraNodeCount() Obtain Original libra node count
 * @method void setOldLibraNodeCount(integer $OldLibraNodeCount) Set Original libra node count
 */
class ModifyInstanceData extends AbstractModel
{
    /**
     * @var integer CPU after configuration change
     */
    public $Cpu;

    /**
     * @var integer Memory after configuration change
     */
    public $Memory;

    /**
     * @var integer Storage limit after configuration change
     */
    public $StorageLimit;

    /**
     * @var integer CPU before specification adjustment
     */
    public $OldCpu;

    /**
     * @var integer Memory before specification modification
     */
    public $OldMemory;

    /**
     * @var integer Storage limit before configuration change
     */
    public $OldStorageLimit;

    /**
     * @var string Instance machine type before scaling
1. common: universal type.
2. exclusive: dedicated.
     */
    public $OldDeviceType;

    /**
     * @var string Instance machine type after scaling
1. common: universal type.
2. exclusive: dedicated.
     */
    public $DeviceType;

    /**
     * @var string Upgrade method. Switch after the upgrade is completed or switch during the maintenance window.
     */
    public $UpgradeType;

    /**
     * @var integer Number of libra nodes
     */
    public $LibraNodeCount;

    /**
     * @var integer Original libra node count
     */
    public $OldLibraNodeCount;

    /**
     * @param integer $Cpu CPU after configuration change
     * @param integer $Memory Memory after configuration change
     * @param integer $StorageLimit Storage limit after configuration change
     * @param integer $OldCpu CPU before specification adjustment
     * @param integer $OldMemory Memory before specification modification
     * @param integer $OldStorageLimit Storage limit before configuration change
     * @param string $OldDeviceType Instance machine type before scaling
1. common: universal type.
2. exclusive: dedicated.
     * @param string $DeviceType Instance machine type after scaling
1. common: universal type.
2. exclusive: dedicated.
     * @param string $UpgradeType Upgrade method. Switch after the upgrade is completed or switch during the maintenance window.
     * @param integer $LibraNodeCount Number of libra nodes
     * @param integer $OldLibraNodeCount Original libra node count
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
