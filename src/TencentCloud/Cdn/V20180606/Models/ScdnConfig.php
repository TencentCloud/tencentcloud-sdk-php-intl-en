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
 * @method string getSwitch() Obtain Whether to enable SCDN CC configuration. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable SCDN CC configuration. Values:
`on`: Enable
`off`: Disable
 * @method array getRules() Obtain Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getAdvancedRules() Obtain Advanced custom CC attack defense rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvancedRules(array $AdvancedRules) Set Advanced custom CC attack defense rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getGlobalAdvancedRules() Obtain Global advanced CC protection rules
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setGlobalAdvancedRules(array $GlobalAdvancedRules) Set Global advanced CC protection rules
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnConfig extends AbstractModel
{
    /**
     * @var string Whether to enable SCDN CC configuration. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var array Advanced custom CC attack defense rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AdvancedRules;

    /**
     * @var array Global advanced CC protection rules
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $GlobalAdvancedRules;

    /**
     * @param string $Switch Whether to enable SCDN CC configuration. Values:
`on`: Enable
`off`: Disable
     * @param array $Rules Custom CC attack defense rule
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $AdvancedRules Advanced custom CC attack defense rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $GlobalAdvancedRules Global advanced CC protection rules
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("AdvancedRules",$param) and $param["AdvancedRules"] !== null) {
            $this->AdvancedRules = [];
            foreach ($param["AdvancedRules"] as $key => $value){
                $obj = new AdvancedCCRules();
                $obj->deserialize($value);
                array_push($this->AdvancedRules, $obj);
            }
        }

        if (array_key_exists("GlobalAdvancedRules",$param) and $param["GlobalAdvancedRules"] !== null) {
            $this->GlobalAdvancedRules = [];
            foreach ($param["GlobalAdvancedRules"] as $key => $value){
                $obj = new AdvancedCCRules();
                $obj->deserialize($value);
                array_push($this->GlobalAdvancedRules, $obj);
            }
        }
    }
}
