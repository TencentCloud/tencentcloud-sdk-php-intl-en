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
 * ModifyRule request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getRuleName() Obtain Rule name. The string name can contain 1–255 characters.
 * @method void setRuleName(string $RuleName) Set Rule name. The string name can contain 1–255 characters.
 * @method array getRules() Obtain Rule content.
 * @method void setRules(array $Rules) Set Rule content.
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method string getStatus() Obtain Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: Disabled.</li>
 * @method void setStatus(string $Status) Set Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: Disabled.</li>
 * @method array getTags() Obtain Rule tag.
 * @method void setTags(array $Tags) Set Rule tag.
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Rule name. The string name can contain 1–255 characters.
     */
    public $RuleName;

    /**
     * @var array Rule content.
     */
    public $Rules;

    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: Disabled.</li>
     */
    public $Status;

    /**
     * @var array Rule tag.
     */
    public $Tags;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $RuleName Rule name. The string name can contain 1–255 characters.
     * @param array $Rules Rule content.
     * @param string $RuleId Rule ID.
     * @param string $Status Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: Disabled.</li>
     * @param array $Tags Rule tag.
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new Rule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
