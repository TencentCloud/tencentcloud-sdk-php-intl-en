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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Heuristic cache configuration
 *
 * @method string getSwitch() Obtain `on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set `on`: Enable
`off`: Disable
 * @method CacheConfig getCacheConfig() Obtain Heuristic cache validity configuration
 * @method void setCacheConfig(CacheConfig $CacheConfig) Set Heuristic cache validity configuration
 */
class HeuristicCache extends AbstractModel
{
    /**
     * @var string `on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var CacheConfig Heuristic cache validity configuration
     */
    public $CacheConfig;

    /**
     * @param string $Switch `on`: Enable
`off`: Disable
     * @param CacheConfig $CacheConfig Heuristic cache validity configuration
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}