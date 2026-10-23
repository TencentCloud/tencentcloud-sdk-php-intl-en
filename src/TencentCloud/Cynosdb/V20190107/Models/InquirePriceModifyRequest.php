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
 * InquirePriceModify request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory size.
 * @method void setMemory(integer $Memory) Set Memory size.
 * @method integer getStorageLimit() Obtain Storage size and storage resource configuration change: ClusterId, StorageLimit
 * @method void setStorageLimit(integer $StorageLimit) Set Storage size and storage resource configuration change: ClusterId, StorageLimit
 * @method string getInstanceId() Obtain Instance ID. This parameter is required for compute resource reallocation: ClusterId, InstanceId, Cpu, Memory.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. This parameter is required for compute resource reallocation: ClusterId, InstanceId, Cpu, Memory.
 * @method string getDeviceType() Obtain Instance device type
 * @method void setDeviceType(string $DeviceType) Set Instance device type
 * @method float getCcu() Obtain ccu size of a serverless instance
 * @method void setCcu(float $Ccu) Set ccu size of a serverless instance
 */
class InquirePriceModifyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size.
     */
    public $Memory;

    /**
     * @var integer Storage size and storage resource configuration change: ClusterId, StorageLimit
     */
    public $StorageLimit;

    /**
     * @var string Instance ID. This parameter is required for compute resource reallocation: ClusterId, InstanceId, Cpu, Memory.
     */
    public $InstanceId;

    /**
     * @var string Instance device type
     */
    public $DeviceType;

    /**
     * @var float ccu size of a serverless instance
     */
    public $Ccu;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Memory size.
     * @param integer $StorageLimit Storage size and storage resource configuration change: ClusterId, StorageLimit
     * @param string $InstanceId Instance ID. This parameter is required for compute resource reallocation: ClusterId, InstanceId, Cpu, Memory.
     * @param string $DeviceType Instance device type
     * @param float $Ccu ccu size of a serverless instance
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Ccu",$param) and $param["Ccu"] !== null) {
            $this->Ccu = $param["Ccu"];
        }
    }
}
