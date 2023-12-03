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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A part of `CacheKey`
 *
 * @method string getSwitch() Obtain Whether to include `CacheTag` as part of `CacheKey`. Values:
`on`: Yes
`off`: No
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to include `CacheTag` as part of `CacheKey`. Values:
`on`: Yes
`off`: No
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Value of custom `CacheTag`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setValue(string $Value) Set Value of custom `CacheTag`
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheTagKey extends AbstractModel
{
    /**
     * @var string Whether to include `CacheTag` as part of `CacheKey`. Values:
`on`: Yes
`off`: No
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Value of custom `CacheTag`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @param string $Switch Whether to include `CacheTag` as part of `CacheKey`. Values:
`on`: Yes
`off`: No
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Value Value of custom `CacheTag`
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
