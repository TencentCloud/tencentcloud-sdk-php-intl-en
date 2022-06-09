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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index configuration fields
 *
 * @method string getNumberOfShards() Obtain Number of primary shards
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNumberOfShards(string $NumberOfShards) Set Number of primary shards
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getNumberOfReplicas() Obtain Number of replica shards
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNumberOfReplicas(string $NumberOfReplicas) Set Number of replica shards
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRefreshInterval() Obtain Index refresh interval
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRefreshInterval(string $RefreshInterval) Set Index refresh interval
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class IndexSettingsField extends AbstractModel
{
    /**
     * @var string Number of primary shards
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NumberOfShards;

    /**
     * @var string Number of replica shards
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NumberOfReplicas;

    /**
     * @var string Index refresh interval
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RefreshInterval;

    /**
     * @param string $NumberOfShards Number of primary shards
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $NumberOfReplicas Number of replica shards
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RefreshInterval Index refresh interval
Note: This field may return `null`, indicating that no valid value can be obtained.
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
