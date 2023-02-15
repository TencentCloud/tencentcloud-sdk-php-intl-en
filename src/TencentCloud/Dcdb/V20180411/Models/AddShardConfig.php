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
 * Instance upgrade -- Adding shard
 *
 * @method integer getShardCount() Obtain The number of shards to be added
 * @method void setShardCount(integer $ShardCount) Set The number of shards to be added
 * @method integer getShardMemory() Obtain Shard memory capacity in GB
 * @method void setShardMemory(integer $ShardMemory) Set Shard memory capacity in GB
 * @method integer getShardStorage() Obtain Shard storage capacity in GB
 * @method void setShardStorage(integer $ShardStorage) Set Shard storage capacity in GB
 */
class AddShardConfig extends AbstractModel
{
    /**
     * @var integer The number of shards to be added
     */
    public $ShardCount;

    /**
     * @var integer Shard memory capacity in GB
     */
    public $ShardMemory;

    /**
     * @var integer Shard storage capacity in GB
     */
    public $ShardStorage;

    /**
     * @param integer $ShardCount The number of shards to be added
     * @param integer $ShardMemory Shard memory capacity in GB
     * @param integer $ShardStorage Shard storage capacity in GB
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
        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }
    }
}
