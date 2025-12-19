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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Analysis engine node information.
 *
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method string getStatus() Obtain Node status.
 * @method void setStatus(string $Status) Set Node status.
 * @method string getDataStatus() Obtain Data loading status.
 * @method void setDataStatus(string $DataStatus) Set Data loading status.
 * @method integer getCpu() Obtain Number of CPU cores, in cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores, in cores.
 * @method integer getMemory() Obtain Memory size, in MB.
 * @method void setMemory(integer $Memory) Set Memory size, in MB.
 * @method integer getStorage() Obtain Disk size, in GB.
 * @method void setStorage(integer $Storage) Set Disk size, in GB.
 * @method string getZone() Obtain Node AZ.
 * @method void setZone(string $Zone) Set Node AZ.
 * @method string getMessage() Obtain Data synchronization error message.
 * @method void setMessage(string $Message) Set Data synchronization error message.
 */
class AnalysisNodeInfo extends AbstractModel
{
    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var string Node status.
     */
    public $Status;

    /**
     * @var string Data loading status.
     */
    public $DataStatus;

    /**
     * @var integer Number of CPU cores, in cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size, in MB.
     */
    public $Memory;

    /**
     * @var integer Disk size, in GB.
     */
    public $Storage;

    /**
     * @var string Node AZ.
     */
    public $Zone;

    /**
     * @var string Data synchronization error message.
     */
    public $Message;

    /**
     * @param string $NodeId Node ID.
     * @param string $Status Node status.
     * @param string $DataStatus Data loading status.
     * @param integer $Cpu Number of CPU cores, in cores.
     * @param integer $Memory Memory size, in MB.
     * @param integer $Storage Disk size, in GB.
     * @param string $Zone Node AZ.
     * @param string $Message Data synchronization error message.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
