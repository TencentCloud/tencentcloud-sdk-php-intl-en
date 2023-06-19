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
 * Heuristic cache configuration
 *
 * @method string getHeuristicCacheTimeSwitch() Obtain Heuristic cache configuration switch:<li>on:Enable.</li> <li>off: Disable.</li>
 * @method void setHeuristicCacheTimeSwitch(string $HeuristicCacheTimeSwitch) Set Heuristic cache configuration switch:<li>on:Enable.</li> <li>off: Disable.</li>
 * @method integer getHeuristicCacheTime() Obtain Unit: seconds.
 * @method void setHeuristicCacheTime(integer $HeuristicCacheTime) Set Unit: seconds.
 */
class HeuristicCacheConfig extends AbstractModel
{
    /**
     * @var string Heuristic cache configuration switch:<li>on:Enable.</li> <li>off: Disable.</li>
     */
    public $HeuristicCacheTimeSwitch;

    /**
     * @var integer Unit: seconds.
     */
    public $HeuristicCacheTime;

    /**
     * @param string $HeuristicCacheTimeSwitch Heuristic cache configuration switch:<li>on:Enable.</li> <li>off: Disable.</li>
     * @param integer $HeuristicCacheTime Unit: seconds.
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
        if (array_key_exists("HeuristicCacheTimeSwitch",$param) and $param["HeuristicCacheTimeSwitch"] !== null) {
            $this->HeuristicCacheTimeSwitch = $param["HeuristicCacheTimeSwitch"];
        }

        if (array_key_exists("HeuristicCacheTime",$param) and $param["HeuristicCacheTime"] !== null) {
            $this->HeuristicCacheTime = $param["HeuristicCacheTime"];
        }
    }
}
