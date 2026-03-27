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
 * Instance Resizing Task Information
 *
 * @method integer getCpu() Obtain CPU After Resizing
 * @method void setCpu(integer $Cpu) Set CPU After Resizing
 * @method integer getMemory() Obtain Memory After Resizing
 * @method void setMemory(integer $Memory) Set Memory After Resizing
 * @method integer getStorageLimit() Obtain Storage Limit After Resizing
 * @method void setStorageLimit(integer $StorageLimit) Set Storage Limit After Resizing
 * @method integer getOldCpu() Obtain CPU Before Resizing
 * @method void setOldCpu(integer $OldCpu) Set CPU Before Resizing
 * @method integer getOldMemory() Obtain Memory Before Resizing
 * @method void setOldMemory(integer $OldMemory) Set Memory Before Resizing
 * @method integer getOldStorageLimit() Obtain Storage Limit Before Resizing
 * @method void setOldStorageLimit(integer $OldStorageLimit) Set Storage Limit Before Resizing
 * @method string getOldDeviceType() Obtain Instance machine type before scaling.
 * @method void setOldDeviceType(string $OldDeviceType) Set Instance machine type before scaling.
 * @method string getDeviceType() Obtain Instance machine type after scaling.
 * @method void setDeviceType(string $DeviceType) Set Instance machine type after scaling.
 * @method string getUpgradeType() Obtain Upgrade Method. Switchover is performed after upgrade completion or during maintenance windows
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade Method. Switchover is performed after upgrade completion or during maintenance windows
 * @method integer getLibraNodeCount() Obtain Specifies the quantity of libra nodes.
 * @method void setLibraNodeCount(integer $LibraNodeCount) Set Specifies the quantity of libra nodes.
 * @method integer getOldLibraNodeCount() Obtain Specifies the original quantity of libra nodes.
 * @method void setOldLibraNodeCount(integer $OldLibraNodeCount) Set Specifies the original quantity of libra nodes.
 */
class ModifyInstanceData extends AbstractModel
{
    /**
     * @var integer CPU After Resizing
     */
    public $Cpu;

    /**
     * @var integer Memory After Resizing
     */
    public $Memory;

    /**
     * @var integer Storage Limit After Resizing
     */
    public $StorageLimit;

    /**
     * @var integer CPU Before Resizing
     */
    public $OldCpu;

    /**
     * @var integer Memory Before Resizing
     */
    public $OldMemory;

    /**
     * @var integer Storage Limit Before Resizing
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
     * @var string Upgrade Method. Switchover is performed after upgrade completion or during maintenance windows
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
     * @param integer $Cpu CPU After Resizing
     * @param integer $Memory Memory After Resizing
     * @param integer $StorageLimit Storage Limit After Resizing
     * @param integer $OldCpu CPU Before Resizing
     * @param integer $OldMemory Memory Before Resizing
     * @param integer $OldStorageLimit Storage Limit Before Resizing
     * @param string $OldDeviceType Instance machine type before scaling.
     * @param string $DeviceType Instance machine type after scaling.
     * @param string $UpgradeType Upgrade Method. Switchover is performed after upgrade completion or during maintenance windows
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
