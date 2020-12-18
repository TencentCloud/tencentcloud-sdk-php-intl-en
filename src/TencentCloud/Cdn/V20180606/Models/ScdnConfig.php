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
 * CC attack defense configuration
 *
 * @method string getSwitch() Obtain Valid values: `on` and `off`.
 * @method void setSwitch(string $Switch) Set Valid values: `on` and `off`.
 * @method array getRules() Obtain Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnConfig extends AbstractModel
{
    /**
     * @var string Valid values: `on` and `off`.
     */
    public $Switch;

    /**
     * @var array Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @param string $Switch Valid values: `on` and `off`.
     * @param array $Rules Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
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
                $obj = new ScdnCCRules();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
