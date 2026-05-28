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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getSpecCode() Obtain <p>Instance specification code</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Instance specification code</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method string getStorageType() Obtain <p>Disk Type. Pass this parameter when the disk type needs to be modified.</p>
 * @method void setStorageType(string $StorageType) Set <p>Disk Type. Pass this parameter when the disk type needs to be modified.</p>
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance specification code</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var integer <p>CPU cores of the storage node</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>Disk Type. Pass this parameter when the disk type needs to be modified.</p>
     */
    public $StorageType;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $SpecCode <p>Instance specification code</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param string $StorageType <p>Disk Type. Pass this parameter when the disk type needs to be modified.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
