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
 * @method FollowOrigin getFollowOrigin() Obtain Cache follows the origin site. Leave unset means this configuration is not set. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) Set Cache follows the origin site. Leave unset means this configuration is not set. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 * @method NoCache getNoCache() Obtain No cache. If left empty, this configuration is not set. Among FollowOrigin, NoCache, and CustomTime, only one can have Switch set to on.
 * @method void setNoCache(NoCache $NoCache) Set No cache. If left empty, this configuration is not set. Among FollowOrigin, NoCache, and CustomTime, only one can have Switch set to on.
 * @method CustomTime getCustomTime() Obtain Custom cache time. Leave it unset means this configuration is not set. A maximum of one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 * @method void setCustomTime(CustomTime $CustomTime) Set Custom cache time. Leave it unset means this configuration is not set. A maximum of one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
 */
class CacheParameters extends AbstractModel
{
    /**
     * @var FollowOrigin Cache follows the origin site. Leave unset means this configuration is not set. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
     */
    public $FollowOrigin;

    /**
     * @var NoCache No cache. If left empty, this configuration is not set. Among FollowOrigin, NoCache, and CustomTime, only one can have Switch set to on.
     */
    public $NoCache;

    /**
     * @var CustomTime Custom cache time. Leave it unset means this configuration is not set. A maximum of one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
     */
    public $CustomTime;

    /**
     * @param FollowOrigin $FollowOrigin Cache follows the origin site. Leave unset means this configuration is not set. At most one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
     * @param NoCache $NoCache No cache. If left empty, this configuration is not set. Among FollowOrigin, NoCache, and CustomTime, only one can have Switch set to on.
     * @param CustomTime $CustomTime Custom cache time. Leave it unset means this configuration is not set. A maximum of one of FollowOrigin, NoCache, and CustomTime can be configured with Switch on.
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
            $this->CustomTime = new CustomTime();
            $this->CustomTime->deserialize($param["CustomTime"]);
        }
    }
}
