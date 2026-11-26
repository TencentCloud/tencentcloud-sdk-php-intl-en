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
 * CreateRule request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getRuleName() Obtain Rule name. The string length is 1–255.
 * @method void setRuleName(string $RuleName) Set Rule name. The string length is 1–255.
 * @method string getStatus() Obtain Rule status. Valid values:
<li> enable: Enable;</li>
<li> disable: disabled.</li>
 * @method void setStatus(string $Status) Set Rule status. Valid values:
<li> enable: Enable;</li>
<li> disable: disabled.</li>
 * @method array getRules() Obtain Rule content.
 * @method void setRules(array $Rules) Set Rule content.
 * @method array getTags() Obtain Rule tag.
 * @method void setTags(array $Tags) Set Rule tag.
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Rule name. The string length is 1–255.
     */
    public $RuleName;

    /**
     * @var string Rule status. Valid values:
<li> enable: Enable;</li>
<li> disable: disabled.</li>
     */
    public $Status;

    /**
     * @var array Rule content.
     */
    public $Rules;

    /**
     * @var array Rule tag.
     */
    public $Tags;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $RuleName Rule name. The string length is 1–255.
     * @param string $Status Rule status. Valid values:
<li> enable: Enable;</li>
<li> disable: disabled.</li>
     * @param array $Rules Rule content.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
