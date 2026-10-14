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
 * Index configuration field
 *
 * @method string getNumberOfShards() Obtain Number of index primary shards
 * @method void setNumberOfShards(string $NumberOfShards) Set Number of index primary shards
 * @method string getNumberOfReplicas() Obtain Replica shard count of an index
 * @method void setNumberOfReplicas(string $NumberOfReplicas) Set Replica shard count of an index
 * @method string getRefreshInterval() Obtain Index refresh frequency
 * @method void setRefreshInterval(string $RefreshInterval) Set Index refresh frequency
 */
class IndexSettingsField extends AbstractModel
{
    /**
     * @var string Number of index primary shards
     */
    public $NumberOfShards;

    /**
     * @var string Replica shard count of an index
     */
    public $NumberOfReplicas;

    /**
     * @var string Index refresh frequency
     */
    public $RefreshInterval;

    /**
     * @param string $NumberOfShards Number of index primary shards
     * @param string $NumberOfReplicas Replica shard count of an index
     * @param string $RefreshInterval Index refresh frequency
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
        if (array_key_exists("NumberOfShards",$param) and $param["NumberOfShards"] !== null) {
            $this->NumberOfShards = $param["NumberOfShards"];
        }

        if (array_key_exists("NumberOfReplicas",$param) and $param["NumberOfReplicas"] !== null) {
            $this->NumberOfReplicas = $param["NumberOfReplicas"];
        }

        if (array_key_exists("RefreshInterval",$param) and $param["RefreshInterval"] !== null) {
            $this->RefreshInterval = $param["RefreshInterval"];
        }
    }
}
