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
 * LibraDB node information
 *
 * @method string getNodeId() Obtain LibraDB Node ID
 * @method void setNodeId(string $NodeId) Set LibraDB Node ID
 * @method string getStatus() Obtain Node status
 * @method void setStatus(string $Status) Set Node status
 * @method string getDataStatus() Obtain syncing data
 * @method void setDataStatus(string $DataStatus) Set syncing data
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory size. Unit: GB.
 * @method void setMemory(integer $Memory) Set Memory size. Unit: GB.
 * @method integer getStorage() Obtain Disk size, in GB
 * @method void setStorage(integer $Storage) Set Disk size, in GB
 * @method string getMessage() Obtain Error message
 * @method void setMessage(string $Message) Set Error message
 */
class LibraDBNodeInfo extends AbstractModel
{
    /**
     * @var string LibraDB Node ID
     */
    public $NodeId;

    /**
     * @var string Node status
     */
    public $Status;

    /**
     * @var string syncing data
     */
    public $DataStatus;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size. Unit: GB.
     */
    public $Memory;

    /**
     * @var integer Disk size, in GB
     */
    public $Storage;

    /**
     * @var string Error message
     */
    public $Message;

    /**
     * @param string $NodeId LibraDB Node ID
     * @param string $Status Node status
     * @param string $DataStatus syncing data
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Memory size. Unit: GB.
     * @param integer $Storage Disk size, in GB
     * @param string $Message Error message
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DataStatus",$param) and $param["DataStatus"] !== null) {
            $this->DataStatus = $param["DataStatus"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
