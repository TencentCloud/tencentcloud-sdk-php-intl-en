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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node cache TTL config.
 *
 * @method FollowOrigin getFollowOrigin() Obtain Cache configuration follows the origin site. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) Set Cache configuration follows the origin site. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 * @method NoCache getNoCache() Obtain No cache configuration. For FollowOrigin, NoCache, and CustomTime, at most one Switch can be set to on.
 * @method void setNoCache(NoCache $NoCache) Set No cache configuration. For FollowOrigin, NoCache, and CustomTime, at most one Switch can be set to on.
 * @method CacheConfigCustomTime getCustomTime() Obtain Custom cache time configuration. For FollowOrigin, NoCache, and CustomTime, at most one can have Switch set to on.
 * @method void setCustomTime(CacheConfigCustomTime $CustomTime) Set Custom cache time configuration. For FollowOrigin, NoCache, and CustomTime, at most one can have Switch set to on.
 */
class CacheConfigParameters extends AbstractModel
{
    /**
     * @var FollowOrigin Cache configuration follows the origin site. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
     */
    public $FollowOrigin;

    /**
     * @var NoCache No cache configuration. For FollowOrigin, NoCache, and CustomTime, at most one Switch can be set to on.
     */
    public $NoCache;

    /**
     * @var CacheConfigCustomTime Custom cache time configuration. For FollowOrigin, NoCache, and CustomTime, at most one can have Switch set to on.
     */
    public $CustomTime;

    /**
     * @param FollowOrigin $FollowOrigin Cache configuration follows the origin site. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
     * @param NoCache $NoCache No cache configuration. For FollowOrigin, NoCache, and CustomTime, at most one Switch can be set to on.
     * @param CacheConfigCustomTime $CustomTime Custom cache time configuration. For FollowOrigin, NoCache, and CustomTime, at most one can have Switch set to on.
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
        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = new FollowOrigin();
            $this->FollowOrigin->deserialize($param["FollowOrigin"]);
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = new NoCache();
            $this->NoCache->deserialize($param["NoCache"]);
        }

        if (array_key_exists("CustomTime",$param) and $param["CustomTime"] !== null) {
            $this->CustomTime = new CacheConfigCustomTime();
            $this->CustomTime->deserialize($param["CustomTime"]);
        }
    }
}
