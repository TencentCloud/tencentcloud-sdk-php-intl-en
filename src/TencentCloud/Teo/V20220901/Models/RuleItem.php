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
 * Rule details of the rule engine
 *
 * @method string getRuleId() Obtain The rule ID.
 * @method void setRuleId(string $RuleId) Set The rule ID.
 * @method string getRuleName() Obtain The rule name. It is a string that can contain 1–255 characters.
 * @method void setRuleName(string $RuleName) Set The rule name. It is a string that can contain 1–255 characters.
 * @method string getStatus() Obtain Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
 * @method void setStatus(string $Status) Set Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
 * @method array getRules() Obtain The rule content.
 * @method void setRules(array $Rules) Set The rule content.
 * @method integer getRulePriority() Obtain The rule priority. The greater the value, the higher the priority. The minimum value is `1`.
 * @method void setRulePriority(integer $RulePriority) Set The rule priority. The greater the value, the higher the priority. The minimum value is `1`.
 * @method array getTags() Obtain Tag of the rule.
 * @method void setTags(array $Tags) Set Tag of the rule.
 */
class RuleItem extends AbstractModel
{
    /**
     * @var string The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule name. It is a string that can contain 1–255 characters.
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
     * @var integer The rule priority. The greater the value, the higher the priority. The minimum value is `1`.
     */
    public $RulePriority;

    /**
     * @var array Tag of the rule.
     */
    public $Tags;

    /**
     * @param string $RuleId The rule ID.
     * @param string $RuleName The rule name. It is a string that can contain 1–255 characters.
     * @param string $Status Rule status. Values:
<li>`enable`: Enabled</li>
<li>`disable`: Disabled</li>
     * @param array $Rules The rule content.
     * @param integer $RulePriority The rule priority. The greater the value, the higher the priority. The minimum value is `1`.
     * @param array $Tags Tag of the rule.
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
