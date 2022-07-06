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
 * @method string getShardName() Obtain Shard node name
 * @method void setShardName(string $ShardName) Set Shard node name
 * @method string getShardId() Obtain Shard node ID
 * @method void setShardId(string $ShardId) Set Shard node ID
 * @method integer getRole() Obtain Role
 * @method void setRole(integer $Role) Set Role
 * @method integer getKeys() Obtain Number of keys
 * @method void setKeys(integer $Keys) Set Number of keys
 * @method string getSlots() Obtain Slot information
 * @method void setSlots(string $Slots) Set Slot information
 * @method integer getStorage() Obtain Storage capacity
 * @method void setStorage(integer $Storage) Set Storage capacity
 * @method float getStorageSlope() Obtain Capacity slope
 * @method void setStorageSlope(float $StorageSlope) Set Capacity slope
 * @method string getRunid() Obtain ID of the runtime node of the instance
 * @method void setRunid(string $Runid) Set ID of the runtime node of the instance
 * @method integer getConnected() Obtain Service status. 0: down; 1: on
 * @method void setConnected(integer $Connected) Set Service status. 0: down; 1: on
 */
class InstanceClusterShard extends AbstractModel
{
    /**
     * @var string Shard node name
     */
    public $ShardName;

    /**
     * @var string Shard node ID
     */
    public $ShardId;

    /**
     * @var integer Role
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
     * @var integer Storage capacity
     */
    public $Storage;

    /**
     * @var float Capacity slope
     */
    public $StorageSlope;

    /**
     * @var string ID of the runtime node of the instance
     */
    public $Runid;

    /**
     * @var integer Service status. 0: down; 1: on
     */
    public $Connected;

    /**
     * @param string $ShardName Shard node name
     * @param string $ShardId Shard node ID
     * @param integer $Role Role
     * @param integer $Keys Number of keys
     * @param string $Slots Slot information
     * @param integer $Storage Storage capacity
     * @param float $StorageSlope Capacity slope
     * @param string $Runid ID of the runtime node of the instance
     * @param integer $Connected Service status. 0: down; 1: on
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

        if (array_key_exists("Connected",$param) and $param["Connected"] !== null) {
            $this->Connected = $param["Connected"];
        }
    }
}
