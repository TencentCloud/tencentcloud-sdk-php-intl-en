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
 * @method string getMaxAgeType() Obtain Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method void setMaxAgeType(string $MaxAgeType) Set Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method array getMaxAgeContents() Obtain Matching content under the corresponding type of MaxAgeType: <li>Fill in * when all is used; </li> <li> Fill in suffix name when file is used, such as jpg, txt; </li> <li> Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li> <b>Note: all rules cannot be deleted. They follow the origin site by default and can be modified. </b>
 * @method void setMaxAgeContents(array $MaxAgeContents) Set Matching content under the corresponding type of MaxAgeType: <li>Fill in * when all is used; </li> <li> Fill in suffix name when file is used, such as jpg, txt; </li> <li> Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li> <b>Note: all rules cannot be deleted. They follow the origin site by default and can be modified. </b>
 * @method integer getMaxAgeTime() Obtain MaxAge time setting, unit second; <b>Note: The time is 0, which means no caching. </b>
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set MaxAge time setting, unit second; <b>Note: The time is 0, which means no caching. </b>
 * @method string getFollowOrigin() Obtain Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
 * @method void setFollowOrigin(string $FollowOrigin) Set Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
 */
class MaxAgeRule extends AbstractModel
{
    /**
     * @var string Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     */
    public $MaxAgeType;

    /**
     * @var array Matching content under the corresponding type of MaxAgeType: <li>Fill in * when all is used; </li> <li> Fill in suffix name when file is used, such as jpg, txt; </li> <li> Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li> <b>Note: all rules cannot be deleted. They follow the origin site by default and can be modified. </b>
     */
    public $MaxAgeContents;

    /**
     * @var integer MaxAge time setting, unit second; <b>Note: The time is 0, which means no caching. </b>
     */
    public $MaxAgeTime;

    /**
     * @var string Whether to follow the origin server. Valid values: on and off. If it's on, MaxAgeTime is ignored.
     */
    public $FollowOrigin;

    /**
     * @param string $MaxAgeType Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     * @param array $MaxAgeContents Matching content under the corresponding type of MaxAgeType: <li>Fill in * when all is used; </li> <li> Fill in suffix name when file is used, such as jpg, txt; </li> <li> Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li> <b>Note: all rules cannot be deleted. They follow the origin site by default and can be modified. </b>
     * @param integer $MaxAgeTime MaxAge time setting, unit second; <b>Note: The time is 0, which means no caching. </b>
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
