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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Single link downstream speed limit configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable downstream speed limit. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable downstream speed limit. Values:
`on`: Enable
`off`: Disable
 * @method array getCappingRules() Obtain Downstream speed limiting rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCappingRules(array $CappingRules) Set Downstream speed limiting rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DownstreamCapping extends AbstractModel
{
    /**
     * @var string Whether to enable downstream speed limit. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Downstream speed limiting rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CappingRules;

    /**
     * @param string $Switch Whether to enable downstream speed limit. Values:
`on`: Enable
`off`: Disable
     * @param array $CappingRules Downstream speed limiting rules
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

        if (array_key_exists("CappingRules",$param) and $param["CappingRules"] !== null) {
            $this->CappingRules = [];
            foreach ($param["CappingRules"] as $key => $value){
                $obj = new CappingRule();
                $obj->deserialize($value);
                array_push($this->CappingRules, $obj);
            }
        }
    }
}
