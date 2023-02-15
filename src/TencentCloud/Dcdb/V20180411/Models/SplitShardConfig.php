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
 * Instance upgrade -- Sharding
 *
 * @method array getShardInstanceIds() Obtain Shard IDs in array
 * @method void setShardInstanceIds(array $ShardInstanceIds) Set Shard IDs in array
 * @method integer getSplitRate() Obtain Data split ratio at 50% (fixed)
 * @method void setSplitRate(integer $SplitRate) Set Data split ratio at 50% (fixed)
 * @method integer getShardMemory() Obtain Shard memory capacity in GB
 * @method void setShardMemory(integer $ShardMemory) Set Shard memory capacity in GB
 * @method integer getShardStorage() Obtain Shard storage capacity in GB
 * @method void setShardStorage(integer $ShardStorage) Set Shard storage capacity in GB
 */
class SplitShardConfig extends AbstractModel
{
    /**
     * @var array Shard IDs in array
     */
    public $ShardInstanceIds;

    /**
     * @var integer Data split ratio at 50% (fixed)
     */
    public $SplitRate;

    /**
     * @var integer Shard memory capacity in GB
     */
    public $ShardMemory;

    /**
     * @var integer Shard storage capacity in GB
     */
    public $ShardStorage;

    /**
     * @param array $ShardInstanceIds Shard IDs in array
     * @param integer $SplitRate Data split ratio at 50% (fixed)
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
        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }

        if (array_key_exists("SplitRate",$param) and $param["SplitRate"] !== null) {
            $this->SplitRate = $param["SplitRate"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }
    }
}
