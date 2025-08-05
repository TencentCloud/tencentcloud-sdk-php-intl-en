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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL configuration
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method array getAclUserRules() Obtain The custom rule.
 * @method void setAclUserRules(array $AclUserRules) Set The custom rule.
 * @method array getCustomizes() Obtain Managed custom rules.
 * @method void setCustomizes(array $Customizes) Set Managed custom rules.
 */
class AclConfig extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var array The custom rule.
     */
    public $AclUserRules;

    /**
     * @var array Managed custom rules.
     */
    public $Customizes;

    /**
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param array $AclUserRules The custom rule.
     * @param array $Customizes Managed custom rules.
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

        if (array_key_exists("AclUserRules",$param) and $param["AclUserRules"] !== null) {
            $this->AclUserRules = [];
            foreach ($param["AclUserRules"] as $key => $value){
                $obj = new AclUserRule();
                $obj->deserialize($value);
                array_push($this->AclUserRules, $obj);
            }
        }

        if (array_key_exists("Customizes",$param) and $param["Customizes"] !== null) {
            $this->Customizes = [];
            foreach ($param["Customizes"] as $key => $value){
                $obj = new AclUserRule();
                $obj->deserialize($value);
                array_push($this->Customizes, $obj);
            }
        }
    }
}
