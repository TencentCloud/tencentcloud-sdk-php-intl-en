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
 * Browser cache rule configuration, used to set the default MaxAge. Disabled by default.
 *
 * @method string getFollowOrigin() Obtain Whether to follow the origin site, with values:
<li>on: follow the origin site, ignore the MaxAge time setting;</li>
<li>off: Do not follow the origin site. Use the MaxAge time setting.</li>
 * @method void setFollowOrigin(string $FollowOrigin) Set Whether to follow the origin site, with values:
<li>on: follow the origin site, ignore the MaxAge time setting;</li>
<li>off: Do not follow the origin site. Use the MaxAge time setting.</li>
 * @method integer getMaxAgeTime() Obtain MaxAge time setting, in seconds. Value range: 0–315360000.
Note: If the time is 0, no cache is used.
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set MaxAge time setting, in seconds. Value range: 0–315360000.
Note: If the time is 0, no cache is used.
 */
class MaxAge extends AbstractModel
{
    /**
     * @var string Whether to follow the origin site, with values:
<li>on: follow the origin site, ignore the MaxAge time setting;</li>
<li>off: Do not follow the origin site. Use the MaxAge time setting.</li>
     */
    public $FollowOrigin;

    /**
     * @var integer MaxAge time setting, in seconds. Value range: 0–315360000.
Note: If the time is 0, no cache is used.
     */
    public $MaxAgeTime;

    /**
     * @param string $FollowOrigin Whether to follow the origin site, with values:
<li>on: follow the origin site, ignore the MaxAge time setting;</li>
<li>off: Do not follow the origin site. Use the MaxAge time setting.</li>
     * @param integer $MaxAgeTime MaxAge time setting, in seconds. Value range: 0–315360000.
Note: If the time is 0, no cache is used.
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

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }
    }
}
