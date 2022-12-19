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
 * KillSession request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getSessionId() Obtain List of session IDs
 * @method void setSessionId(array $SessionId) Set List of session IDs
 * @method string getShardId() Obtain Shard ID. Either `ShardId` or `ShardSerialId` is required.
 * @method void setShardId(string $ShardId) Set Shard ID. Either `ShardId` or `ShardSerialId` is required.
 * @method string getShardSerialId() Obtain Shard sequence ID. Either `ShardId` or `ShardSerialId` is required.
 * @method void setShardSerialId(string $ShardSerialId) Set Shard sequence ID. Either `ShardId` or `ShardSerialId` is required.
 */
class KillSessionRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array List of session IDs
     */
    public $SessionId;

    /**
     * @var string Shard ID. Either `ShardId` or `ShardSerialId` is required.
     */
    public $ShardId;

    /**
     * @var string Shard sequence ID. Either `ShardId` or `ShardSerialId` is required.
     */
    public $ShardSerialId;

    /**
     * @param string $InstanceId Instance ID
     * @param array $SessionId List of session IDs
     * @param string $ShardId Shard ID. Either `ShardId` or `ShardSerialId` is required.
     * @param string $ShardSerialId Shard sequence ID. Either `ShardId` or `ShardSerialId` is required.
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }
    }
}
