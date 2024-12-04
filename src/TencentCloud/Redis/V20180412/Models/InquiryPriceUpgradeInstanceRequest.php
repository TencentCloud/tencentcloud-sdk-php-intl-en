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
 * InquiryPriceUpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method integer getMemSize() Obtain Shard size. Unit: MB.
 * @method void setMemSize(integer $MemSize) Set Shard size. Unit: MB.
 * @method integer getRedisShardNum() Obtain Number of shards. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
 * @method void setRedisShardNum(integer $RedisShardNum) Set Number of shards. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
 * @method integer getRedisReplicasNum() Obtain Number of replicas. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Number of replicas. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
 */
class InquiryPriceUpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Shard size. Unit: MB.
     */
    public $MemSize;

    /**
     * @var integer Number of shards. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
     */
    public $RedisShardNum;

    /**
     * @var integer Number of replicas. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
     */
    public $RedisReplicasNum;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param integer $MemSize Shard size. Unit: MB.
     * @param integer $RedisShardNum Number of shards. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
     * @param integer $RedisReplicasNum Number of replicas. This parameter is not required for Redis 2.8 Primary-Secondary Edition, CKV Primary-Secondary Edition, and Redis 2.8 Single-node Edition.
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
    }
}
