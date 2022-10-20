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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The managed rule
 *
 * @method array getWafGroupDetails() Obtain List of managed rule groups.
 * @method void setWafGroupDetails(array $WafGroupDetails) Set List of managed rule groups.
 * @method string getLevel() Obtain The level of the managed rule group
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
 * @method void setLevel(string $Level) Set The level of the managed rule group
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
 * @method string getAct() Obtain Reserved field.
 * @method void setAct(string $Act) Set Reserved field.
 * @method string getMode() Obtain The mode. Values:
<li>`block`: Block</li>
<li>`observe`: Observer</li>
 * @method void setMode(string $Mode) Set The mode. Values:
<li>`block`: Block</li>
<li>`observe`: Observer</li>
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 */
class WafGroupInfo extends AbstractModel
{
    /**
     * @var array List of managed rule groups.
     */
    public $WafGroupDetails;

    /**
     * @var string The level of the managed rule group
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
     */
    public $Level;

    /**
     * @var string Reserved field.
     */
    public $Act;

    /**
     * @var string The mode. Values:
<li>`block`: Block</li>
<li>`observe`: Observer</li>
     */
    public $Mode;

    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @param array $WafGroupDetails List of managed rule groups.
     * @param string $Level The level of the managed rule group
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
     * @param string $Act Reserved field.
     * @param string $Mode The mode. Values:
<li>`block`: Block</li>
<li>`observe`: Observer</li>
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
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
        if (array_key_exists("WafGroupDetails",$param) and $param["WafGroupDetails"] !== null) {
            $this->WafGroupDetails = [];
            foreach ($param["WafGroupDetails"] as $key => $value){
                $obj = new WafGroupDetail();
                $obj->deserialize($value);
                array_push($this->WafGroupDetails, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
