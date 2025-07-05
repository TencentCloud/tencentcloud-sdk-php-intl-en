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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Heuristic cache configuration
 *
 * @method string getSwitch() Obtain Heuristic cache configuration switch, the values u200bu200bare: 
<li>on: on; </li>
<li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Heuristic cache configuration switch, the values u200bu200bare: 
<li>on: on; </li>
<li>off: off. </li>
 * @method HeuristicCacheConfig getCacheConfig() Obtain Custom heuristic cache time configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCacheConfig(HeuristicCacheConfig $CacheConfig) Set Custom heuristic cache time configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class HeuristicCache extends AbstractModel
{
    /**
     * @var string Heuristic cache configuration switch, the values u200bu200bare: 
<li>on: on; </li>
<li>off: off. </li>
     */
    public $Switch;

    /**
     * @var HeuristicCacheConfig Custom heuristic cache time configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CacheConfig;

    /**
     * @param string $Switch Heuristic cache configuration switch, the values u200bu200bare: 
<li>on: on; </li>
<li>off: off. </li>
     * @param HeuristicCacheConfig $CacheConfig Custom heuristic cache time configuration.
Note: This field may return null, indicating that no valid value can be obtained.
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
            $this->CacheConfig = new HeuristicCacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}
