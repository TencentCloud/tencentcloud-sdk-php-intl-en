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
 * Browser Cache TTL configuration parameters
 *
 * @method string getFollowOrigin() Obtain Specifies whether to follow the origin server cache-control configuration, with the following values:.
<Li>`On`: follow the origin server and ignore the field cachetime;</li>.
<Li>`Off`: do not follow the origin server and apply the field cachetime.</li>.
 * @method void setFollowOrigin(string $FollowOrigin) Set Specifies whether to follow the origin server cache-control configuration, with the following values:.
<Li>`On`: follow the origin server and ignore the field cachetime;</li>.
<Li>`Off`: do not follow the origin server and apply the field cachetime.</li>.
 * @method integer getCacheTime() Obtain Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: when followorigin is off, it means not following the origin server and using cachetime to set the cache time; otherwise, this field will not take effect.
 * @method void setCacheTime(integer $CacheTime) Set Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: when followorigin is off, it means not following the origin server and using cachetime to set the cache time; otherwise, this field will not take effect.
 */
class MaxAgeParameters extends AbstractModel
{
    /**
     * @var string Specifies whether to follow the origin server cache-control configuration, with the following values:.
<Li>`On`: follow the origin server and ignore the field cachetime;</li>.
<Li>`Off`: do not follow the origin server and apply the field cachetime.</li>.
     */
    public $FollowOrigin;

    /**
     * @var integer Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: when followorigin is off, it means not following the origin server and using cachetime to set the cache time; otherwise, this field will not take effect.
     */
    public $CacheTime;

    /**
     * @param string $FollowOrigin Specifies whether to follow the origin server cache-control configuration, with the following values:.
<Li>`On`: follow the origin server and ignore the field cachetime;</li>.
<Li>`Off`: do not follow the origin server and apply the field cachetime.</li>.
     * @param integer $CacheTime Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: when followorigin is off, it means not following the origin server and using cachetime to set the cache time; otherwise, this field will not take effect.
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
            $this->FollowOrigin = $param["FollowOrigin"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
