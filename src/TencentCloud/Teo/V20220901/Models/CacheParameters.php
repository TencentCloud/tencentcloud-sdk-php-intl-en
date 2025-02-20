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
 * Node Cache TTL configuration parameters
 *
 * @method FollowOrigin getFollowOrigin() Obtain Cache follows origin server. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setFollowOrigin(FollowOrigin $FollowOrigin) Set Cache follows origin server. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method NoCache getNoCache() Obtain No cache. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setNoCache(NoCache $NoCache) Set No cache. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method CustomTime getCustomTime() Obtain Custom cache time. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCustomTime(CustomTime $CustomTime) Set Custom cache time. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class CacheParameters extends AbstractModel
{
    /**
     * @var FollowOrigin Cache follows origin server. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $FollowOrigin;

    /**
     * @var NoCache No cache. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $NoCache;

    /**
     * @var CustomTime Custom cache time. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $CustomTime;

    /**
     * @param FollowOrigin $FollowOrigin Cache follows origin server. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param NoCache $NoCache No cache. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param CustomTime $CustomTime Custom cache time. if not specified, this configuration is not set. only one of followorigin, nocache, or customtime can have switch set to on.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
