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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request parameter contained in `CacheKey`
 *
 * @method string getSwitch() Obtain Whether to use `QueryString` as part of `CacheKey`. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to use `QueryString` as part of `CacheKey`. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAction() Obtain `includeCustom`: Include the specified query strings.
`excludeCustom`: Exclude the specified query strings.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAction(string $Action) Set `includeCustom`: Include the specified query strings.
`excludeCustom`: Exclude the specified query strings.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getValue() Obtain Array of query strings used/excluded
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setValue(array $Value) Set Array of query strings used/excluded
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class QueryString extends AbstractModel
{
    /**
     * @var string Whether to use `QueryString` as part of `CacheKey`. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var string `includeCustom`: Include the specified query strings.
`excludeCustom`: Exclude the specified query strings.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Action;

    /**
     * @var array Array of query strings used/excluded
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @param string $Switch Whether to use `QueryString` as part of `CacheKey`. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Action `includeCustom`: Include the specified query strings.
`excludeCustom`: Exclude the specified query strings.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Value Array of query strings used/excluded
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
