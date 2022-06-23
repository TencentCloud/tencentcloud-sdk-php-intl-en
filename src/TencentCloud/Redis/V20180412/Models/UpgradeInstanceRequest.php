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
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getMemSize() Obtain Shard size in MB. This parameter cannot be passed in at the same time as `RedisShardNum`/`RedisReplicasNum`.
 * @method void setMemSize(integer $MemSize) Set Shard size in MB. This parameter cannot be passed in at the same time as `RedisShardNum`/`RedisReplicasNum`.
 * @method integer getRedisShardNum() Obtain Shard quantity. This parameter is not required by standard architecture instances and cannot be passed in at the same time as `RedisReplicasNum`/`MemSize`.
 * @method void setRedisShardNum(integer $RedisShardNum) Set Shard quantity. This parameter is not required by standard architecture instances and cannot be passed in at the same time as `RedisReplicasNum`/`MemSize`.
 * @method integer getRedisReplicasNum() Obtain Replica quantity. This parameter cannot be passed in at the same time as `RedisShardNum`/`MemSize`. To modify the number of replicas in a multi-AZ instance, `NodeSet` must be passed in.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Replica quantity. This parameter cannot be passed in at the same time as `RedisShardNum`/`MemSize`. To modify the number of replicas in a multi-AZ instance, `NodeSet` must be passed in.
 * @method array getNodeSet() Obtain The information of the replica to be added to a multi-AZ instance, such as replica availability zone and replica type (`NodeType` should be `1`). This parameter is required only when multi-AZ instances add replicas.
 * @method void setNodeSet(array $NodeSet) Set The information of the replica to be added to a multi-AZ instance, such as replica availability zone and replica type (`NodeType` should be `1`). This parameter is required only when multi-AZ instances add replicas.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Shard size in MB. This parameter cannot be passed in at the same time as `RedisShardNum`/`RedisReplicasNum`.
     */
    public $MemSize;

    /**
     * @var integer Shard quantity. This parameter is not required by standard architecture instances and cannot be passed in at the same time as `RedisReplicasNum`/`MemSize`.
     */
    public $RedisShardNum;

    /**
     * @var integer Replica quantity. This parameter cannot be passed in at the same time as `RedisShardNum`/`MemSize`. To modify the number of replicas in a multi-AZ instance, `NodeSet` must be passed in.
     */
    public $RedisReplicasNum;

    /**
     * @var array The information of the replica to be added to a multi-AZ instance, such as replica availability zone and replica type (`NodeType` should be `1`). This parameter is required only when multi-AZ instances add replicas.
     */
    public $NodeSet;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $MemSize Shard size in MB. This parameter cannot be passed in at the same time as `RedisShardNum`/`RedisReplicasNum`.
     * @param integer $RedisShardNum Shard quantity. This parameter is not required by standard architecture instances and cannot be passed in at the same time as `RedisReplicasNum`/`MemSize`.
     * @param integer $RedisReplicasNum Replica quantity. This parameter cannot be passed in at the same time as `RedisShardNum`/`MemSize`. To modify the number of replicas in a multi-AZ instance, `NodeSet` must be passed in.
     * @param array $NodeSet The information of the replica to be added to a multi-AZ instance, such as replica availability zone and replica type (`NodeType` should be `1`). This parameter is required only when multi-AZ instances add replicas.
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }
    }
}
