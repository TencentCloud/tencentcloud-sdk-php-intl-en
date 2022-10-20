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
 * The managed rule details
 *
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getDescription() Obtain The rule description.
 * @method void setDescription(string $Description) Set The rule description.
 * @method string getRuleLevelDesc() Obtain The description of the rule level.
 * @method void setRuleLevelDesc(string $RuleLevelDesc) Set The description of the rule level.
 * @method array getRuleTags() Obtain The rule tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleTags(array $RuleTags) Set The rule tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The update time in the format of YYYY-MM-DD hh:mm:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The update time in the format of YYYY-MM-DD hh:mm:ss.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>It can be left empty when you query a managed rule.
 * @method void setStatus(string $Status) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>It can be left empty when you query a managed rule.
 * @method string getRuleTypeName() Obtain The rule type.
 * @method void setRuleTypeName(string $RuleTypeName) Set The rule type.
 * @method integer getRuleTypeId() Obtain ID of the rule type.
 * @method void setRuleTypeId(integer $RuleTypeId) Set ID of the rule type.
 * @method string getRuleTypeDesc() Obtain Description of the rule type.
 * @method void setRuleTypeDesc(string $RuleTypeDesc) Set Description of the rule type.
 */
class WafGroupRule extends AbstractModel
{
    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule description.
     */
    public $Description;

    /**
     * @var string The description of the rule level.
     */
    public $RuleLevelDesc;

    /**
     * @var array The rule tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleTags;

    /**
     * @var string The update time in the format of YYYY-MM-DD hh:mm:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>It can be left empty when you query a managed rule.
     */
    public $Status;

    /**
     * @var string The rule type.
     */
    public $RuleTypeName;

    /**
     * @var integer ID of the rule type.
     */
    public $RuleTypeId;

    /**
     * @var string Description of the rule type.
     */
    public $RuleTypeDesc;

    /**
     * @param integer $RuleId The rule ID.
     * @param string $Description The rule description.
     * @param string $RuleLevelDesc The description of the rule level.
     * @param array $RuleTags The rule tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime The update time in the format of YYYY-MM-DD hh:mm:ss.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>It can be left empty when you query a managed rule.
     * @param string $RuleTypeName The rule type.
     * @param integer $RuleTypeId ID of the rule type.
     * @param string $RuleTypeDesc Description of the rule type.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleLevelDesc",$param) and $param["RuleLevelDesc"] !== null) {
            $this->RuleLevelDesc = $param["RuleLevelDesc"];
        }

        if (array_key_exists("RuleTags",$param) and $param["RuleTags"] !== null) {
            $this->RuleTags = $param["RuleTags"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }
    }
}
