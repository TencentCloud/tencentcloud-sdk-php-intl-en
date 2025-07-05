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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache configuration follows the origin server configuration.
 *
 * @method string getSwitch() Obtain Whether to follow the origin configuration for path cache. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to follow the origin configuration for path cache. Values:
`on`: Enable
`off`: Disable
 * @method HeuristicCache getHeuristicCache() Obtain Heuristic cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHeuristicCache(HeuristicCache $HeuristicCache) Set Heuristic cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheConfigFollowOrigin extends AbstractModel
{
    /**
     * @var string Whether to follow the origin configuration for path cache. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var HeuristicCache Heuristic cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HeuristicCache;

    /**
     * @param string $Switch Whether to follow the origin configuration for path cache. Values:
`on`: Enable
`off`: Disable
     * @param HeuristicCache $HeuristicCache Heuristic cache configuration
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeuristicCache",$param) and $param["HeuristicCache"] !== null) {
            $this->HeuristicCache = new HeuristicCache();
            $this->HeuristicCache->deserialize($param["HeuristicCache"]);
        }
    }
}
