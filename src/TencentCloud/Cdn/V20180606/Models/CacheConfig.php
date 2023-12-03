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
 * Heuristic cache validity configuration
 *
 * @method string getHeuristicCacheTimeSwitch() Obtain Whether to enable heuristic cache validity. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setHeuristicCacheTimeSwitch(string $HeuristicCacheTimeSwitch) Set Whether to enable heuristic cache validity. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method integer getHeuristicCacheTime() Obtain Unit: Second
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setHeuristicCacheTime(integer $HeuristicCacheTime) Set Unit: Second
Note: This field may return·`null`, indicating that no valid values can be obtained.
 */
class CacheConfig extends AbstractModel
{
    /**
     * @var string Whether to enable heuristic cache validity. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $HeuristicCacheTimeSwitch;

    /**
     * @var integer Unit: Second
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $HeuristicCacheTime;

    /**
     * @param string $HeuristicCacheTimeSwitch Whether to enable heuristic cache validity. Values:
`on`: Enable
`off`: Disable
Note: This field may return·`null`, indicating that no valid values can be obtained.
     * @param integer $HeuristicCacheTime Unit: Second
Note: This field may return·`null`, indicating that no valid values can be obtained.
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
