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
 * MagAge rule configuration
 *
 * @method string getMaxAgeType() Obtain <p>Rule type:</p><li>all: takes effect for all files;</li><li>file: takes effect for a specified file suffix;</li><li>directory: takes effect for a specified path;</li><li>path: takes effect for an absolute path.</li>
 * @method void setMaxAgeType(string $MaxAgeType) Set <p>Rule type:</p><li>all: takes effect for all files;</li><li>file: takes effect for a specified file suffix;</li><li>directory: takes effect for a specified path;</li><li>path: takes effect for an absolute path.</li>
 * @method array getMaxAgeContents() Obtain <p>Matching content for the corresponding type of MaxAgeType:</p><li>For all, fill in *;</li><li>For file, fill in the extension, such as jpg or txt;</li><li>For directory, fill in the path, such as /xxx/test/;</li><li>For path, fill in the absolute path, such as /xxx/test.html.</li><b>Note: The all rule is non-deletable, follows the origin site by default, and is modifiable.</b>
 * @method void setMaxAgeContents(array $MaxAgeContents) Set <p>Matching content for the corresponding type of MaxAgeType:</p><li>For all, fill in *;</li><li>For file, fill in the extension, such as jpg or txt;</li><li>For directory, fill in the path, such as /xxx/test/;</li><li>For path, fill in the absolute path, such as /xxx/test.html.</li><b>Note: The all rule is non-deletable, follows the origin site by default, and is modifiable.</b>
 * @method integer getMaxAgeTime() Obtain <p>MaxAge time setting, in seconds; <br><b>Note: 0 means no cache.</b></p>
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set <p>MaxAge time setting, in seconds; <br><b>Note: 0 means no cache.</b></p>
 * @method string getFollowOrigin() Obtain <p>Whether to follow the origin site. Valid values: on, off. When enabled, the time setting is ignored.</p>
 * @method void setFollowOrigin(string $FollowOrigin) Set <p>Whether to follow the origin site. Valid values: on, off. When enabled, the time setting is ignored.</p>
 */
class MaxAgeRule extends AbstractModel
{
    /**
     * @var string <p>Rule type:</p><li>all: takes effect for all files;</li><li>file: takes effect for a specified file suffix;</li><li>directory: takes effect for a specified path;</li><li>path: takes effect for an absolute path.</li>
     */
    public $MaxAgeType;

    /**
     * @var array <p>Matching content for the corresponding type of MaxAgeType:</p><li>For all, fill in *;</li><li>For file, fill in the extension, such as jpg or txt;</li><li>For directory, fill in the path, such as /xxx/test/;</li><li>For path, fill in the absolute path, such as /xxx/test.html.</li><b>Note: The all rule is non-deletable, follows the origin site by default, and is modifiable.</b>
     */
    public $MaxAgeContents;

    /**
     * @var integer <p>MaxAge time setting, in seconds; <br><b>Note: 0 means no cache.</b></p>
     */
    public $MaxAgeTime;

    /**
     * @var string <p>Whether to follow the origin site. Valid values: on, off. When enabled, the time setting is ignored.</p>
     */
    public $FollowOrigin;

    /**
     * @param string $MaxAgeType <p>Rule type:</p><li>all: takes effect for all files;</li><li>file: takes effect for a specified file suffix;</li><li>directory: takes effect for a specified path;</li><li>path: takes effect for an absolute path.</li>
     * @param array $MaxAgeContents <p>Matching content for the corresponding type of MaxAgeType:</p><li>For all, fill in *;</li><li>For file, fill in the extension, such as jpg or txt;</li><li>For directory, fill in the path, such as /xxx/test/;</li><li>For path, fill in the absolute path, such as /xxx/test.html.</li><b>Note: The all rule is non-deletable, follows the origin site by default, and is modifiable.</b>
     * @param integer $MaxAgeTime <p>MaxAge time setting, in seconds; <br><b>Note: 0 means no cache.</b></p>
     * @param string $FollowOrigin <p>Whether to follow the origin site. Valid values: on, off. When enabled, the time setting is ignored.</p>
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
