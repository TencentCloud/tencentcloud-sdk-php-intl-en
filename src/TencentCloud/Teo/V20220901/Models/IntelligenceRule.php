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
 * Bot intelligence rules
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIntelligenceRuleItems() Obtain Items in a bot intelligence rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligenceRuleItems(array $IntelligenceRuleItems) Set Items in a bot intelligence rule
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IntelligenceRule extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array Items in a bot intelligence rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntelligenceRuleItems;

    /**
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IntelligenceRuleItems Items in a bot intelligence rule
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

        if (array_key_exists("IntelligenceRuleItems",$param) and $param["IntelligenceRuleItems"] !== null) {
            $this->IntelligenceRuleItems = [];
            foreach ($param["IntelligenceRuleItems"] as $key => $value){
                $obj = new IntelligenceRuleItem();
                $obj->deserialize($value);
                array_push($this->IntelligenceRuleItems, $obj);
            }
        }
    }
}
