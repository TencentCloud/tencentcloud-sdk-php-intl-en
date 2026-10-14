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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES cluster log details
 *
 * @method string getTime() Obtain Log time
 * @method void setTime(string $Time) Set Log time
 * @method string getLevel() Obtain Log level
 * @method void setLevel(string $Level) Set Log level
 * @method string getIp() Obtain Cluster node IP address.
 * @method void setIp(string $Ip) Set Cluster node IP address.
 * @method string getMessage() Obtain Log content
 * @method void setMessage(string $Message) Set Log content
 * @method string getNodeID() Obtain Cluster node ID.
 * @method void setNodeID(string $NodeID) Set Cluster node ID.
 * @method string getIndexName() Obtain Slow log index name
 * @method void setIndexName(string $IndexName) Set Slow log index name
 * @method string getShard() Obtain Slow log index shards
 * @method void setShard(string $Shard) Set Slow log index shards
 * @method string getQueryCost() Obtain Slow log index query time
 * @method void setQueryCost(string $QueryCost) Set Slow log index query time
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string Log time
     */
    public $Time;

    /**
     * @var string Log level
     */
    public $Level;

    /**
     * @var string Cluster node IP address.
     */
    public $Ip;

    /**
     * @var string Log content
     */
    public $Message;

    /**
     * @var string Cluster node ID.
     */
    public $NodeID;

    /**
     * @var string Slow log index name
     */
    public $IndexName;

    /**
     * @var string Slow log index shards
     */
    public $Shard;

    /**
     * @var string Slow log index query time
     */
    public $QueryCost;

    /**
     * @param string $Time Log time
     * @param string $Level Log level
     * @param string $Ip Cluster node IP address.
     * @param string $Message Log content
     * @param string $NodeID Cluster node ID.
     * @param string $IndexName Slow log index name
     * @param string $Shard Slow log index shards
     * @param string $QueryCost Slow log index query time
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Shard",$param) and $param["Shard"] !== null) {
            $this->Shard = $param["Shard"];
        }

        if (array_key_exists("QueryCost",$param) and $param["QueryCost"] !== null) {
            $this->QueryCost = $param["QueryCost"];
        }
    }
}
