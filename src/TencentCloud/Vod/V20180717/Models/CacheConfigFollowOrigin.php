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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache configuration follows the origin server configuration.
 *
 * @method string getSwitch() Obtain The path cache follows the origin site configuration switch. The values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set The path cache follows the origin site configuration switch. The values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method HeuristicCache getHeuristicCache() Obtain Heuristic cache configuration
 * @method void setHeuristicCache(HeuristicCache $HeuristicCache) Set Heuristic cache configuration
 */
class CacheConfigFollowOrigin extends AbstractModel
{
    /**
     * @var string The path cache follows the origin site configuration switch. The values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var HeuristicCache Heuristic cache configuration
     */
    public $HeuristicCache;

    /**
     * @param string $Switch The path cache follows the origin site configuration switch. The values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     * @param HeuristicCache $HeuristicCache Heuristic cache configuration
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
