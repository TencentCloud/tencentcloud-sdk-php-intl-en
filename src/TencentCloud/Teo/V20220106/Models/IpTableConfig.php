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
 * IP/Region blocklist/allowlist configuration
 *
 * @method string getSwitch() Obtain Switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Switch
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain []
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set []
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IpTableConfig extends AbstractModel
{
    /**
     * @var string Switch
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array []
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @param string $Switch Switch
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rules []
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IpTableRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
