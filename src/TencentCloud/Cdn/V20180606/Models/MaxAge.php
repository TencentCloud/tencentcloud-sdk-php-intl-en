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
 * Browser cache rule configuration, which is used to set the default value of `MaxAge` and is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable browser caching. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable browser caching. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getMaxAgeRules() Obtain MaxAge rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAgeRules(array $MaxAgeRules) Set MaxAge rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method MaxAgeCodeRule getMaxAgeCodeRule() Obtain MaxAge status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAgeCodeRule(MaxAgeCodeRule $MaxAgeCodeRule) Set MaxAge status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class MaxAge extends AbstractModel
{
    /**
     * @var string Whether to enable browser caching. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array MaxAge rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAgeRules;

    /**
     * @var MaxAgeCodeRule MaxAge status code
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAgeCodeRule;

    /**
     * @param string $Switch Whether to enable browser caching. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $MaxAgeRules MaxAge rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param MaxAgeCodeRule $MaxAgeCodeRule MaxAge status code
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

        if (array_key_exists("MaxAgeRules",$param) and $param["MaxAgeRules"] !== null) {
            $this->MaxAgeRules = [];
            foreach ($param["MaxAgeRules"] as $key => $value){
                $obj = new MaxAgeRule();
                $obj->deserialize($value);
                array_push($this->MaxAgeRules, $obj);
            }
        }

        if (array_key_exists("MaxAgeCodeRule",$param) and $param["MaxAgeCodeRule"] !== null) {
            $this->MaxAgeCodeRule = new MaxAgeCodeRule();
            $this->MaxAgeCodeRule->deserialize($param["MaxAgeCodeRule"]);
        }
    }
}
