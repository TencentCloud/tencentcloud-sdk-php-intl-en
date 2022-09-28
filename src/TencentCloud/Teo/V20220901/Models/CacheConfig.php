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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache rule configuration.
 *
 * @method Cache getCache() Obtain Cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCache(Cache $Cache) Set Cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NoCache getNoCache() Obtain No-cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoCache(NoCache $NoCache) Set No-cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FollowOrigin getFollowOrigin() Obtain Follows the origin server configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) Set Follows the origin server configuration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CacheConfig extends AbstractModel
{
    /**
     * @var Cache Cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cache;

    /**
     * @var NoCache No-cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoCache;

    /**
     * @var FollowOrigin Follows the origin server configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FollowOrigin;

    /**
     * @param Cache $Cache Cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NoCache $NoCache No-cache configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FollowOrigin $FollowOrigin Follows the origin server configuration
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
        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = new NoCache();
            $this->NoCache->deserialize($param["NoCache"]);
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = new FollowOrigin();
            $this->FollowOrigin->deserialize($param["FollowOrigin"]);
        }
    }
}
