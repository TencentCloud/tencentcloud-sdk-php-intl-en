<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shard information
 *
 * @method string getShardInstanceId() Obtain Shard ID
 * @method void setShardInstanceId(string $ShardInstanceId) Set Shard ID
 * @method string getShardSerialId() Obtain Shard set ID
 * @method void setShardSerialId(string $ShardSerialId) Set Shard set ID
 * @method integer getStatus() Obtain Status. 0: creating; 1: processing; 2: running; 3: shard not initialized; -2: shard deleted
 * @method void setStatus(integer $Status) Set Status. 0: creating; 1: processing; 2: running; 3: shard not initialized; -2: shard deleted
 * @method string getCreatetime() Obtain Creation time
 * @method void setCreatetime(string $Createtime) Set Creation time
 * @method integer getMemory() Obtain Memory size in GB
 * @method void setMemory(integer $Memory) Set Memory size in GB
 * @method integer getStorage() Obtain Storage capacity in GB
 * @method void setStorage(integer $Storage) Set Storage capacity in GB
 * @method integer getShardId() Obtain Numeric ID of a shard
 * @method void setShardId(integer $ShardId) Set Numeric ID of a shard
 * @method integer getNodeCount() Obtain Number of nodes. 2: one primary and one secondary; 3: one primary and two secondaries
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes. 2: one primary and one secondary; 3: one primary and two secondaries
 * @method integer getPid() Obtain Product type ID (this field is obsolete and should not be depended on)
 * @method void setPid(integer $Pid) Set Product type ID (this field is obsolete and should not be depended on)
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 */
class ShardInfo extends AbstractModel
{
    /**
     * @var string Shard ID
     */
    public $ShardInstanceId;

    /**
     * @var string Shard set ID
     */
    public $ShardSerialId;

    /**
     * @var integer Status. 0: creating; 1: processing; 2: running; 3: shard not initialized; -2: shard deleted
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $Createtime;

    /**
     * @var integer Memory size in GB
     */
    public $Memory;

    /**
     * @var integer Storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer Numeric ID of a shard
     */
    public $ShardId;

    /**
     * @var integer Number of nodes. 2: one primary and one secondary; 3: one primary and two secondaries
     */
    public $NodeCount;

    /**
     * @var integer Product type ID (this field is obsolete and should not be depended on)
     */
    public $Pid;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @param string $ShardInstanceId Shard ID
     * @param string $ShardSerialId Shard set ID
     * @param integer $Status Status. 0: creating; 1: processing; 2: running; 3: shard not initialized; -2: shard deleted
     * @param string $Createtime Creation time
     * @param integer $Memory Memory size in GB
     * @param integer $Storage Storage capacity in GB
     * @param integer $ShardId Numeric ID of a shard
     * @param integer $NodeCount Number of nodes. 2: one primary and one secondary; 3: one primary and two secondaries
     * @param integer $Pid Product type ID (this field is obsolete and should not be depended on)
     * @param integer $Cpu Number of CPU cores
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
        if (array_key_exists("ShardInstanceId",$param) and $param["ShardInstanceId"] !== null) {
            $this->ShardInstanceId = $param["ShardInstanceId"];
        }

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
