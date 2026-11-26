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
 * Rule engine rule details
 *
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method string getRuleName() Obtain Rule name. The name string must be 1 to 255 characters in length.
 * @method void setRuleName(string $RuleName) Set Rule name. The name string must be 1 to 255 characters in length.
 * @method string getStatus() Obtain Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: disabled. </li>
 * @method void setStatus(string $Status) Set Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: disabled. </li>
 * @method array getRules() Obtain Rule content.
 * @method void setRules(array $Rules) Set Rule content.
 * @method integer getRulePriority() Obtain Rule priority. A larger value indicates higher priority. Minimum value: 1.
 * @method void setRulePriority(integer $RulePriority) Set Rule priority. A larger value indicates higher priority. Minimum value: 1.
 * @method array getTags() Obtain Rule tag.
 * @method void setTags(array $Tags) Set Rule tag.
 */
class RuleItem extends AbstractModel
{
    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Rule name. The name string must be 1 to 255 characters in length.
     */
    public $RuleName;

    /**
     * @var string Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: disabled. </li>
     */
    public $Status;

    /**
     * @var array Rule content.
     */
    public $Rules;

    /**
     * @var integer Rule priority. A larger value indicates higher priority. Minimum value: 1.
     */
    public $RulePriority;

    /**
     * @var array Rule tag.
     */
    public $Tags;

    /**
     * @param string $RuleId Rule ID.
     * @param string $RuleName Rule name. The name string must be 1 to 255 characters in length.
     * @param string $Status Rule status. Valid values:
<li> enable: enable; </li>
<li> disable: disabled. </li>
     * @param array $Rules Rule content.
     * @param integer $RulePriority Rule priority. A larger value indicates higher priority. Minimum value: 1.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
