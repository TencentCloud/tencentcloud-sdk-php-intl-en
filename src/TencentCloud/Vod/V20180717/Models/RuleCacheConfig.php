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
 * Path cache cache configuration (select one of the three cache modes)
 *
 * @method CacheConfigCache getCache() Obtain Cache configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCache(CacheConfigCache $Cache) Set Cache configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CacheConfigNoCache getNoCache() Obtain Configuration is not cached.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNoCache(CacheConfigNoCache $NoCache) Set Configuration is not cached.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method CacheConfigFollowOrigin getFollowOrigin() Obtain Follow the origin configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFollowOrigin(CacheConfigFollowOrigin $FollowOrigin) Set Follow the origin configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleCacheConfig extends AbstractModel
{
    /**
     * @var CacheConfigCache Cache configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Cache;

    /**
     * @var CacheConfigNoCache Configuration is not cached.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NoCache;

    /**
     * @var CacheConfigFollowOrigin Follow the origin configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FollowOrigin;

    /**
     * @param CacheConfigCache $Cache Cache configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CacheConfigNoCache $NoCache Configuration is not cached.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param CacheConfigFollowOrigin $FollowOrigin Follow the origin configuration.
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
        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfigCache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = new CacheConfigNoCache();
            $this->NoCache->deserialize($param["NoCache"]);
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = new CacheConfigFollowOrigin();
            $this->FollowOrigin->deserialize($param["FollowOrigin"]);
        }
    }
}
