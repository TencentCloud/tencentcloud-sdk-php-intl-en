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
 * Instance node type
 *
 * @method string getName() Obtain Node name
 * @method void setName(string $Name) Set Node name
 * @method string getRunId() Obtain ID of the runtime node of an instance
 * @method void setRunId(string $RunId) Set ID of the runtime node of an instance
 * @method integer getRole() Obtain Cluster role. 0: primary; 1: secondary
 * @method void setRole(integer $Role) Set Cluster role. 0: primary; 1: secondary
 * @method integer getStatus() Obtain Node status. 0: readwrite; 1: read; 2: backup
 * @method void setStatus(integer $Status) Set Node status. 0: readwrite; 1: read; 2: backup
 * @method integer getConnected() Obtain Service status. 0: down; 1: on
 * @method void setConnected(integer $Connected) Set Service status. 0: down; 1: on
 * @method string getCreateTime() Obtain Node creation time
 * @method void setCreateTime(string $CreateTime) Set Node creation time
 * @method string getDownTime() Obtain Node deactivation time
 * @method void setDownTime(string $DownTime) Set Node deactivation time
 * @method string getSlots() Obtain Distribution of node slots
 * @method void setSlots(string $Slots) Set Distribution of node slots
 * @method integer getKeys() Obtain Distribution of node keys
 * @method void setKeys(integer $Keys) Set Distribution of node keys
 * @method integer getQps() Obtain Node QPS
 * @method void setQps(integer $Qps) Set Node QPS
 * @method float getQpsSlope() Obtain QPS slope of a node
 * @method void setQpsSlope(float $QpsSlope) Set QPS slope of a node
 * @method integer getStorage() Obtain Node storage
 * @method void setStorage(integer $Storage) Set Node storage
 * @method float getStorageSlope() Obtain Storage slope of a node
 * @method void setStorageSlope(float $StorageSlope) Set Storage slope of a node
 */
class InstanceClusterNode extends AbstractModel
{
    /**
     * @var string Node name
     */
    public $Name;

    /**
     * @var string ID of the runtime node of an instance
     */
    public $RunId;

    /**
     * @var integer Cluster role. 0: primary; 1: secondary
     */
    public $Role;

    /**
     * @var integer Node status. 0: readwrite; 1: read; 2: backup
     */
    public $Status;

    /**
     * @var integer Service status. 0: down; 1: on
     */
    public $Connected;

    /**
     * @var string Node creation time
     */
    public $CreateTime;

    /**
     * @var string Node deactivation time
     */
    public $DownTime;

    /**
     * @var string Distribution of node slots
     */
    public $Slots;

    /**
     * @var integer Distribution of node keys
     */
    public $Keys;

    /**
     * @var integer Node QPS
     */
    public $Qps;

    /**
     * @var float QPS slope of a node
     */
    public $QpsSlope;

    /**
     * @var integer Node storage
     */
    public $Storage;

    /**
     * @var float Storage slope of a node
     */
    public $StorageSlope;

    /**
     * @param string $Name Node name
     * @param string $RunId ID of the runtime node of an instance
     * @param integer $Role Cluster role. 0: primary; 1: secondary
     * @param integer $Status Node status. 0: readwrite; 1: read; 2: backup
     * @param integer $Connected Service status. 0: down; 1: on
     * @param string $CreateTime Node creation time
     * @param string $DownTime Node deactivation time
     * @param string $Slots Distribution of node slots
     * @param integer $Keys Distribution of node keys
     * @param integer $Qps Node QPS
     * @param float $QpsSlope QPS slope of a node
     * @param integer $Storage Node storage
     * @param float $StorageSlope Storage slope of a node
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Connected",$param) and $param["Connected"] !== null) {
            $this->Connected = $param["Connected"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownTime",$param) and $param["DownTime"] !== null) {
            $this->DownTime = $param["DownTime"];
        }

        if (array_key_exists("Slots",$param) and $param["Slots"] !== null) {
            $this->Slots = $param["Slots"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("QpsSlope",$param) and $param["QpsSlope"] !== null) {
            $this->QpsSlope = $param["QpsSlope"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageSlope",$param) and $param["StorageSlope"] !== null) {
            $this->StorageSlope = $param["StorageSlope"];
        }
    }
}
