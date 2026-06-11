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
 * Instance resizing task information.
 *
 * @method integer getCpu() Obtain CPU after resizing.
 * @method void setCpu(integer $Cpu) Set CPU after resizing.
 * @method integer getMemory() Obtain Memory after resizing.
 * @method void setMemory(integer $Memory) Set Memory after resizing.
 * @method integer getStorageLimit() Obtain Storage upper limit after resizing.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage upper limit after resizing.
 * @method integer getOldCpu() Obtain CPU before resizing.
 * @method void setOldCpu(integer $OldCpu) Set CPU before resizing.
 * @method integer getOldMemory() Obtain Memory before resizing.
 * @method void setOldMemory(integer $OldMemory) Set Memory before resizing.
 * @method integer getOldStorageLimit() Obtain Storage upper limit before resizing.
 * @method void setOldStorageLimit(integer $OldStorageLimit) Set Storage upper limit before resizing.
 * @method string getOldDeviceType() Obtain Instance Machine Type Before Scaling
1. common, universal type.
2. exclusive, dedicated.
 * @method void setOldDeviceType(string $OldDeviceType) Set Instance Machine Type Before Scaling
1. common, universal type.
2. exclusive, dedicated.
 * @method string getDeviceType() Obtain Instance Machine Type After Scaling
1. common, universal type.
2. exclusive, dedicated.
 * @method void setDeviceType(string $DeviceType) Set Instance Machine Type After Scaling
1. common, universal type.
2. exclusive, dedicated.
 * @method string getUpgradeType() Obtain Upgrade method. Switch after upgrade completes or switch within maintenance window.
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade method. Switch after upgrade completes or switch within maintenance window.
 * @method integer getLibraNodeCount() Obtain Specifies the quantity of libra nodes.
 * @method void setLibraNodeCount(integer $LibraNodeCount) Set Specifies the quantity of libra nodes.
 * @method integer getOldLibraNodeCount() Obtain Specifies the original quantity of libra nodes.
 * @method void setOldLibraNodeCount(integer $OldLibraNodeCount) Set Specifies the original quantity of libra nodes.
 */
class ModifyInstanceData extends AbstractModel
{
    /**
     * @var integer CPU after resizing.
     */
    public $Cpu;

    /**
     * @var integer Memory after resizing.
     */
    public $Memory;

    /**
     * @var integer Storage upper limit after resizing.
     */
    public $StorageLimit;

    /**
     * @var integer CPU before resizing.
     */
    public $OldCpu;

    /**
     * @var integer Memory before resizing.
     */
    public $OldMemory;

    /**
     * @var integer Storage upper limit before resizing.
     */
    public $OldStorageLimit;

    /**
     * @var string Instance Machine Type Before Scaling
1. common, universal type.
2. exclusive, dedicated.
     */
    public $OldDeviceType;

    /**
     * @var string Instance Machine Type After Scaling
1. common, universal type.
2. exclusive, dedicated.
     */
    public $DeviceType;

    /**
     * @var string Upgrade method. Switch after upgrade completes or switch within maintenance window.
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
     * @param integer $Cpu CPU after resizing.
     * @param integer $Memory Memory after resizing.
     * @param integer $StorageLimit Storage upper limit after resizing.
     * @param integer $OldCpu CPU before resizing.
     * @param integer $OldMemory Memory before resizing.
     * @param integer $OldStorageLimit Storage upper limit before resizing.
     * @param string $OldDeviceType Instance Machine Type Before Scaling
1. common, universal type.
2. exclusive, dedicated.
     * @param string $DeviceType Instance Machine Type After Scaling
1. common, universal type.
2. exclusive, dedicated.
     * @param string $UpgradeType Upgrade method. Switch after upgrade completes or switch within maintenance window.
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
