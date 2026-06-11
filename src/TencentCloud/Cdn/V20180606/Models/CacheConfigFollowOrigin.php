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
 * @method string getOriginMtimeCheckType() Obtain Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginMtimeCheckType(string $OriginMtimeCheckType) Set Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginMtimeCheckType;

    /**
     * @param string $Switch Whether to follow the origin configuration for path cache. Values:
`on`: Enable
`off`: Disable
     * @param HeuristicCache $HeuristicCache Heuristic cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginMtimeCheckType Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("OriginMtimeCheckType",$param) and $param["OriginMtimeCheckType"] !== null) {
            $this->OriginMtimeCheckType = $param["OriginMtimeCheckType"];
        }
    }
}
