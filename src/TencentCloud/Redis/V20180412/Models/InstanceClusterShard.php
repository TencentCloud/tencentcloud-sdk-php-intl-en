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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information list of instance shards
 *
 * @method string getShardName() Obtain The name of a shard node
 * @method void setShardName(string $ShardName) Set The name of a shard node
 * @method string getShardId() Obtain The serial number of a shard node
 * @method void setShardId(string $ShardId) Set The serial number of a shard node
 * @method integer getRole() Obtain The role of a shard node
- `0`: Master node.
- `1`: Replica node.
 * @method void setRole(integer $Role) Set The role of a shard node
- `0`: Master node.
- `1`: Replica node.
 * @method integer getKeys() Obtain Number of keys
 * @method void setKeys(integer $Keys) Set Number of keys
 * @method string getSlots() Obtain Slot information
 * @method void setSlots(string $Slots) Set Slot information
 * @method integer getStorage() Obtain Used Capacity
 * @method void setStorage(integer $Storage) Set Used Capacity
 * @method float getStorageSlope() Obtain Capacity slope
 * @method void setStorageSlope(float $StorageSlope) Set Capacity slope
 * @method string getRunid() Obtain This field is recommended to use the RunId instead due to spelling inconsistency.
 Meaning: The node ID during instance runtime.

 * @method void setRunid(string $Runid) Set This field is recommended to use the RunId instead due to spelling inconsistency.
 Meaning: The node ID during instance runtime.

 * @method string getRunId() Obtain The node ID during instance runtime.
 * @method void setRunId(string $RunId) Set The node ID during instance runtime.
 * @method integer getConnected() Obtain Service status
- `0`: Down.
- `1`: On.
 * @method void setConnected(integer $Connected) Set Service status
- `0`: Down.
- `1`: On.
 */
class InstanceClusterShard extends AbstractModel
{
    /**
     * @var string The name of a shard node
     */
    public $ShardName;

    /**
     * @var string The serial number of a shard node
     */
    public $ShardId;

    /**
     * @var integer The role of a shard node
- `0`: Master node.
- `1`: Replica node.
     */
    public $Role;

    /**
     * @var integer Number of keys
     */
    public $Keys;

    /**
     * @var string Slot information
     */
    public $Slots;

    /**
     * @var integer Used Capacity
     */
    public $Storage;

    /**
     * @var float Capacity slope
     */
    public $StorageSlope;

    /**
     * @var string This field is recommended to use the RunId instead due to spelling inconsistency.
 Meaning: The node ID during instance runtime.

     */
    public $Runid;

    /**
     * @var string The node ID during instance runtime.
     */
    public $RunId;

    /**
     * @var integer Service status
- `0`: Down.
- `1`: On.
     */
    public $Connected;

    /**
     * @param string $ShardName The name of a shard node
     * @param string $ShardId The serial number of a shard node
     * @param integer $Role The role of a shard node
- `0`: Master node.
- `1`: Replica node.
     * @param integer $Keys Number of keys
     * @param string $Slots Slot information
     * @param integer $Storage Used Capacity
     * @param float $StorageSlope Capacity slope
     * @param string $Runid This field is recommended to use the RunId instead due to spelling inconsistency.
 Meaning: The node ID during instance runtime.

     * @param string $RunId The node ID during instance runtime.
     * @param integer $Connected Service status
- `0`: Down.
- `1`: On.
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
        if (array_key_exists("ShardName",$param) and $param["ShardName"] !== null) {
            $this->ShardName = $param["ShardName"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Slots",$param) and $param["Slots"] !== null) {
            $this->Slots = $param["Slots"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageSlope",$param) and $param["StorageSlope"] !== null) {
            $this->StorageSlope = $param["StorageSlope"];
        }

        if (array_key_exists("Runid",$param) and $param["Runid"] !== null) {
            $this->Runid = $param["Runid"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("Connected",$param) and $param["Connected"] !== null) {
            $this->Connected = $param["Connected"];
        }
    }
}
