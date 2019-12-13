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
 * @method string getName() 获取Node name
 * @method void setName(string $Name) 设置Node name
 * @method string getRunId() 获取ID of the runtime node of an instance
 * @method void setRunId(string $RunId) 设置ID of the runtime node of an instance
 * @method integer getRole() 获取Cluster role. 0: master; 1: slave
 * @method void setRole(integer $Role) 设置Cluster role. 0: master; 1: slave
 * @method integer getStatus() 获取Node status. 0: readwrite; 1: read; 2: backup
 * @method void setStatus(integer $Status) 设置Node status. 0: readwrite; 1: read; 2: backup
 * @method integer getConnected() 获取Service status. 0: down; 1: on
 * @method void setConnected(integer $Connected) 设置Service status. 0: down; 1: on
 * @method string getCreateTime() 获取Node creation time
 * @method void setCreateTime(string $CreateTime) 设置Node creation time
 * @method string getDownTime() 获取Node deactivation time
 * @method void setDownTime(string $DownTime) 设置Node deactivation time
 * @method string getSlots() 获取Distribution of node slots
 * @method void setSlots(string $Slots) 设置Distribution of node slots
 * @method integer getKeys() 获取Distribution of node keys
 * @method void setKeys(integer $Keys) 设置Distribution of node keys
 * @method integer getQps() 获取Node QPS
 * @method void setQps(integer $Qps) 设置Node QPS
 * @method float getQpsSlope() 获取QPS slope of a node
 * @method void setQpsSlope(float $QpsSlope) 设置QPS slope of a node
 * @method integer getStorage() 获取Node storage
 * @method void setStorage(integer $Storage) 设置Node storage
 * @method float getStorageSlope() 获取Storage slope of a node
 * @method void setStorageSlope(float $StorageSlope) 设置Storage slope of a node
 */

/**
 *Instance node type
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
     * @var integer Cluster role. 0: master; 1: slave
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
     * @param integer $Role Cluster role. 0: master; 1: slave
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
     * 内部实现，用户禁止调用
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
