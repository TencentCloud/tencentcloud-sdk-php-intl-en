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
 * CreateRule request structure.
 *
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method string getRuleName() Obtain The rule name (1 to 255 characters)
 * @method void setRuleName(string $RuleName) Set The rule name (1 to 255 characters)
 * @method string getStatus() Obtain Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
 * @method void setStatus(string $Status) Set Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
 * @method array getRules() Obtain The rule content.
 * @method void setRules(array $Rules) Set The rule content.
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var string The rule name (1 to 255 characters)
     */
    public $RuleName;

    /**
     * @var string Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
     */
    public $Status;

    /**
     * @var array The rule content.
     */
    public $Rules;

    /**
     * @param string $ZoneId ID of the site
     * @param string $RuleName The rule name (1 to 255 characters)
     * @param string $Status Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
     * @param array $Rules The rule content.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new Rule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
