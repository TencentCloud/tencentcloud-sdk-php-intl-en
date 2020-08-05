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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of an instance shard
 *
 * @method float getUsedVolume() Obtain Used shard capacity
 * @method void setUsedVolume(float $UsedVolume) Set Used shard capacity
 * @method string getReplicaSetId() Obtain Shard ID
 * @method void setReplicaSetId(string $ReplicaSetId) Set Shard ID
 * @method string getReplicaSetName() Obtain Shard name
 * @method void setReplicaSetName(string $ReplicaSetName) Set Shard name
 * @method integer getMemory() Obtain Shard memory size in MB
 * @method void setMemory(integer $Memory) Set Shard memory size in MB
 * @method integer getVolume() Obtain Shard disk size in MB
 * @method void setVolume(integer $Volume) Set Shard disk size in MB
 * @method integer getOplogSize() Obtain Shard oplog size in MB
 * @method void setOplogSize(integer $OplogSize) Set Shard oplog size in MB
 * @method integer getSecondaryNum() Obtain Number of secondary nodes of a shard
 * @method void setSecondaryNum(integer $SecondaryNum) Set Number of secondary nodes of a shard
 * @method string getRealReplicaSetId() Obtain Shard physical ID
 * @method void setRealReplicaSetId(string $RealReplicaSetId) Set Shard physical ID
 */
class ShardInfo extends AbstractModel
{
    /**
     * @var float Used shard capacity
     */
    public $UsedVolume;

    /**
     * @var string Shard ID
     */
    public $ReplicaSetId;

    /**
     * @var string Shard name
     */
    public $ReplicaSetName;

    /**
     * @var integer Shard memory size in MB
     */
    public $Memory;

    /**
     * @var integer Shard disk size in MB
     */
    public $Volume;

    /**
     * @var integer Shard oplog size in MB
     */
    public $OplogSize;

    /**
     * @var integer Number of secondary nodes of a shard
     */
    public $SecondaryNum;

    /**
     * @var string Shard physical ID
     */
    public $RealReplicaSetId;

    /**
     * @param float $UsedVolume Used shard capacity
     * @param string $ReplicaSetId Shard ID
     * @param string $ReplicaSetName Shard name
     * @param integer $Memory Shard memory size in MB
     * @param integer $Volume Shard disk size in MB
     * @param integer $OplogSize Shard oplog size in MB
     * @param integer $SecondaryNum Number of secondary nodes of a shard
     * @param string $RealReplicaSetId Shard physical ID
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
        if (array_key_exists("UsedVolume",$param) and $param["UsedVolume"] !== null) {
            $this->UsedVolume = $param["UsedVolume"];
        }

        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("RealReplicaSetId",$param) and $param["RealReplicaSetId"] !== null) {
            $this->RealReplicaSetId = $param["RealReplicaSetId"];
        }
    }
}
