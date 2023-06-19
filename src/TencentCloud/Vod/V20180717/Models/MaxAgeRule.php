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
 * MaxAge rules configuration
 *
 * @method string getMaxAgeType() Obtain Rule types: <li>all: effective for all files.</li> <li>file: effective for specified file suffixes.</li> <li>directory: effective for specified paths.</li> <li>path: effective for specified absolute paths.</li>
 * @method void setMaxAgeType(string $MaxAgeType) Set Rule types: <li>all: effective for all files.</li> <li>file: effective for specified file suffixes.</li> <li>directory: effective for specified paths.</li> <li>path: effective for specified absolute paths.</li>
 * @method array getMaxAgeContents() Obtain Content for each MaxAgeType: <li>For all, enter a wildcard *.</li> <li>For file, enter the suffix, e.g., jpg or txt.</li> <li>For directory, enter the path, e.g., /xxx/test/.</li> <li>For path, enter the absolute path, e.g., /xxx/test.html.</li> <b>Note: the all rule cannot be deleted, and it follows the origin site by default, which can be modified.</b>
 * @method void setMaxAgeContents(array $MaxAgeContents) Set Content for each MaxAgeType: <li>For all, enter a wildcard *.</li> <li>For file, enter the suffix, e.g., jpg or txt.</li> <li>For directory, enter the path, e.g., /xxx/test/.</li> <li>For path, enter the absolute path, e.g., /xxx/test.html.</li> <b>Note: the all rule cannot be deleted, and it follows the origin site by default, which can be modified.</b>
 * @method integer getMaxAgeTime() Obtain Note: The value 0 means not to cache. <b>Note: The value 0 means not to cache.</b>
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set Note: The value 0 means not to cache. <b>Note: The value 0 means not to cache.</b>
 * @method string getFollowOrigin() Obtain Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
 * @method void setFollowOrigin(string $FollowOrigin) Set Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
 */
class MaxAgeRule extends AbstractModel
{
    /**
     * @var string Rule types: <li>all: effective for all files.</li> <li>file: effective for specified file suffixes.</li> <li>directory: effective for specified paths.</li> <li>path: effective for specified absolute paths.</li>
     */
    public $MaxAgeType;

    /**
     * @var array Content for each MaxAgeType: <li>For all, enter a wildcard *.</li> <li>For file, enter the suffix, e.g., jpg or txt.</li> <li>For directory, enter the path, e.g., /xxx/test/.</li> <li>For path, enter the absolute path, e.g., /xxx/test.html.</li> <b>Note: the all rule cannot be deleted, and it follows the origin site by default, which can be modified.</b>
     */
    public $MaxAgeContents;

    /**
     * @var integer Note: The value 0 means not to cache. <b>Note: The value 0 means not to cache.</b>
     */
    public $MaxAgeTime;

    /**
     * @var string Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
     */
    public $FollowOrigin;

    /**
     * @param string $MaxAgeType Rule types: <li>all: effective for all files.</li> <li>file: effective for specified file suffixes.</li> <li>directory: effective for specified paths.</li> <li>path: effective for specified absolute paths.</li>
     * @param array $MaxAgeContents Content for each MaxAgeType: <li>For all, enter a wildcard *.</li> <li>For file, enter the suffix, e.g., jpg or txt.</li> <li>For directory, enter the path, e.g., /xxx/test/.</li> <li>For path, enter the absolute path, e.g., /xxx/test.html.</li> <b>Note: the all rule cannot be deleted, and it follows the origin site by default, which can be modified.</b>
     * @param integer $MaxAgeTime Note: The value 0 means not to cache. <b>Note: The value 0 means not to cache.</b>
     * @param string $FollowOrigin Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
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
        if (array_key_exists("MaxAgeType",$param) and $param["MaxAgeType"] !== null) {
            $this->MaxAgeType = $param["MaxAgeType"];
        }

        if (array_key_exists("MaxAgeContents",$param) and $param["MaxAgeContents"] !== null) {
            $this->MaxAgeContents = $param["MaxAgeContents"];
        }

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = $param["FollowOrigin"];
        }
    }
}
