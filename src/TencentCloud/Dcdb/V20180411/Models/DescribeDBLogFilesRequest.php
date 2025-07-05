<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeDBLogFiles request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow7t8lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow7t8lmc.
 * @method string getShardId() Obtain Shard ID in the format of shard-7noic7tv
 * @method void setShardId(string $ShardId) Set Shard ID in the format of shard-7noic7tv
 * @method integer getType() Obtain Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
 * @method void setType(integer $Type) Set Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
 */
class DescribeDBLogFilesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow7t8lmc.
     */
    public $InstanceId;

    /**
     * @var string Shard ID in the format of shard-7noic7tv
     */
    public $ShardId;

    /**
     * @var integer Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
     */
    public $Type;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow7t8lmc.
     * @param string $ShardId Shard ID in the format of shard-7noic7tv
     * @param integer $Type Requested log type. Valid values: 1 (binlog); 2 (cold backup); 3 (errlog); 4 (slowlog).
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

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
